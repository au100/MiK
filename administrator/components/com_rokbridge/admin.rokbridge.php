<?php
/**
 * @version	$Id: admin.rokbridge.php 2047 2007-10-02 00:42:56Z rhuk $ 
 * @package RokBridge - phpBB3 edition
 * @copyright Copyright (C) 2009 RocketTheme. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @author RocketTheme, LLC
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );  

define('ROKBRIDGE_VERSION','1.0rc12');
define('PATCH_VERSION','3.0.5');

$joomla_authplg_installed = false;
$joomla_userplg_installed = false;
$bridge_install_enable = true;
$bridge_installed = false;
$phpbb3_installed = false;
$phpbb3plg_installed = false;
$indexes_installed = false;
$indexes_note="";
$phpbb3plg_note = "";
$bridge_note = "";
$bridge_url = "";
$patch_installed = false;
$patch_full = JRequest::getInt("patchfull",0);
$patch_note = "";
$phpbb3_version = null;
$rokbridge = null;
$current_auth = null;



require_once( JApplicationHelper::getPath( 'admin_html' ) );

$document = & JFactory::getDocument(); 
$document->setTitle( JText::_('RokBridge').": ".ROKBRIDGE_VERSION );
JToolBarHelper::title(   JText::_( 'RokBridge' ).": ".ROKBRIDGE_VERSION,'rokbridge');
JToolBarHelper::save();
JToolBarHelper::cancel('cancel','Reset');
JToolBarHelper::help( 'screen.rokbridge' );

switch ($task) {
    
  case 'applypatch':
    patchphpbb3(false,$patch_full);
    break;
    
  case 'removepatch':
    patchphpbb3(true,$patch_full);
    break;
    
  case 'movebridge':
    movebridge();
    break;
    
 case 'removebridge':
   removebridge();
   break;  
    
  case 'save':
    save();
    break;
    
  case 'installphpbb3plg':
    installphpbb3plg();
    break;
    
  case 'removephpbb3plg':
    removephpbb3plg();
    break;

  case 'addIndexes':
  	addIndexes();
  	break;
  case 'dropIndexes':
  	dropIndexes();
  	break;
  default:

	break;
} 

$params =& getRokBridgeParams();
$phpbb3_path = $params->get('phpbb3_path','distribution');
$bridge_path = $params->get('bridge_path','forum');

jimport( 'joomla.filesystem.folder' );
jimport( 'joomla.filesystem.file' );
jimport( 'joomla.filesystem.path' );

//need some checks to ensure the plugins are installed correctly

//check joomla plugins

if (JPluginHelper::isEnabled('authentication','phpbb3_auth')) {
    $joomla_authplg_installed = true;
}

if (JPluginHelper::isEnabled('user','phpbb3_user')) {
    $joomla_userplg_installed = true;
}


//check to see if the phpBB3 path exists and is valid
if( !JFolder::exists( JPATH_SITE.DS.$phpbb3_path ) ) {
	$mainframe->enqueueMessage(JText::_('PHPBB3_PATH_NOT_FOUND'),"error");
} elseif (!JFile::exists( JPATH_SITE.DS.$phpbb3_path.DS."config.php")) {
    $mainframe->enqueueMessage(JText::_('PHPBB3_FOUND_NOT_INSTALLED'),"error");
} else {
    $phpbb3_installed = true;
	if (!defined('IN_PHPBB')) define('IN_PHPBB',true);
	include_once(JPATH_SITE.DS.$phpbb3_path.DS."config.php");
	include_once(JPATH_SITE.DS.$phpbb3_path.DS."includes".DS."constants.php");
	$phpbb3_version = PHPBB_VERSION;
}

$bridge_note = JText::_('BRIDGE_NOTE');
//check to see if the forum is installed 
if (JFolder::exists( JPATH_SITE.DS.$bridge_path )) {
    //folder exists, is it the bridge?
    if ( JFile::exists( JPATH_SITE.DS.$bridge_path.DS."includes".DS."hooks.php")) {
		$bridge_installed = true;
		$bridge_note = JText::_('BRIDGE_INSTALLED_AT');
		$bridge_url = JURI::root().$bridge_path;

    } else {
        $mainframe->enqueueMessage(JText::_('BRIDGE_EXISTS_NOT_INSTALLED'),"error");
        $bridge_note = JText::_('CHOOSE_VALID_BRIDGE_PATH');
        $bridge_install_enable = false;
    }
    if ($bridge_installed) {
        //bridge installed, is it configured?
        if ( !JFile::exists( JPATH_SITE.DS.$bridge_path.DS."configuration.php")) {
            $mainframe->enqueueMessage(JText::_('SAVE_CONFIGURATION'),"error");
        }
    }  
    
}

//remove old bridge
$old_bridge = JRequest::getString('current_bridge_path','','post');
$posted_params = JRequest::getVar('params','','post');
if (is_array($posted_params)) {
    $new_bridge = $posted_params['bridge_path'];

    if (trim($old_bridge) != trim($new_bridge)) {
        // new location, so delete old
        removebridge($old_bridge,false);
    }
}

//check for auth plugin
if ($phpbb3_installed) {
    if ( JFile::exists ( JPATH_SITE.DS.$phpbb3_path.DS."includes".DS."auth".DS."auth_joomla.php")) {
        $phpbb3plg_installed = true;
        $phpbb3plg_note = JText::_('PHPBB3_AUTHPLG_INSTALLED');
    } else {
        $phpbb3plg_note = JText::_('PHPBB3_AUTHPLG_READY');
    }
} else {
    $phpbb3plg_note = JText::_('PHPBB3_INSTALL_NOT_FOUND');
}

//check for indexes
if ($phpbb3_installed and $bridge_installed) {
    if ( checkForRokBridgeIndexes() ) {
        $indexes_installed = true;
        $indexes_note = JText::_('PHPBB3_INDEXES_INSTALLED');
    } else {
        $indexes_note = JText::_('PHPBB3_INDEXES_READY');
    }
} else {
    $indexes_note = JText::_('PHPBB3_INSTALL_NOT_FOUND');
}

//check for phpbb3 patches

if ($phpbb3_installed) {
	if (versionCompare(PATCH_VERSION,$phpbb3_version)) {
		//small patch check
		$advsrch_file = JPATH_SITE.DS.$phpbb3_path.DS."styles".DS."prosilver".DS."template".DS."search_body.html";
		$old = "<form method=\"get\"";
	    $new = "<form method=\"post\"";
		$advsrch_data = JFile::read($advsrch_file);
		if (strpos($advsrch_data, $new)) {
			$patch_installed = true;
		}
		$patch_note = JText::_('PATCH_SMALL_NOTE');
		$patch_full = false;
	} else {
		//full patch check
    $functions_file = JPATH_SITE.DS.$phpbb3_path.DS."includes".DS."functions.php";
    $old = "return \$phpbb_root_path . str_replace('&', '&amp;', \$redirect);";
    $new = "return str_replace('&', '&amp;', \$redirect);";
    $functions_data = JFile::read($functions_file);
    if (strpos($functions_data,$new)) {
        $patch_installed = true;
     }
    $patch_note = JText::_('PATCH_NOTE');
		$patch_full = true;
	}
	

    
} else {
    $patch_note =  JText::_('PHPBB3_INSTALL_NOT_FOUND');
}

// get helper if bridge and phpbb3 are installed
if ($bridge_installed && $phpbb3_installed) {
	
	require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'helper.php' );
	$rokbridge =& new RokBridgeHelper();
	
	if ($rokbridge->bridge_path != null) {

		$current_auth = getAuthMethod();	
	
		// if plugin installed, and not set to joomla...
		if ($phpbb3plg_installed) {
			if ($current_auth != "joomla") setAuthMethod("joomla");
		} else {
			if ($current_auth == "joomla") setAuthMethod("db");
		}
	}
}

// if not saved - save intitial data
$params =& getRokBridgeParams();
$stored_bridge_path = $params->get('bridge_path');
if (strlen(trim($stored_bridge_path))==0) firstSave();


function patchphpbb3($undo=false,$patch_full) {
    global $mainframe;

	jimport( 'joomla.filesystem.file' );
	
	$patch_status = "";
    $success = true;
    
    $params =& getRokBridgeParams();
    $phpbb3_path = $params->get('phpbb3_path','distribution');

	$advsrch_file = JPATH_SITE.DS.$phpbb3_path.DS."styles".DS."prosilver".DS."template".DS."search_body.html";
	$advsrch_data = JFile::read($advsrch_file);
	
	$old_advsrch = "<form method=\"get\"";
    $new_advsrch = "<form method=\"post\"";

    if ($undo) {
        $advsrch_data = str_replace($new_advsrch,$old_advsrch,$advsrch_data);
        $patch_status = "PATCH_SMALL_UNINSTALLED";
    } else {
        $advsrch_data = str_replace($old_advsrch,$new_advsrch,$advsrch_data);
        $patch_status = "PATCH_SMALL_INSTALLED";
    }

    if (!Jfile::write($advsrch_file,$advsrch_data)) {
        $mainframe->enqueueMessage(sprintf(JText::_('CANNOT_WRITE'),$advsrch_file),"error"); 
        $success = false;   
    } else {
        $success = true;
    }

	if ($patch_full == 1) {

    $functions_file = JPATH_SITE.DS.$phpbb3_path.DS."includes".DS."functions.php";
		$functions_data = JFile::read($functions_file);
	
    $funcsadmin_file = JPATH_SITE.DS.$phpbb3_path.DS."includes".DS."functions_admin.php";
	    $funcsadmin_data = JFile::read($funcsadmin_file);
    
    $old_return = "return \$phpbb_root_path . str_replace('&', '&amp;', \$redirect);";
    $new_return = "return str_replace('&', '&amp;', \$redirect);";

    
    $old_funcsadmin = "\$matches = array();";
    $new_funcsadmin = "\$matches = array();
    //patch for bridged mode only
	if (PHPBB_EMBEDDED===true) {
	    \$rootdir = str_replace(PHPBB_ROOT_PATH,\"../\".PHPBB_BASE_PATH.\"/\", \$rootdir );
    }";

    
    if ($undo) {
        $functions_data = str_replace($new_return,$old_return,$functions_data);
        $funcsadmin_data = str_replace($new_funcsadmin,$old_funcsadmin,$funcsadmin_data);
        $patch_status = "PATCH_UNINSTALLED";
    } else {
        $functions_data = str_replace($old_return,$new_return,$functions_data);
        $funcsadmin_data = str_replace($old_funcsadmin,$new_funcsadmin,$funcsadmin_data);
        $patch_status = "PATCH_INSTALLED";
    }
    
    if (!Jfile::write($functions_file,$functions_data)) {
        $mainframe->enqueueMessage(sprintf(JText::_('CANNOT_WRITE'),$functions_file),"error"); 
        $success = false;  
    } else {
        $success = true;
    }
    
	    if (!Jfile::write($funcsadmin_file,$funcsadmin_data)) {
	        $mainframe->enqueueMessage(sprintf(JText::_('CANNOT_WRITE'),$funcsadmin_file),"error"); 
        $success = false;   
    } else {
        $success = true;
    }
    
    }
    
    if ($success) $mainframe->enqueueMessage(JText::_($patch_status));

}

function removebridge($bridge_path=null,$verbose=true) {
    global $mainframe;
    
    $params =& getRokBridgeParams();
    
    if (!$bridge_path) $bridge_path = $params->get('bridge_path','forum');   
    
    jimport( 'joomla.filesystem.folder' );
    jimport( 'joomla.filesystem.file' );

    $folder = JPATH_SITE.DS.$bridge_path ;
    $file   = JPATH_SITE.DS.$bridge_path.DS."includes".DS."hooks.php";
    
    if (JFile::exists($file)) {
        if (!JFolder::delete($folder)) {
           if ($verbose) {
              $mainframe->enqueueMessage(JText::_('BRIDGE_REMOVE_ERROR'),"error"); 
           } else {
              $errors = &$mainframe->_messageQueue;
              $errors[1] = array();
           }
           return;
        }
    
        if ($verbose) $mainframe->enqueueMessage(JText::_('BRIDGE_REMOVE_SUCCESS')); 
    } else {
        if ($verbose) $mainframe->enqueueMessage(sprintf(JText::_('BRIDGE_NOT_VALID'),$folder),"error"); 
    }
}

function movebridge() {
    global $mainframe;
    
    $params =& getRokBridgeParams();
    $bridge_path = $params->get('bridge_path','forum');
    
    jimport( 'joomla.filesystem.folder' );
    jimport( 'joomla.filesystem.file' );
    
    if (JFolder::exists( JPATH_SITE.DS.$bridge_path )) {
        //folder exists, is it the bridge?
        if ( JFile::exists( JPATH_SITE.DS.$bridge_path.DS."includes".DS."hooks.php")) {
            $mainframe->enqueueMessage(JText::_('BRIDGE_ALREADY_INSTALLED'),"error");
        } 
        return;
    }
    
    
    $src = JPATH_ADMINISTRATOR.DS."components".DS."com_rokbridge".DS."forum";
    $dest = JPATH_SITE.DS.$bridge_path;
    
    
    if (!JFolder::exists($dest)) {
        if (!JFolder::create($dest)) {
            $mainframe->enqueueMessage(JText::_('ERROR_CREATING_DIR').": ".$dest,"error"); 
            return;
        }        
    }

    
    if (!JFolder::copy($src,$dest,null,true)) {
        $mainframe->enqueueMessage(JText::_('BRIDGE_INSTALL_ERROR'),"error"); 
        return;
    }
    
    
    $mainframe->enqueueMessage(JText::_('BRIDGE_INSTALL_SUCCESS')); 
    
    
}

function installphpbb3plg() {
    global $mainframe;
    
    $params =& getRokBridgeParams();
    $phpbb3_path = $params->get('phpbb3_path','distribution');
    
    $src    = JPATH_ADMINISTRATOR.DS."components".DS."com_rokbridge".DS."phpbb".DS."includes".DS."auth".DS."auth_joomla.php";
    $dest   = JPATH_SITE.DS.$phpbb3_path.DS."includes".DS."auth";    
    
    jimport( 'joomla.filesystem.file' );
    
    if (!JFile::copy($src,$dest.DS."auth_joomla.php")) {
       $mainframe->enqueueMessage(sprintf(JText::_('CANNOT_WRITE'),$dest),"error"); 
       return;
    }
    
    $mainframe->enqueueMessage(JText::_('PHPBB3_AUTHPLG_INSTALL_SUCCESS')); 
    
}

function removephpbb3plg() {
    global $mainframe;
    
    $params =& getRokBridgeParams();
    $phpbb3_path = $params->get('phpbb3_path','distribution');
    
    jimport( 'joomla.filesystem.file' );

	$file   = JPATH_SITE.DS.$phpbb3_path.DS."includes".DS."auth".DS."auth_joomla.php";

    if (!JFile::delete($file)) {
       $mainframe->enqueueMessage(JText::_('PHPBB3_AUTHPLG_REMOVE_ERROR'),"error"); 
       return;
    }
    
    $mainframe->enqueueMessage(JText::_('PHPBB3_AUTHPLG_REMOVE_SUCCESS')); 
    
}




function firstSave() {
	
	// strip leading / if provided
	$post['params']['bridge_path'] = 'forum';
	$post['params']['phpbb3_path'] = 'distribution';
	$post['params']['sef_enabled'] = 0;
	$post['params']['sef_rewrite'] = 0;
	$post['params']['force_remember'] = 0;
	$post['params']['link_format'] = 'bridged';
	$post['option'] = 'com_rokbridge';
	JRequest::set($post,'post');

	save(false);
}


function save($verbose=true) {
    global $mainframe;
    
	$component = 'com_rokbridge';

	$table =& JTable::getInstance('component');
	if (!$table->loadByOption( $component ))
	{
		JError::raiseWarning( 500, 'Not a valid component' );
		return false;
	}
	
	$post = JRequest::get( 'post' );
	
	// strip leading / if provided
	if (isset($post['params']['bridge_path'])) $post['params']['bridge_path'] = trim($post['params']['bridge_path'],"/");
	if (isset($post['params']['phpbb3_path'])) $post['params']['phpbb3_path'] = trim($post['params']['phpbb3_path'],"/");
	
	$post['option'] = $component;
	$table->bind( $post );

	// pre-save checks
	if (!$table->check()) {
		JError::raiseWarning( 500, $table->getError() );
		return false;
	}

	// save the changes
	if (!$table->store()) {
		JError::raiseWarning( 500, $table->getError() );
		return false;
	}
	

	//save out bridge configuration file to 'source' and bridge_path if possible
	$params =& getRokBridgeParams();
    jimport( 'joomla.filesystem.file' );
    $bridge_path = $params->get('bridge_path','forum');
	$phpbb3_path = $params->get('phpbb3_path','distribution');

    $installed_config_file = JPATH_SITE.DS.$bridge_path.DS."configuration.php";
    $installed_htaccess_file = JPATH_SITE.DS.$bridge_path.DS.".htaccess";
    $src_config_file = JPATH_ADMINISTRATOR.DS."components".DS."com_rokbridge".DS."forum".DS."configuration.php";
    $src_htaccess_file = JPATH_ADMINISTRATOR.DS."components".DS."com_rokbridge".DS."forum".DS.".htaccess";

    $remember_login = $params->get('force_remember')==0?'false':'true';
    
    $registry =& JFactory::getConfig();
	$full_live_site = $live_site = $registry->getValue('live_site');
	if ($live_site != '') {
		$full_live_site = $live_site . "/".$bridge_path;
	}
    
	$bridge_config = "<?php 
class JConfigForum 
{
    var \$phpbb_path = '".$phpbb3_path."';
    var \$sef = '".$params->get('sef_enable')."';
    var \$sef_rewrite = '".$params->get('sef_rewrite')."';
    var \$remember_login = ".$remember_login.";
    var \$live_site = '" .$full_live_site ."';
}
?>
";

    $htaccess = "RewriteEngine on
RewriteBase ".str_replace('\\','/',JURI::Root(true).DS.$bridge_path.DS)."

# Standard phpBB3 files matching
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} \.php$
RewriteRule (.+)\.php$ index.php?rb_v=$1&%{QUERY_STRING} [L]";
    
    if ($params->get('sef_rewrite',0) == 1) {
        $htaccess .= "
# RokBridge SEF rewrite
RewriteCond %{REQUEST_FILENAME}                 !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+) index.php?$1&%{QUERY_STRING} [L]";
    }

    //if bridge installed and config file exists
    if (JFolder::exists(JPATH_SITE.DS.$bridge_path)) {
        JFile::write($installed_config_file, $bridge_config);
    }
    if (JFolder::exists(JPATH_SITE.DS.$bridge_path)) {
        JFile::write($installed_htaccess_file, $htaccess);
    }
    
    
    //update src anyway
    if (!JFile::write($src_config_file, $bridge_config)) {
        $mainframe->enqueueMessage(JText::_('CONFIGURATION_WRITE_FAIL'),"error"); 
    }
    if (!JFile::write($src_htaccess_file, $htaccess)) {
        $mainframe->enqueueMessage(JText::_('HTACCESS_WRITE_FAIL'),"error"); 
    }

	//$this->setRedirect( 'index.php?option=com_config', $msg );
	if ($verbose) $mainframe->enqueueMessage(JText::_('CONFIGURATION_WRITE_SUCCESS'));
}


function getRokBridgeParams($component="com_rokbridge") 
{
	static $instance;
	if ($instance == null)
	{
		$table =& JTable::getInstance('component');
		$table->loadByOption( $component );

		// work out file path
		$option	= preg_replace( '#\W#', '', $table->option );
		$path	= JPATH_ADMINISTRATOR.DS.'components'.DS.$option.DS.'config.xml';
		if (file_exists( $path )) {
			$instance = new JParameter( $table->params, $path );
		} else {
			$instance = new JParameter( $table->params );
		}
	}
	return $instance;
}

function strstrbi($haystack, $needle, $before_needle=FALSE, $last_occurance=FALSE, $include_needle=TRUE) {
    if($last_occurance) {
        $pos=strrpos($haystack,$needle);
    } else {
        $pos=strpos($haystack,$needle);
    }
    if($pos===FALSE) return FALSE;
    if($before_needle==$include_needle) $pos+=strlen($needle);
    if($before_needle) return substr($haystack,0,$pos);
    return substr($haystack,$pos);
}

function versionCompare($ver1,$ver2) {
	preg_match_all('/[\d]+/',$ver1,$matches);
	$ver1_primary = $matches[0][0];
	$ver1_secondary = $matches[0][1];
	$ver1_tertiary = $matches[0][2];

	preg_match_all('/[\d]+/',$ver2,$matches);
	$ver2_primary = $matches[0][0];
	$ver2_secondary = $matches[0][1];
	$ver2_tertiary = $matches[0][2];	
	
	if ($ver1_primary < $ver2_primary) return 1;
	else {
		if ($ver1_secondary < $ver2_secondary) return 1;
		else {
			if ($ver1_tertiary < $ver2_tertiary) return 1;
			elseif ($ver1_primary == $ver2_primary and
					$ver1_secondary == $ver2_secondary and
					$ver1_tertiary == $ver2_tertiary) return 0;
			else return -1;
		}
	}
}

function getAuthMethod() {

	require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'helper.php' );
	$rokbridge =& new RokBridgeHelper();
	$forum_db =& $rokbridge->phpbb_db;

	$sql = "SELECT * from #__config where config_name='auth_method'";

	$forum_db->setQuery($sql);

	$auth_method = $forum_db->loadObject();
	
	return $auth_method->config_value;	
}


function addIndexes() {
	global $mainframe;
	if (!checkForRokBridgeIndexes()) {
		if (!addRokBridgeIndexes()){
			$mainframe->enqueueMessage(JText::_('PHPBB3_ADDED_ROKBRIDGE_INDEXES_ERROR')); 
		}
	}
	$mainframe->enqueueMessage(JText::_('PHPBB3_ADDED_ROKBRIDGE_INDEXES_SUCCESS')); 
}

function dropIndexes() {
	global $mainframe;
	if (checkForRokBridgeIndexes()) {
		if (!dropRokBridgeIndexes()){
			$mainframe->enqueueMessage(JText::_('PHPBB3_DROP_ROKBRIDGE_INDEXES_ERROR')); 
		}
	}
	$mainframe->enqueueMessage(JText::_('PHPBB3_DROP_ROKBRIDGE_INDEXES_SUCCESS')); 
}

function checkForRokBridgeIndexes() {
	$post_time_index_name = "rokbridge_post_time_r"; 
	$post_time_index_exists = false;
	
	require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'helper.php' );
	$rokbridge =& new RokBridgeHelper();
	$forum_db =& $rokbridge->phpbb_db;

	$sql = "SHOW INDEXES from #__posts";
	$forum_db->setQuery($sql);
	$post_indexs = $forum_db->loadObjectList();
	if ($post_indexs != null) { 
		foreach ($post_indexs as $index) {
			if ($index->Key_name == $post_time_index_name){
				$post_time_index_exists = true;
			}
		}
	}
	return $post_time_index_exists;
}

function addRokBridgeIndexes(){
	$post_time_index_name = "rokbridge_post_time_r"; 
	$ret = false;
	require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'helper.php' );
	$rokbridge =& new RokBridgeHelper();
	$forum_db =& $rokbridge->phpbb_db;
	
	$sql = "ALTER TABLE `#__posts` ADD INDEX `".$post_time_index_name."` (`post_time` DESC)";
	$forum_db->setQuery($sql);
	$ret = $forum_db->query();
	if ($ret){
		$ret = true;
	}
	
	return $ret;
}

function dropRokBridgeIndexes(){
	$post_time_index_name = "rokbridge_post_time_r"; 
	$ret = false;
	require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'helper.php' );
	$rokbridge =& new RokBridgeHelper();
	$forum_db =& $rokbridge->phpbb_db;

	$sql = "ALTER TABLE ".$rokbridge->phpbb_db->nameQuote('#__posts')." DROP INDEX  ".$rokbridge->phpbb_db->nameQuote($post_time_index_name);
	$forum_db->setQuery($sql);
	$ret = $forum_db->query();
	if ($ret){
		$ret = true;
	}
	
	return $ret;
}

function setAuthMethod($newauth) {
	
	require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'helper.php' );
	$rokbridge =& new RokBridgeHelper();
	$forum_db =& $rokbridge->phpbb_db;

	$sql = "SELECT * from #__config where config_name='auth_method'";

	$forum_db->setQuery($sql);

	$auth_method = $forum_db->loadObject();
		
	$auth_method->config_value = $newauth;

	if (!$forum_db->updateObject( '#__config', $auth_method, 'config_name' )) {
		echo $forum_db->stderr();
		return false;
	}	
	return $newauth;
}

$bits = new stdClass();
$bits->bridge_url = JURI::root().$bridge_path;
$bits->patch_intalled = $patch_installed;
$bits->patch_note = $patch_note;
$bits->joomla_authplg_installed = $joomla_authplg_installed;
$bits->joomla_userplg_installed = $joomla_userplg_installed;
$bits->phpbb3plg_installed = $phpbb3plg_installed;
$bits->phpbb3plg_note = $phpbb3plg_note;
$bits->phpbb3_installed = $phpbb3_installed;
$bits->bridge_installed = $bridge_installed;
$bits->bridge_note = $bridge_note;
$bits->bridge_url = $bridge_url;
$bits->current_bridge_path = $bridge_path;
$bits->bridge_install_enable = $bridge_install_enable;
$bits->phpbb3_version = $phpbb3_version;
$bits->patch_full = $patch_full;
$bits->indexes_installed=$indexes_installed;
$bits->indexes_note = $indexes_note;

displayRokBridgeConfig($params, $bits);

?>