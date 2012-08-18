<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_LINK_US'])) ? $this->_rootref['L_LINK_US'] : ((isset($user->lang['LINK_US'])) ? $user->lang['LINK_US'] : '{ LINK_US }')); ?></th>
	</tr>
	<tr class="row1">
		<td>
			<?php echo (isset($this->_rootref['LINK_US_TXT'])) ? $this->_rootref['LINK_US_TXT'] : ''; ?><br /><br />
			<input type="text" tabindex="1" size="28" value="<?php echo (isset($this->_rootref['U_LINK_US'])) ? $this->_rootref['U_LINK_US'] : ''; ?>" class="inputbox autowidth" /><br /> 
		</td>
	</tr>
</table>
<br />