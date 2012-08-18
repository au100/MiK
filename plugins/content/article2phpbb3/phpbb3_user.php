<?php
/**
 * phpBB3 class user extension for Joomla!
 *
 * @author		Darkick <darkick@mail.ru>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

if (!defined('IN_PHPBB'))
{
	exit;
}


class phpbb3_user extends user
{

	function session_begin($phpbb_user_id = 0)
	{
		global $phpEx, $db, $config, $phpbb_root_path;
		
		if (!$phpbb_user_id)
		{
			$phpbb_user_id = phpbb3_user::user_joomla_to_phpbb();
		}

		// Give us some basic information
		$this->time_now = time();

		$sql = 'SELECT u.*
				FROM ' . USERS_TABLE . ' u
				WHERE u.user_id = '. (int) $phpbb_user_id;

		$result = $db->sql_query($sql);
		$this->data = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		$this->data['is_registered'] = ($this->data['user_id'] != ANONYMOUS && ($this->data['user_type'] == USER_NORMAL || $this->data['user_type'] == USER_FOUNDER)) ? true : false;
		$this->data['is_bot'] = (!$this->data['is_registered'] && $this->data['user_id'] != ANONYMOUS) ? true : false;
		$this->data['user_lang'] = basename($this->data['user_lang']);
		
		$this->ip = $_SERVER['REMOTE_ADDR'];
		
		return true;
	}

	
	/**
	*	Getting phpBB3 user_id from Joomla! user id
	*		@param	int = 0	current Joomla user in phpBB
	*/
	static function user_joomla_to_phpbb($j_user_id = 0)
	{
		global $db;
		
		$jdb =& JFactory::getDBO();
		if (!$j_user_id)
		{
			$user =& JFactory::getUser();
			$j_user_id = $user->id;
		}
		
		$query = 'SELECT `username` FROM #__users WHERE `id`='.(int)$j_user_id;
		$jdb->setQuery($query);
		$result = $jdb->loadObject();
		
		if (!$result)
		{
			$phpbb_user_id = ANONYMOUS;
		} else {
			$username = $result->username;
			
			$sql = 'SELECT `user_id` FROM '.USERS_TABLE.' WHERE `username`='."'".$db->sql_escape($username)."'";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
			if (!$row)
			{
				$phpbb_user_id = ANONYMOUS;
			} else {
				$phpbb_user_id = (int) $row['user_id'];
			}
		}
		
		return $phpbb_user_id;
	}
}

?>