<?php if (!defined('IN_PHPBB')) exit; ?><br />
<a name="quick_reply"></a>
<form action="<?php echo (isset($this->_rootref['U_QUICK_REPLY'])) ? $this->_rootref['U_QUICK_REPLY'] : ''; ?>" method="post" id="postform">
	<table width="100%" cellspacing="1" class="tablebg">
		<th><?php echo ((isset($this->_rootref['L_POST_A_NEW_REPLY'])) ? $this->_rootref['L_POST_A_NEW_REPLY'] : ((isset($user->lang['POST_A_NEW_REPLY'])) ? $user->lang['POST_A_NEW_REPLY'] : '{ POST_A_NEW_REPLY }')); ?></th>
		<tr class="row2" align="center">
			<td>
				<textarea name="message" id="message" rows="6" cols="100" class="inputbox" ></textarea>
			</td>
		</tr>
		<tr>
			<td class="cat" colspan="2" align="center">
				<input class="btnlite" type="submit" tabindex="5" name="preview" value="<?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>" />
				&nbsp; <input class="btnmain" type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
			</td>
		</tr>
	</table>
	<input type="hidden" name="subject" value="Re: <?php $_blogrow_count = (isset($this->_tpldata['blogrow'])) ? sizeof($this->_tpldata['blogrow']) : 0;if ($_blogrow_count) {for ($_blogrow_i = ($_blogrow_count < 0 ? $_blogrow_count : 0); $_blogrow_i < (1 > $_blogrow_count ? $_blogrow_count : 1); ++$_blogrow_i){$_blogrow_val = &$this->_tpldata['blogrow'][$_blogrow_i]; echo $_blogrow_val['TITLE']; }} ?>" />
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>