<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
<tr class="row1">
	<th><?php echo ((isset($this->_rootref['L_DONATION'])) ? $this->_rootref['L_DONATION'] : ((isset($user->lang['DONATION'])) ? $user->lang['DONATION'] : '{ DONATION }')); ?></th>
</tr>
<tr>
	<td class="row1" style="padding:10px 1px 10px 1px;">
		<?php $this->_tpl_include('portal/block/donation/paypal.html'); ?>
	</td>
</tr>
</table>
<br />