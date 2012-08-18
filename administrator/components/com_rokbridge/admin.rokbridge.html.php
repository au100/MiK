<?php
/**
 * @version	$Id: admin.rokbridge.html.php 2047 2007-10-02 00:42:56Z rhuk $ 
 * @package RokBridge - phpBB3 edition
 * @copyright Copyright (C) 2009 RocketTheme. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @author RocketTheme, LLC
 */
/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Restricted access' );

$document 	=& JFactory::getDocument();
$document->addStyleSheet('components/com_rokbridge/assets/rokbridge.css');


function displayRokBridgeConfig(&$params, &$bits) {
    
    $bridge_url = $bits->bridge_url;
    
    $patch_installed =$bits->patch_intalled;
    $patch_note = $bits->patch_note;
    
    $joomla_authplg_installed = $bits->joomla_authplg_installed;
    $joomla_userplg_installed = $bits->joomla_userplg_installed;
    
    $current_bridge_path    = $bits->current_bridge_path;
    $bridge_install_enable  = $bits->bridge_install_enable;
    $bridge_note            = $bits->bridge_note;
    
    $phpbb3plg_installed    = (bool) $bits->phpbb3plg_installed;
    $phpbb3plg_note         = $bits->phpbb3plg_note;
    $phpbb3_installed       = (bool) $bits->phpbb3_installed;
    $bridge_installed       = (bool) $bits->bridge_installed;
    $indexes_installed      = (bool) $bits->indexes_installed;
    $indexes_note 			= $bits->indexes_note;
    
	$patchfull				= $bits->patch_full ? "1":"0";
    
    
    $patch_class            = $patch_installed ? "installed":"notinstalled";
    $userplg_class          = $joomla_userplg_installed ? "installed":"notinstalled";
    $authplg_class          = $joomla_authplg_installed ? "installed":"notinstalled";
    $phpbb3plg_class        = $phpbb3plg_installed ? "installed":"notinstalled";
    $indexes_class          = $indexes_installed ? "installed":"notinstalled";
    $phpbb3_class           = $phpbb3_installed ? "installed":"notinstalled";
    $bridge_class           = $bridge_installed ? "installed":"notinstalled";
	$phpbb3_version			= $bits->phpbb3_version;
    
    if ($joomla_userplg_installed) {
        $userplg_status = JText::_('INSTALLED_ENABLED');
        $userplg_note = "";
    } else {
        $userplg_status = JText::_('INSTALLED_NOT_ENABLED');
        $userplg_note = JText::_('INSTALLED_NOT_ENABLED_NOTE');        
    }

    if ($joomla_authplg_installed) {
        $authplg_status = JText::_('INSTALLED_ENABLED');
        $authplg_note = "";
    } else {
        $authplg_status = JText::_('INSTALLED_NOT_ENABLED');
        $authplg_note = JText::_('INSTALLED_NOT_ENABLED_NOTE');        
    } 
    
    if (!$patch_installed) { 
        $patch_status = JText::_('NOT_INSTALLED');
    } else {
        $patch_status = JText::_('INSTALLED');
    }
    
    
    if (!$phpbb3_installed) { 
        $phpbb3_note = JText::_('PHPBB3_INSTALL_NOT_FOUND');
        $phpbb3_status = JText::_('NOT_INSTALLED');
    } else {
        $phpbb3_note = "phpBB3 Version: <b>" . $phpbb3_version . "</b>";
        $phpbb3_status = JText::_('INSTALLED');
    }
    
    if (!$phpbb3plg_installed) {
        $phpbb3plg_status = JText::_('NOT_INSTALLED');
    } else {
        $phpbb3plg_status = JText::_('INSTALLED');;
    }
    
    if (!$indexes_installed) {
        $indexes_status = JText::_('NOT_INSTALLED');
    } else {
        $indexes_status = JText::_('INSTALLED');;
    }
    
    if (!$bridge_installed) {
        $bridge_status = JText::_('NOT_INSTALLED');
    } else {
        $bridge_status = JText::_('INSTALLED');;
    }
    

    
?> 

<h1><?php echo JText::_('ROKBRIDGE_CONFIGURATION'); ?></h1>

<table>
    <tr valign="top">
        <td width="50%">
<form action="index.php" method="post" name="adminForm" autocomplete="off">
    <?php echo $params->render('params'); ?>
    <input type="hidden" name="option" value="com_rokbridge" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="current_bridge_path" value="<?php echo $current_bridge_path; ?>" />
</form>
        </td>
        <td width="50%">
            <div class="note">
				<div class="corner">
                	<?php echo JText::_('INSTRUCTIONS'); ?>
				</div>
            </div>
        </td>
    </tr>
</table>

<br />

<h1><?php echo JText::_('ROKBRIDGE_STATUS'); ?></h1>

<table class="adminlist">
	<thead>
		<tr>
			<th class="title" width="20%"><?php echo JText::_('ELEMENT'); ?></th>
			<th width="15%"><?php echo JText::_('STATUS'); ?></th>
			<th width="15%"><?php echo JText::_('ACTION'); ?></th>
			<th width="50%"><?php echo JText::_('NOTE'); ?></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
	</tfoot>
	<tbody>
	   <tr class="<?php echo $userplg_class; ?>"> 
	        <td><?php echo JText::_('JOOMLA_USERPLG'); ?></td>
	        <td class="status"><span><?php echo $userplg_status ?></span></td>
	        <td>&nbsp;</td>
	        <td><?php echo $userplg_note; ?></td>
	   </tr>
	   <tr class="<?php echo $authplg_class; ?>"> 
   	        <td><?php echo JText::_('JOOMLA_AUTHPLG'); ?></td>
   	        <td class="status"><span><?php echo $authplg_status; ?></span></td>
   	        <td>&nbsp;</td>
   	        <td><?php echo $authplg_note; ?></td>
   	   </tr>
   	   <tr class="<?php echo $bridge_class; ?>"> 
  	        <td><?php echo JText::_('PHPBB3_BRIDGE'); ?></td>
  	        <td class="status"><span><?php echo $bridge_status; ?></span></td>
  	        <td class="centeralign">
  	            <?php if ($bridge_install_enable) :?>
  	                <?php if (!$bridge_installed) : ?>
  	                <a href="index.php?option=com_rokbridge&amp;task=movebridge"><?php echo JText::_('INSTALL'); ?></a>
  	                <?php else: ?>
  	                <a href="index.php?option=com_rokbridge&amp;task=removebridge"><?php echo JText::_('REMOVE'); ?></a>    
  	                <?php endif; ?>
  	            <?php endif; ?>
  	        </td>
  	        <td><?php echo $bridge_note; ?></td>
  	   </tr>   	   
   	   <tr class="<?php echo $phpbb3_class; ?>"> 
 	        <td><?php echo JText::_('PHPBB3_FORUM');?></td>
 	        <td class="status"><span><?php echo $phpbb3_status; ?></span></td>
 	        <td></td>
 	        <td><?php echo $phpbb3_note; ?></td>
 	   </tr>
   	   <tr class="<?php echo $phpbb3plg_class; ?>"> 
  	        <td><?php echo JText::_('PHPBB3_AUTHPLG');?></td>
  	        <td class="status"><span><?php echo $phpbb3plg_status; ?></span></td>
  	        <td class="centeralign">
      	        <?php if ($phpbb3_installed and $bridge_installed) : ?>
          	        <?php if (!$phpbb3plg_installed) : ?>
          	        <a href="index.php?option=com_rokbridge&amp;task=installphpbb3plg"><?php echo JText::_('INSTALL'); ?></a>
          	        <?php else: ?>
          	        <a href="index.php?option=com_rokbridge&amp;task=removephpbb3plg"><?php echo JText::_('REMOVE'); ?></a>    
          	        <?php endif; ?>
          	    <?php else: 
          	        $phpbb3plg_note = JText::_('BRIDGE_INSTALLED_FIRST');
          	     endif; ?>
  	        </td>
  	        <td><?php echo $phpbb3plg_note; ?></td>
  	   </tr>
  	   <tr class="<?php echo $indexes_class; ?>"> 
  	        <td><?php echo JText::_('PHPBB3_INDEXES');?></td>
  	        <td class="status"><span><?php echo $indexes_status; ?></span></td>
  	        <td class="centeralign">
      	        <?php if ($phpbb3_installed and $bridge_installed) : ?>
          	        <?php if (!$indexes_installed) : ?>
          	        <a href="index.php?option=com_rokbridge&amp;task=addIndexes"><?php echo JText::_('INSTALL'); ?></a>
          	        <?php else: ?>
          	        <a href="index.php?option=com_rokbridge&amp;task=dropIndexes"><?php echo JText::_('REMOVE'); ?></a>    
          	        <?php endif; ?>
          	    <?php else: 
          	        $indexes_note = JText::_('BRIDGE_PHPBB3_INSTALLED_FIRST');
          	     endif; ?>
  	        </td>
  	        <td><?php echo $indexes_note; ?></td>
  	   </tr>
  	   <tr class="<?php echo $patch_class; ?>"> 
     	        <td><?php echo JText::_('PHPBB3_PATCH');?></td>
     	        <td class="status"><span><?php echo $patch_status; ?></span></td>
     	        <td class="centeralign">
         	        <?php if ($phpbb3_installed) : ?>
             	        <?php if (!$patch_installed) : ?>
             	        <a href="index.php?option=com_rokbridge&amp;task=applypatch&amp;patchfull=<?php echo $patchfull; ?>"><?php echo JText::_('INSTALL'); ?></a>
             	        <?php else: ?>
             	        <a href="index.php?option=com_rokbridge&amp;task=removepatch&amp;patchfull=<?php echo $patchfull; ?>"><?php echo JText::_('REMOVE'); ?></a>    
             	        <?php endif; ?>
         	        <?php endif; ?>
     	        </td>
     	        <td><?php echo $patch_note; ?></td>
     	   </tr>
	   
    </tbody>
</table>

<?php
if ($joomla_userplg_installed and $joomla_authplg_installed and $patch_installed and 
    $phpbb3_installed and $phpbb3plg_installed and $bridge_installed) {
        echo '<p class="testurl">';
        echo sprintf(JText::_('FULLY_INSTALLED'),$bridge_url,$bridge_url);
        echo '</p>';
    }
?>

<?php } ?>
