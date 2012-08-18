<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_FRIENDS'])) ? $this->_rootref['L_FRIENDS'] : ((isset($user->lang['FRIENDS'])) ? $user->lang['FRIENDS'] : '{ FRIENDS }')); ?></th>
	</tr>
	<tr class="row1">
		<td>
			<strong style="color:green"><?php echo ((isset($this->_rootref['L_FRIENDS_ONLINE'])) ? $this->_rootref['L_FRIENDS_ONLINE'] : ((isset($user->lang['FRIENDS_ONLINE'])) ? $user->lang['FRIENDS_ONLINE'] : '{ FRIENDS_ONLINE }')); ?></strong><br />
			<?php $_friends_online_count = (isset($this->_tpldata['friends_online'])) ? sizeof($this->_tpldata['friends_online']) : 0;if ($_friends_online_count) {for ($_friends_online_i = 0; $_friends_online_i < $_friends_online_count; ++$_friends_online_i){$_friends_online_val = &$this->_tpldata['friends_online'][$_friends_online_i]; ?>
			<img src="portal/images/member.gif" /> <?php echo $_friends_online_val['USERNAME_FULL']; ?><br /><br />				
			<?php }} else { ?>
			<?php echo ((isset($this->_rootref['L_NO_FRIENDS_ONLINE'])) ? $this->_rootref['L_NO_FRIENDS_ONLINE'] : ((isset($user->lang['NO_FRIENDS_ONLINE'])) ? $user->lang['NO_FRIENDS_ONLINE'] : '{ NO_FRIENDS_ONLINE }')); ?><br /><br />
			<?php } ?>

			<strong style="color:red"><?php echo ((isset($this->_rootref['L_FRIENDS_OFFLINE'])) ? $this->_rootref['L_FRIENDS_OFFLINE'] : ((isset($user->lang['FRIENDS_OFFLINE'])) ? $user->lang['FRIENDS_OFFLINE'] : '{ FRIENDS_OFFLINE }')); ?></strong><br />
			<?php $_friends_offline_count = (isset($this->_tpldata['friends_offline'])) ? sizeof($this->_tpldata['friends_offline']) : 0;if ($_friends_offline_count) {for ($_friends_offline_i = 0; $_friends_offline_i < $_friends_offline_count; ++$_friends_offline_i){$_friends_offline_val = &$this->_tpldata['friends_offline'][$_friends_offline_i]; ?>
			<img src="portal/images/member.gif" /> <?php echo $_friends_offline_val['USERNAME_FULL']; ?><br />
			<?php }} else { ?>
			<?php echo ((isset($this->_rootref['L_NO_FRIENDS_OFFLINE'])) ? $this->_rootref['L_NO_FRIENDS_OFFLINE'] : ((isset($user->lang['NO_FRIENDS_OFFLINE'])) ? $user->lang['NO_FRIENDS_OFFLINE'] : '{ NO_FRIENDS_OFFLINE }')); ?>
			<?php } ?>
		</td>
	</tr>
</table>
<br />