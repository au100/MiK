<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_THE_TEAM'])) ? $this->_rootref['L_THE_TEAM'] : ((isset($user->lang['THE_TEAM'])) ? $user->lang['THE_TEAM'] : '{ THE_TEAM }')); ?></th>
	</tr>
	<tr class="row3">
		<td>
			<strong><?php echo ((isset($this->_rootref['L_ADMINISTRATORS'])) ? $this->_rootref['L_ADMINISTRATORS'] : ((isset($user->lang['ADMINISTRATORS'])) ? $user->lang['ADMINISTRATORS'] : '{ ADMINISTRATORS }')); ?></strong>
		</td>
	</tr>
	<?php $_admin_count = (isset($this->_tpldata['admin'])) ? sizeof($this->_tpldata['admin']) : 0;if ($_admin_count) {for ($_admin_i = 0; $_admin_i < $_admin_count; ++$_admin_i){$_admin_val = &$this->_tpldata['admin'][$_admin_i]; ?>
	<tr  class="row1">
		<td>
			<img src="portal/images/member.gif" height="15" width="15" /> <strong><?php echo $_admin_val['USERNAME_FULL']; ?></strong>
		</td>
	</tr>
	<?php }} else { ?>
	<tr  class="row1">
		<td>
			<?php echo ((isset($this->_rootref['L_NO_ADMINISTRATORS_P'])) ? $this->_rootref['L_NO_ADMINISTRATORS_P'] : ((isset($user->lang['NO_ADMINISTRATORS_P'])) ? $user->lang['NO_ADMINISTRATORS_P'] : '{ NO_ADMINISTRATORS_P }')); ?>
		</td>
	</tr>
	<?php } ?>
	<tr  class="row3">
		<td>
			<strong><?php echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); ?></strong>
		</td>
	</tr>
	<?php $_mod_count = (isset($this->_tpldata['mod'])) ? sizeof($this->_tpldata['mod']) : 0;if ($_mod_count) {for ($_mod_i = 0; $_mod_i < $_mod_count; ++$_mod_i){$_mod_val = &$this->_tpldata['mod'][$_mod_i]; ?>
	<tr  class="row1">
		<td>
			<img src="portal/images/member.gif" height="15" width="15" /> <strong><?php echo $_mod_val['USERNAME_FULL']; ?></strong>
		</td>
	</tr>
	<?php }} else { ?>
	<tr  class="row1">
		<td>
			<?php echo ((isset($this->_rootref['L_NO_MODERATORS_P'])) ? $this->_rootref['L_NO_MODERATORS_P'] : ((isset($user->lang['NO_MODERATORS_P'])) ? $user->lang['NO_MODERATORS_P'] : '{ NO_MODERATORS_P }')); ?>
		</td>
	</tr>
	<?php } ?>
</table>
<br />