<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_LATEST_MEMBERS'])) ? $this->_rootref['L_LATEST_MEMBERS'] : ((isset($user->lang['LATEST_MEMBERS'])) ? $user->lang['LATEST_MEMBERS'] : '{ LATEST_MEMBERS }')); ?></th>
	</tr>
	<tr class="row1">
		<td>
			<span style="float:left;"><strong><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></strong></span>
			<span style="float:right;padding-right:10px;"><strong><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?></strong></span><br />
			<?php $_latest_members_count = (isset($this->_tpldata['latest_members'])) ? sizeof($this->_tpldata['latest_members']) : 0;if ($_latest_members_count) {for ($_latest_members_i = 0; $_latest_members_i < $_latest_members_count; ++$_latest_members_i){$_latest_members_val = &$this->_tpldata['latest_members'][$_latest_members_i]; ?>
			<span style="float:left;"><a href="<?php echo $_latest_members_val['U_USERNAME']; ?>"><span<?php if ($_latest_members_val['USERNAME_COLOR']) {  echo $_latest_members_val['USERNAME_COLOR']; } ?>><?php echo $_latest_members_val['USERNAME']; ?></span></a></span>
			<span style="float:right;padding-right:10px;"><?php echo $_latest_members_val['JOINED']; ?></span><br style="clear:both" />
			<?php }} ?>
		</td>
	</tr>
</table>
<br />