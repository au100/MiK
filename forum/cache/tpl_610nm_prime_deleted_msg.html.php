<?php if (!defined('IN_PHPBB')) exit; $_deleted_count = (isset($this->_tpldata['deleted'])) ? sizeof($this->_tpldata['deleted']) : 0;if ($_deleted_count) {for ($_deleted_i = 0; $_deleted_i < $_deleted_count; ++$_deleted_i){$_deleted_val = &$this->_tpldata['deleted'][$_deleted_i]; if ($_deleted_val['IS_ROW']) {  ?>

	<?php echo ((isset($this->_rootref['L_PRIME_DELETED'])) ? $this->_rootref['L_PRIME_DELETED'] : ((isset($user->lang['PRIME_DELETED'])) ? $user->lang['PRIME_DELETED'] : '{ PRIME_DELETED }')); ?> 
	<?php if ($_deleted_val['BY']) {  ?> <?php echo ((isset($this->_rootref['L_PRIME_DELETED_BY'])) ? $this->_rootref['L_PRIME_DELETED_BY'] : ((isset($user->lang['PRIME_DELETED_BY'])) ? $user->lang['PRIME_DELETED_BY'] : '{ PRIME_DELETED_BY }')); ?> <?php echo $_deleted_val['BY']; } if ($_deleted_val['ON']) {  ?> <?php echo ((isset($this->_rootref['L_PRIME_DELETED_ON'])) ? $this->_rootref['L_PRIME_DELETED_ON'] : ((isset($user->lang['PRIME_DELETED_ON'])) ? $user->lang['PRIME_DELETED_ON'] : '{ PRIME_DELETED_ON }')); ?> <?php echo $_deleted_val['ON']; } ?>.
<?php } else { ?>

<table width="100%"><tr><td align="left" valign="top">
	<?php if ($this->_rootref['S_IS_BOT']) {  echo $_deleted_val['MINI_POST_IMG']; } else { ?><a href="<?php echo $_deleted_val['U_MINI_POST']; ?>"><?php echo $_deleted_val['MINI_POST_IMG']; ?></a><?php } echo $_deleted_val['MESSAGE']; ?> 
	<?php if ($_deleted_val['FROM']) {  ?> <?php echo ((isset($this->_rootref['L_PRIME_DELETED_FROM'])) ? $this->_rootref['L_PRIME_DELETED_FROM'] : ((isset($user->lang['PRIME_DELETED_FROM'])) ? $user->lang['PRIME_DELETED_FROM'] : '{ PRIME_DELETED_FROM }')); ?> <strong><?php echo $_deleted_val['FROM']; ?></strong><?php } if ($_deleted_val['BY']) {  ?> <?php echo ((isset($this->_rootref['L_PRIME_DELETED_BY'])) ? $this->_rootref['L_PRIME_DELETED_BY'] : ((isset($user->lang['PRIME_DELETED_BY'])) ? $user->lang['PRIME_DELETED_BY'] : '{ PRIME_DELETED_BY }')); ?> <?php echo $_deleted_val['BY']; } if ($_deleted_val['ON']) {  ?> <?php echo ((isset($this->_rootref['L_PRIME_DELETED_ON'])) ? $this->_rootref['L_PRIME_DELETED_ON'] : ((isset($user->lang['PRIME_DELETED_ON'])) ? $user->lang['PRIME_DELETED_ON'] : '{ PRIME_DELETED_ON }')); ?> <?php echo $_deleted_val['ON']; } ?>.
	<?php if ($_deleted_val['REASON']) {  ?><div><strong><?php echo ((isset($this->_rootref['L_REASON'])) ? $this->_rootref['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ REASON }')); ?>:</strong> <em><?php echo $_deleted_val['REASON']; ?></em></div><?php } if ($_deleted_val['VIEW_LINK'] || $_deleted_val['UNDO_LINK'] || $_deleted_val['PERM_LINK']) {  ?><div><?php echo $_deleted_val['VIEW_LINK']; if ($_deleted_val['VIEW_LINK'] && ( $_deleted_val['UNDO_LINK'] || $_deleted_val['PERM_LINK'] )) {  ?> | <?php } echo $_deleted_val['UNDO_LINK']; if ($_deleted_val['UNDO_LINK'] && $_deleted_val['PERM_LINK']) {  ?> | <?php } echo $_deleted_val['PERM_LINK']; ?></div><?php } if ($_deleted_val['VIEW_LINK'] && $_deleted_val['ID'] && $_deleted_val['TEXT']) {  ?><div style="display:none;border-top:1px solid #999999;margin-top:4px;padding-top:2px;" id="<?php echo $_deleted_val['ID']; ?>"><?php if ($_deleted_val['POSTER']) {  ?><strong><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?>:</strong> <?php echo $_deleted_val['POSTER']; ?><br /><?php } if ($_deleted_val['TITLE']) {  ?><strong><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</strong> <?php echo $_deleted_val['TITLE']; ?><br /><?php } echo $_deleted_val['TEXT']; ?><br /></div><?php } ?>

</td></tr></table>
<?php } }} ?>