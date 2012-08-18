<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_SPONSOR'])) ? $this->_rootref['L_SPONSOR'] : ((isset($user->lang['SPONSOR'])) ? $user->lang['SPONSOR'] : '{ SPONSOR }')); ?></th>
	</tr>
	<tr class="row1">
		<td style="text-align:center;">
				<?php echo (isset($this->_rootref['ADS_CENTER_BOX'])) ? $this->_rootref['ADS_CENTER_BOX'] : ''; ?>
		</td>
	</tr>
</table>
<br />