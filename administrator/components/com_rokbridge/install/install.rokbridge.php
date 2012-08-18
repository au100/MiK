<?php
/**
 * @version $Id: install.rokbridge.php 6328 2008-10-22 21:06:47Z wonderslug $
 * @package RocketTheme
 * @subpackage	RokDownloads
 * @copyright Copyright (C) 2008 RocketTheme. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */
 // no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');	
 
class Status {
	var $STATUS_FAIL = 'Failed';
	var $STATUS_SUCCESS = 'Success';
	var $infomsg = array();
	var $errmsg = array();
	var $status;
}

$rok_database = JFactory::getDBO();
$rok_install_status = array();

require "install_plugins.php";

$plg_return = rok_plugin_install($this, "phpbb3_auth", "Authentication - phpBB3", "authentication", $rok_database);
$rok_install_status['phpBB3 Authentication Plugin'] = $plg_return;
if ($plg_return->status == $plg_return->STATUS_FAIL) {
    var_dump ($plg_return);
}

$plg_return = rok_plugin_install($this, "phpbb3_user", "User - phpBB3", "user", $rok_database);
$rok_install_status['phpBB3 User Plugin'] = $plg_return;
if ($plg_return->status == $plg_return->STATUS_FAIL) {
    var_dump ($plg_return);
}



function com_install() {
	return com_rokbridge_install();
}

function com_rokbridge_install() {
	global $rok_install_status;
	$db = JFactory::getDBO();
	
	$status = new Status();
	$status->status = $status->STATUS_FAIL;
	$status->component = "com_rokbridge";
	
	//if (!com_rokbridge_check_for_table($db)) {
	//	com_rokbridge_newtable($db, &$status);
	//}
	
	// Create the default rokbridge folder if it doesnt exist 
    // if (!JFolder::exists(JPATH_SITE.DS."rokbridge")){
    //  JFolder::create(JPATH_SITE.DS."rokbridge");
    // }

	
	if (count($status->errmsg) == 0) {
		$status->status = $status->STATUS_SUCCESS;
	}
	
	$rok_install_status["RokBridge Component"] = $status;
	return true;
}

?>
<h1>RokBridge Installation</h1>
<table class="adminlist">
	<thead>
		<tr>
			<th class="title"><?php echo JText::_('Element'); ?></th>
			<th width="60%"><?php echo JText::_('Status'); ?></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</tfoot>
	<tbody>
	<?php
		$i=0; 
		foreach ( $rok_install_status as $component => $status ) {?>
		<tr class="row<?php echo $i; ?>">
			<td class="key"><?php echo $component; ?></td>
			<td>
				<?php echo ($status->status == $status->STATUS_SUCCESS)? '<strong>'.JText::_('Installed').'</strong>' : '<em>'.JText::_('NOT Installed').'</em>'?>
				<?php if (count($status->errmsg) > 0 ) {
						foreach ( $status->errmsg as $errmsg ) {
       						echo '<br/>Error: ' . $errmsg;
						}
				} ?>
				<?php if (count($status->infomsg) > 0 ) {
						foreach ( $status->infomsg as $infomsg ) {
       						echo '<br/>Info: ' . $infomsg;
						}
				} ?>
			</td>
		</tr>	
	<?php
			if ($i=0){ $i=1;} else {$i = 0;}; 
		}?>
		
	</tbody>
</table>
