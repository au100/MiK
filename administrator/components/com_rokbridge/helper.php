<?php
/**
 * @version	$Id: helper.php 2047 2007-10-02 00:42:56Z rhuk $ 
 * @package RokBridge - phpBB3 edition
 * @copyright Copyright (C) 2009 RocketTheme. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @author RocketTheme, LLC
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//Get the phpbb3 path from rokbridge configuration
define('PHPBB_AVATAR_UPLOAD', 1);
define('PHPBB_AVATAR_REMOTE', 2);
define('PHPBB_AVATAR_GALLERY', 3);

class RokBridgeHelper {
    
    var $bridge_params;
    var $bridge_path;
    var $phpbb_path;
    var $bridge_config;
    var $phpbb_db;
    var $link_format;
    
    
    //constructor
    function RokBridgeHelper() {
        
        $table =& JTable::getInstance('component');
		$table->loadByOption( 'com_rokbridge' );
		$params = new JParameter( $table->params, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'config.xml' );
		
		//Include the bridge configuration
		require_once(JPATH_ROOT.DS.$params->get('bridge_path').DS.'configuration.php');
		if (!class_exists('JConfigForum')) return;
	 		
		//Create a bridge configration object
		$bridge_config = new JConfigForum();
		$this->bridge_config = $bridge_config;
		$this->phpbb_path = $bridge_config->phpbb_path;
		$this->bridge_path = $params->get('bridge_path');
		$this->bridge_params = $params;
		$this->link_format = $params->get('link_format','bridged');
		
		//Include the phpBB3 configuration
		require(JPATH_ROOT.DS.$this->phpbb_path.DS.'config.php');
		
		$options = array ( 'driver' => 'mysql', 'host' => $dbhost, 'user' => $dbuser, 'password' => $dbpasswd, 'database' => $dbname, 'prefix' =>  $table_prefix );
		
		$this->phpbb_db   =& JDatabase::getInstance($options);
		
		//Include the bridge configuration
		require_once(JPATH_ROOT.DS.$this->bridge_path.DS.'includes'.DS.'helper.php');
			
		//load phpBB3 elements	
		JForumHelper::loadPHPBB3(JPATH_ROOT.DS.$this->bridge_path);
        
    }
    
    function getWhereClause($username) {
        $phpbb_db = $this->phpbb_db;
        $fields = $phpbb_db->getTableFields('#__users');
        
        $where_clause = "";
		
		if (isset($username)) {
		    if(isset($fields['#__users']['login_name'])) {
    		    $where_clause = "login_name = '" . $username . "'";
    		} else {
    		    $where_clause = "username_clean = ". $phpbb_db->Quote(utf8_clean_string($username));
    		}
        }
        return $where_clause;
    }
    
    function getAvatar(&$user, $avatar_size, $extra_info="",$default="")
	{
		
		if (isset($user) and ($user->user_avatar or (!$user->user_avatar and $default)))
		{

		    if ($user->user_avatar_width < $avatar_size && $user->user_avatar_height < $avatar_size)
		    {
		        $width = $user->user_avatar_width;
		        $height = $user->user_avatar_height;
		    }
		    else 
		    {
		        $width = ($user->user_avatar_width > $user->user_avatar_height) ? $avatar_size : ($avatar_size / $user->user_avatar_height) * $user->user_avatar_width;
		        $height = ($user->user_avatar_height > $user->user_avatar_width) ? $avatar_size : ($avatar_size / $user->user_avatar_width) * $user->user_avatar_height;
		    }
		
			$avatar_img = '';

			switch ($user->user_avatar_type)
			{
				case PHPBB_AVATAR_REMOTE:
				    $avatar_img = $user->user_avatar;
				break;
				
				case PHPBB_AVATAR_UPLOAD:
					$avatar_img = $this->phpbb_path . "/download/file.php?avatar=" . $user->user_avatar;
				break;

				case PHPBB_AVATAR_GALLERY:
					$avatar_img = $this->phpbb_path . "/images/avatars/gallery/" . $user->user_avatar;
				break;
			}

            if ($user->user_avatar == '') {
                $avatar_img = $default;
                $width = $avatar_size;
                $height = $avatar_size;
            } 

			return '<img src="' . $avatar_img . '" style="width:'.$width.'px;height:'.$height.'px;vertical-align:middle;" alt="'.$user->username.$extra_info.'" title="'.$user->username.$extra_info.'" />';		

		}
		return '';

	}
    
    
}




?>