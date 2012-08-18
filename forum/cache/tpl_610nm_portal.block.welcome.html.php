<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_WELCOME'])) ? $this->_rootref['L_WELCOME'] : ((isset($user->lang['WELCOME'])) ? $user->lang['WELCOME'] : '{ WELCOME }')); ?></th>
	</tr>
	<tr class="row1">
		<td align="center" style="padding:5px 5px 5px 5px;">
			<?php echo (isset($this->_rootref['PORTAL_WELCOME_INTRO'])) ? $this->_rootref['PORTAL_WELCOME_INTRO'] : ''; ?>
		</td>
	</tr>
</table>
<br />