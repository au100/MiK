<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
<tr class="row1">
	<th><?php echo ((isset($this->_rootref['L_DONATION'])) ? $this->_rootref['L_DONATION'] : ((isset($user->lang['DONATION'])) ? $user->lang['DONATION'] : '{ DONATION }')); ?></th>
</tr>
<tr>
	<td class="row1">
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td>
				<strong><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?></strong> <?php echo ((isset($this->_rootref['L_DONATION_TEXT'])) ? $this->_rootref['L_DONATION_TEXT'] : ((isset($user->lang['DONATION_TEXT'])) ? $user->lang['DONATION_TEXT'] : '{ DONATION_TEXT }')); ?>
				<br /><br />
				<?php echo ((isset($this->_rootref['L_PAY_MSG'])) ? $this->_rootref['L_PAY_MSG'] : ((isset($user->lang['PAY_MSG'])) ? $user->lang['PAY_MSG'] : '{ PAY_MSG }')); ?>
				<br />
			</td>
			<td width="100" align="center">
				<?php $this->_tpl_include('portal/block/donation/paypal.html'); ?>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
<br />