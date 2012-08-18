<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%" id="navigation">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_M_MENU'])) ? $this->_rootref['L_M_MENU'] : ((isset($user->lang['M_MENU'])) ? $user->lang['M_MENU'] : '{ M_MENU }')); ?></th>
	</tr>
	<tr class="row3">
		<td>
			<strong><?php echo ((isset($this->_rootref['L_M_CONTENT'])) ? $this->_rootref['L_M_CONTENT'] : ((isset($user->lang['M_CONTENT'])) ? $user->lang['M_CONTENT'] : '{ M_CONTENT }')); ?></strong>
		</td>
	</tr>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a>
		</td>
	</tr>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></a>
		</td>
	</tr>
	<?php if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a>
		</td>
	</tr>
	<?php } ?>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></a>
		</td>
	</tr>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_TEAM'])) ? $this->_rootref['U_TEAM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_THE_TEAM'])) ? $this->_rootref['L_THE_TEAM'] : ((isset($user->lang['THE_TEAM'])) ? $user->lang['THE_TEAM'] : '{ THE_TEAM }')); ?></a>
		</td>
	</tr>
	<?php if ($this->_rootref['U_MCP']) {  ?>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a>
		</td>
	</tr>
	<?php } if ($this->_rootref['U_ACP']) {  ?>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_M_ACP'])) ? $this->_rootref['L_M_ACP'] : ((isset($user->lang['M_ACP'])) ? $user->lang['M_ACP'] : '{ M_ACP }')); ?></a>
		</td>
	</tr>
	<?php } ?>
	<tr class="row3">
		<td>
			<strong><?php echo ((isset($this->_rootref['L_M_HELP'])) ? $this->_rootref['L_M_HELP'] : ((isset($user->lang['M_HELP'])) ? $user->lang['M_HELP'] : '{ M_HELP }')); ?></strong>
		</td>
	</tr>
	<tr class="row1">
		<td>
			<a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></a>
		</td>
	</tr>
	<tr class="row1">
		<td>
			<a href="faq.php?mode=bbcode"><?php echo ((isset($this->_rootref['L_M_BBCODE'])) ? $this->_rootref['L_M_BBCODE'] : ((isset($user->lang['M_BBCODE'])) ? $user->lang['M_BBCODE'] : '{ M_BBCODE }')); ?></a>
		</td>
	</tr>
	<tr class="row1">
		<td>
			<a href="ucp.php?mode=terms"><?php echo ((isset($this->_rootref['L_M_TERMS'])) ? $this->_rootref['L_M_TERMS'] : ((isset($user->lang['M_TERMS'])) ? $user->lang['M_TERMS'] : '{ M_TERMS }')); ?></a>
		</td>
	</tr>
	<tr class="row1">
		<td>
			<a href="ucp.php?mode=privacy"><?php echo ((isset($this->_rootref['L_M_PRV'])) ? $this->_rootref['L_M_PRV'] : ((isset($user->lang['M_PRV'])) ? $user->lang['M_PRV'] : '{ M_PRV }')); ?></a>	
		</td>
	</tr>

</table>
<br />