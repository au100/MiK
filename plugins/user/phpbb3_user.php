<?php 
/**
 * @version		$Id: phpbb3.php 3087 2008-01-11 01:45:02Z jinx $ 
 * @package RokBridge - phpBB3 edition
 * @copyright Copyright (C) 2009 RocketTheme. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @author RocketTheme, LLC
 *
 * Modified by Darkick <darkick@darkick.ru> (http://joomla.darkick.ru)
 * @date	2010-06-08
 */


jimport('joomla.plugin.plugin');

/**
 * phpBB3 User plugin
 *
 * @author		Johan Janssens <johan@joomlatools.org>
 * @package		Rocketwerx
 * @subpackage	phpBB3Bridge
 */
class plgUserPHPBB3_User extends JPlugin
{
	/**
	 * Constructor
	 *
	 * For php4 compatability we must not use the __constructor as a constructor for plugins
	 * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
	 * This causes problems with cross-referencing necessary for the observer design pattern.
	 *
	 * @param 	object $subject The object to observe
	 * @param 	array  $config  An array that holds the plugin configuration
	 */
	function plgUserPHPBB3_User(& $subject, $config) {
		parent::__construct($subject, $config);
	}
	
	/**
	 * Sync the user data with phpBB
	 *
	 * Method is called before user data is stored in the database
	 *
	 * @param 	array		holds the new user data
	 * @param 	boolean		true if a new user is stored
	 */
	function onBeforeStoreUser($user_data, $isnew)
	{
		//Store the user information before it is changed in a global
		$GLOBALS['TEMP_USER'] = $user_data;
		
		return true;
	}

	/**
	 * Sync the user data with phpBB
	 *
	 * Method is called after user data is stored in the database
	 *
	 * @param 	array	  	holds the old user data
	 * @param 	boolean		true if a new user is stored
	 * @param	boolean		true if user was succesfully stored in the database
	 * @param	string		message
	 */
	function onAfterStoreUser($user_data, $isnew, $succes, $msg)
	{
		global $phpbb_root_path, $phpEx;
		global $auth, $user, $template, $cache, $db, $config;
		
		//Don't continue if the user wasn't stored succesfully
		if(!$succes) {
			return false;
		}
		
		$table = &JTable::getInstance('component');
		$table->loadByOption('com_rokbridge');
		$params = new JParameter( $table->params, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'config.xml' );
		
		/**
		 * Modified by Darkick
		 * Check for valid username and create user immediately (if needs)
		 */
		//Include the bridge configuration
		$path = JPATH_ROOT.DS.$params->get('bridge_path');
		require_once($path.DS.'includes'.DS.'helper.php');
			
		if(!defined('IN_PHPBB')) {
			JForumHelper::loadPHPBB3($path);
		}
		
		require_once($phpbb_root_path.'includes'.DS.'functions_user.'.$phpEx);
		
		if ($isnew)
		{
			// Check for existing username in the forum, so the user was registered first in the forum (not in Joomla)
			if ($db)
			{
				$sql = 'SELECT username FROM '.USERS_TABLE.' WHERE LOWER(username) = LOWER(\''.$db->sql_escape($user_data['username']).'\')';
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
				// The user already present in the forum, no needs to do anything more
				if ($row) {
					return true;
				}
			}
			
			// Validate username for allowed characters and names (dissallow "faked" usernames!)
			if (!function_exists('utf8_strtolower')) {
				jimport('phputf8.utf8');
			}
			if ($errorMsg = validate_username($user_data['username'], ''))
			{
				if ($user_data['id'])
				{
					$juser = &JFactory::getUser($user_data['id']);
					$juser->delete();
				}
				switch ($errorMsg)
				{
					case 'INVALID_CHARS':
						$errorMsg = 'INVALID_CHARS';
						break;
						
					case 'USERNAME_TAKEN':
						$errorMsg = 'WARNREG_INUSE';
						break;
						
					case 'USERNAME_DISALLOWED':
						$errorMsg = 'USERNAME_DISALLOWED';
						break;
				}
				jimport('joomla.error.error');
				JError::raiseWarning(1, JText::_($errorMsg));
				
				return false;
			}
			
			// Create user in the forum immediately along Joomla (if option enabled)
			if ($params->get('create_user_immediately'))
			{
				$user_row = array(
					'username'		=> $user_data['username'],
					'group_id'		=> (int)$params->get('group_id', 2),
					'user_email'	=> $user_data['email'],
					'user_type'		=> ($params->get('user_inactive') ? ($user_data['block'] ? USER_INACTIVE : USER_NORMAL) : USER_NORMAL),	// WARNING!!!: Joomla! components must trigger user plugin functions
					'user_new'		=> (int)$params->get('user_new', 0),
				);
				user_add($user_row);
			}
			unset($GLOBALS['TEMP_USER']);
			return true;
		}
		
		
		$username = $GLOBALS['TEMP_USER']['username'];
		$fullname = $this->_fullNameSupport();
		$userid   = $this->_getUserId($username, $fullname); 
		
		// Don't try to store a user which doesn't exist yet in phpBB
		if(intval($userid) == 0) {
			return true;
		}
				
		//Activate/Deactivate the user
		$mode = $user_data['block'] ? 'deactivate' : 'activate';
		user_active_flip($mode, $userid['user_id']);
		
		if(!empty($fullname)) 
		{

			//Update the username if it was changed
			if($user_data['name'] != $GLOBALS['TEMP_USER']['name']) {
				user_update_name($GLOBALS['TEMP_USER']['name'], $user_data['name']);
			}

		
			//Store the user information
			$sql_ary = array(
				'login_name'		=> $user_data['username'],
				'username'			=> $user_data['name'],
				'username_clean'	=> utf8_clean_string($user_data['name']),
				'user_email'		=> $user_data['email'],
				'user_email_hash'	=> crc32($user_data['email']) . strlen($user_data['email']),
			);
		}
		else
		{
			//Update the username if it was changed
			if($user_data['username'] != $GLOBALS['TEMP_USER']['username']) {
				user_update_name($GLOBALS['TEMP_USER']['username'], $user_data['username']);
			}
		
			//Store the user information
			$sql_ary = array(
				'username'			=> $user_data['username'],
				'username_clean'	=> utf8_clean_string($user_data['username']),
				'user_email'		=> $user_data['email'],
				'user_email_hash'	=> crc32($user_data['email']) . strlen($user_data['email']),
			);
		}
			
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
			WHERE user_id = ' . $userid['user_id'];
		$db->sql_query($sql);
		
		//Unset the temp user global
		unset($GLOBALS['TEMP_USER']);
	}

	/**
	 * Remove all sessions for the user name
	 *
	 * Method is called after user data is deleted from the database
	 *
	 * @param 	array	  	holds the user data
	 * @param	boolean		true if user was succesfully stored in the database
	 * @param	string		message
	 */
	function onAfterDeleteUser($user_data, $succes, $msg)
	{
		global $phpbb_root_path, $phpEx;
		global $auth, $user, $template, $cache, $db, $config;
		
		
		//Don't continue if the user wasn't deleted succesfully
		if(!$succes) {
			return false;
		}
		
		$table =& JTable::getInstance('component');
		$table->loadByOption( 'com_rokbridge' );
		$params = new JParameter( $table->params, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'config.xml' );
				
		//Include the bridge configuration
		$path = JPATH_ROOT.DS.$params->get('bridge_path');
		require_once($path.DS.'includes'.DS.'helper.php');
			
		JForumHelper::loadPHPBB3($path);
		
		require_once($phpbb_root_path.'includes'.DS.'functions_user.php');
		
		$username = $user_data['username'];
		$fullname = $this->_fullNameSupport();
		$userid   = $this->_getUserId($username, $fullname);
		
		// Don't try to delete a user which doesn't exist yet in phpBB
		if(empty($userid)) {
			return true;
		}
		
		/**
		 * Modified by Darkick
		 * Options to choose user delete mode and post delete mode
		 */
		$user_delete_mode = ($params->get('user_delete_mode', 'retain') != 'remove' ? 'retain' : 'remove');
		if ($params->get('save_post_username', true)) {
			$post_username = $username;
		} else {
			$post_username = false;
		}
		user_delete($user_delete_mode, $userid['user_id'], $post_username);
		
		
		return true;
	}

	/**
	 * This method should handle any login logic and report back to the subject
	 *
	 * @access	public
	 * @param 	array 	holds the user data
	 * @param 	array    extra options
	 * @return	boolean	True on success
	 */
	function onLoginUser($user_data, $options = array())
	{
		global $path, $phpbb_root_path, $phpEx;
		global $auth, $user, $template, $cache, $db, $config, $mainframe;
		
		// don't perform phpbb3 login for joomla admin logins
		if( $mainframe->isAdmin() ) return true;  

		$instance =& JFactory::getUser($user_data['username']);

		
		// If the user exists and is blocked, redirect with an error
		if (isset($instance) && $instance) {
			if ($instance->get('block') == 1) {
				// clear remember me cookie if set
				setcookie( JUtility::getHash('JLOGIN_REMEMBER'), '', time() - 86400, '/' );
				return true;
			}
		}
		
		if(defined('LOGIN_PHPBB')) {
			return true;
		}
		
		$table =& JTable::getInstance('component');
		$table->loadByOption( 'com_rokbridge' );
		$params = new JParameter( $table->params, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'config.xml' );
					
		//Include the bridge configuration
		$path = JPATH_ROOT.DS.$params->get('bridge_path');
		require_once($path.DS.'includes'.DS.'helper.php');
			
		JForumHelper::loadPHPBB3($path);
		
		// Start session management
		$user->session_begin();
		$auth->acl($user->data);
		

		// Try to log the user in into phpBB3
		
		$result = $auth->login($instance->username, $user_data, 1);
			
		if($result['status'] == LOGIN_SUCCESS) {
			return true;
		}
		
		return false;
	}

	/**
	 * This method should handle any logout logic and report back to the subject
	 *
	 * @access public
	 * @param array holds the user data
	 * @return boolean True on success
	 * @since 1.5
	 */
	function onLogoutUser($user_data, $options = array())
	{
		global $phpbb_root_path, $phpEx;
		global $auth, $user, $template, $cache, $db, $config, $mainframe; 
		
		// don't perform phpbb3 login for joomla admin logins  
		
		$me =& JFactory::getUser();  

		// don't log yourself out when you logout of the joomla admin
		if( $mainframe->isAdmin() && !$me->username ) return true;
		
		
		if(defined('LOGOUT_PHPBB')) {
			return true;
		}	
		
		$table =& JTable::getInstance('component');
		$table->loadByOption( 'com_rokbridge' );
		$params = new JParameter( $table->params, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'config.xml' );
		
				
		//Include the bridge configuration
		$path = JPATH_ROOT.DS.$params->get('bridge_path');
		require_once($path.DS.'includes'.DS.'helper.php');
			
		JForumHelper::loadPHPBB3($path);
		
		require_once($phpbb_root_path.DS.'includes/functions_user.php');
		
		$username = $user_data['username'];
		$fullname = $this->_fullNameSupport();
		$userid   = $this->_getUserId($username, $fullname);

		//clear remember me cookie if set
		setcookie( JUtility::getHash('JLOGIN_REMEMBER'), '', time() - 86400, '/' );

		// Don't try to logout a user which doesn't exist yet in phpBB
		if(empty($userid)) {
			return true;
		}
		
		// Hit the user last visit field
		$sql = 'UPDATE ' . USERS_TABLE . '
				SET user_lastvisit = ' . (int) time() . '
				WHERE user_id = ' . (int) $userid['user_id'];
		$db->sql_query($sql);
		
		//Remove the session from the database
		$sql = 'DELETE FROM ' . SESSIONS_TABLE . "
			WHERE session_user_id = " . (int) $userid['user_id'];
		$db->sql_query($sql);
		
		//Remove the session keys from the database
		$sql = 'DELETE FROM ' . SESSIONS_KEYS_TABLE . "
			WHERE user_id = " . (int) $userid['user_id'];
		$db->sql_query($sql);
			
		// Start session management
		$user->session_begin();
		$auth->acl($user->data);
		
		if ($user->data['user_id'] == $userid['user_id'])
		{
			// Destroy the php session for this user
			$user->session_kill();
			$user->session_begin();
			return true;
		}
			
		return false;
	}
	
	function onLoginFailure($response) 
	{
		$app = JFactory::getApplication();
		$app->logout();
		
		JError::raiseWarning('SOME_ERROR_CODE', JText::_('E_LOGIN_AUTHENTICATE'));
	}

	/*
 	 * Check if the login_name field exists if so use it to get the user data
 	 * Note : this fields is getting added by the SMF to phpBB3 convertor.
 	 */
	
	function _fullNameSupport() 
	{
		global $db;

		$sql = 'DESCRIBE '.USERS_TABLE.' login_name';
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		
		return $row;
	}
	
	/*
	 * function to get username based on fullname support
	 */
	function _getUserId($username, $fullname) 
	{
		global $db;
		
		// if login_name exists use it
		if (!empty($fullname)) {
			$where = "login_name='" . $username . "'";
		} else {
//			$where = "username_clean='" . utf8_clean_string($username) . "'";
			/**
			 * Modified by Darkick
			 */
			$where = 'LOWER(username) = LOWER(\''.$db->sql_escape($username).'\')';
		}
		
		// Get the user_id of the phpbb user
		$sql = 'SELECT user_id FROM '.USERS_TABLE.' WHERE '.$where;
		
		$result = $db->sql_query($sql);
		$userid = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		
		return $userid;
	}

}
