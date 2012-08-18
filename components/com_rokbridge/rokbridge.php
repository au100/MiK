<?php 
//simple redirect to configured bridge path
defined( '_JEXEC' ) or die( 'Restricted access' );

$table =& JTable::getInstance('component');
$table->loadByOption( 'com_rokbridge' );
$params = new JParameter( $table->params, JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'config.xml' );

$bridge_path = $params->get('bridge_path');
$phpbb3_path = $params->get('phpbb3_path');
$link_format = $params->get('link_format','bridged');


if ($link_format=='bridged') 
    $mainframe->redirect(JURI::base().$bridge_path);
else 
    $mainframe->redirect(JURI::base().$phpbb3_path);