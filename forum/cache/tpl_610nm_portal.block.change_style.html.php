<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_BOARD_STYLE'])) ? $this->_rootref['L_BOARD_STYLE'] : ((isset($user->lang['BOARD_STYLE'])) ? $user->lang['BOARD_STYLE'] : '{ BOARD_STYLE }')); ?></th>
	</tr>
	<tr class="row1">
		<td>
			<script language="JavaScript" type="text/JavaScript">
			<!--
			// borrowed from forumimages.com !!
			function jumpMenu(targ, selObj, restore)
			{
				eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
				if (restore) selObj.selectedIndex = 0;
			}
			//-->
			</script>
			<form method="get" name="jumpbox" action="bb3portal.php" onsubmit="if(document.jumpbox.f.value == -1){return false;}">
				<select name="demo" onchange="jumpMenu('self',this,0)" class="input">
					<option selected="selected" disabled="disabled"><?php echo ((isset($this->_rootref['L_STYLE_CHOOSE'])) ? $this->_rootref['L_STYLE_CHOOSE'] : ((isset($user->lang['STYLE_CHOOSE'])) ? $user->lang['STYLE_CHOOSE'] : '{ STYLE_CHOOSE }')); ?></option>
					<?php $_styles_count = (isset($this->_tpldata['styles'])) ? sizeof($this->_tpldata['styles']) : 0;if ($_styles_count) {for ($_styles_i = 0; $_styles_i < $_styles_count; ++$_styles_i){$_styles_val = &$this->_tpldata['styles'][$_styles_i]; ?>
					<option value="<?php echo $_styles_val['U_STYLE']; ?>"><?php echo $_styles_val['STYLE_NAME']; ?></option>
					<?php }} ?>
				</select>
			</form>
		</td>
	</tr>
</table>
<br />