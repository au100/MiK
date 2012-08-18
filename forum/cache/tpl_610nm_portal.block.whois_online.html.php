<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></th>
	</tr>
	<tr class="row1">
		<td>
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_WIO_TOTAL'])) ? $this->_rootref['L_WIO_TOTAL'] : ((isset($user->lang['WIO_TOTAL'])) ? $user->lang['WIO_TOTAL'] : '{ WIO_TOTAL }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo (isset($this->_rootref['TOTAL_ONLINE_USERS'])) ? $this->_rootref['TOTAL_ONLINE_USERS'] : ''; ?></span><br /><hr />
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_WIO_REGISTERED'])) ? $this->_rootref['L_WIO_REGISTERED'] : ((isset($user->lang['WIO_REGISTERED'])) ? $user->lang['WIO_REGISTERED'] : '{ WIO_REGISTERED }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo (isset($this->_rootref['VISIBLE_ONLINE'])) ? $this->_rootref['VISIBLE_ONLINE'] : ''; ?></span><br />
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_WIO_HIDDEN'])) ? $this->_rootref['L_WIO_HIDDEN'] : ((isset($user->lang['WIO_HIDDEN'])) ? $user->lang['WIO_HIDDEN'] : '{ WIO_HIDDEN }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo (isset($this->_rootref['HIDDEN_ONLINE'])) ? $this->_rootref['HIDDEN_ONLINE'] : ''; ?></span><br />
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_WIO_GUEST'])) ? $this->_rootref['L_WIO_GUEST'] : ((isset($user->lang['WIO_GUEST'])) ? $user->lang['WIO_GUEST'] : '{ WIO_GUEST }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo (isset($this->_rootref['GUEST_ONLINE'])) ? $this->_rootref['GUEST_ONLINE'] : ''; ?></span><br />
			<small>
				<br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?>
				<?php if ($this->_rootref['LEGEND']) {  ?><br /><br />
				<?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?> :: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?>
				<?php } ?>
			</small>
		</td>
	</tr>
</table>
<br />