<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<form method="post" name="charsearch" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>">
<table width="100%" cellspacing="1">
	<tr>
		<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><span class="genmed"><?php echo ((isset($this->_rootref['L_USERNAME_BEGINS_WITH'])) ? $this->_rootref['L_USERNAME_BEGINS_WITH'] : ((isset($user->lang['USERNAME_BEGINS_WITH'])) ? $user->lang['USERNAME_BEGINS_WITH'] : '{ USERNAME_BEGINS_WITH }')); ?>: </span><select name="first_char" onchange="this.form.submit();"><?php echo (isset($this->_rootref['S_CHAR_OPTIONS'])) ? $this->_rootref['S_CHAR_OPTIONS'] : ''; ?></select>&nbsp;<input type="submit" name="char" value="<?php echo ((isset($this->_rootref['L_DISPLAY'])) ? $this->_rootref['L_DISPLAY'] : ((isset($user->lang['DISPLAY'])) ? $user->lang['DISPLAY'] : '{ DISPLAY }')); ?>" class="btnlite" /></td>
	</tr>
</table>
</form>

<form method="post" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>">
<table class="tablebg" width="100%" cellspacing="1">
    <tr>
            <th width="5%" nowrap="nowrap">#</th>
            <th width="20%"><a href="<?php echo (isset($this->_rootref['U_SORT_USERNAME'])) ? $this->_rootref['U_SORT_USERNAME'] : ''; ?>"><?php echo ((isset($this->_rootref['L_BAN_USERNAME'])) ? $this->_rootref['L_BAN_USERNAME'] : ((isset($user->lang['BAN_USERNAME'])) ? $user->lang['BAN_USERNAME'] : '{ BAN_USERNAME }')); ?></a></th>
           	<th width="20%"><a href="<?php echo (isset($this->_rootref['U_SORT_BAN_START'])) ? $this->_rootref['U_SORT_BAN_START'] : ''; ?>"><?php echo ((isset($this->_rootref['L_BAN_START_DATE'])) ? $this->_rootref['L_BAN_START_DATE'] : ((isset($user->lang['BAN_START_DATE'])) ? $user->lang['BAN_START_DATE'] : '{ BAN_START_DATE }')); ?></a></th>
            <th width="20%"><a href="<?php echo (isset($this->_rootref['U_SORT_BAN_END'])) ? $this->_rootref['U_SORT_BAN_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_BAN_END_DATE'])) ? $this->_rootref['L_BAN_END_DATE'] : ((isset($user->lang['BAN_END_DATE'])) ? $user->lang['BAN_END_DATE'] : '{ BAN_END_DATE }')); ?></a></th>
            <th width="15%"><?php echo ((isset($this->_rootref['L_BAN_REASON'])) ? $this->_rootref['L_BAN_REASON'] : ((isset($user->lang['BAN_REASON'])) ? $user->lang['BAN_REASON'] : '{ BAN_REASON }')); ?></th>
            <th width="20%"><?php echo ((isset($this->_rootref['L_BAN_LENGTH'])) ? $this->_rootref['L_BAN_LENGTH'] : ((isset($user->lang['BAN_LENGTH'])) ? $user->lang['BAN_LENGTH'] : '{ BAN_LENGTH }')); ?></th>
    </tr>
      <?php $_banlist_row_count = (isset($this->_tpldata['banlist_row'])) ? sizeof($this->_tpldata['banlist_row']) : 0;if ($_banlist_row_count) {for ($_banlist_row_i = 0; $_banlist_row_i < $_banlist_row_count; ++$_banlist_row_i){$_banlist_row_val = &$this->_tpldata['banlist_row'][$_banlist_row_i]; if (!($_banlist_row_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>
                <td class="gen" style="text-align:center;">&nbsp;<?php echo $_banlist_row_val['ROW_NUMBER']; ?>&nbsp;</td>
        		<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo $_banlist_row_val['USERNAME_FULL']; ?><br /><?php if ($_banlist_row_val['USER_WARNINGS_COUNT']) {  echo $_banlist_row_val['USER_WARNINGS_COUNT']; ?>&nbsp;<?php } if ($_banlist_row_val['USER_NOTES_COUNT']) {  echo ((isset($this->_rootref['L_USER_NOTES_COUNT'])) ? $this->_rootref['L_USER_NOTES_COUNT'] : ((isset($user->lang['USER_NOTES_COUNT'])) ? $user->lang['USER_NOTES_COUNT'] : '{ USER_NOTES_COUNT }')); ?>&nbsp;<a href="<?php echo $_banlist_row_val['U_NOTES']; ?>" title="<?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?>"><?php echo $_banlist_row_val['USER_NOTES_COUNT']; ?></a><?php } ?></td>
        		<td class="gen" style="text-align:center;">&nbsp;<?php echo $_banlist_row_val['BAN_START']; if ($_banlist_row_val['BANNER_FULL']) {  ?><br />&nbsp;<?php echo ((isset($this->_rootref['L_BANNED_BY'])) ? $this->_rootref['L_BANNED_BY'] : ((isset($user->lang['BANNED_BY'])) ? $user->lang['BANNED_BY'] : '{ BANNED_BY }')); ?> <?php echo $_banlist_row_val['BANNER_FULL']; } ?>&nbsp;</td>
        		<td class="gen" style="text-align:center;">&nbsp;<?php echo $_banlist_row_val['BAN_END']; ?><br /><span style="font-size:x-small;"><?php echo $_banlist_row_val['BAN_TIME_LEFT']; ?></span></td>
    	        <td class="gen">&nbsp;<?php echo $_banlist_row_val['BAN_REASON']; ?>&nbsp;</td>
    	        <td class="gen">&nbsp;<?php echo $_banlist_row_val['BAN_TIME_DURATION']; ?>&nbsp;</td>
        </tr>
		<?php }} else { ?>
	<tr>
		<td class="row1" colspan="6" align="center">
			<span class="gen"><?php echo ((isset($this->_rootref['L_NO_MEMBERS'])) ? $this->_rootref['L_NO_MEMBERS'] : ((isset($user->lang['NO_MEMBERS'])) ? $user->lang['NO_MEMBERS'] : '{ NO_MEMBERS }')); ?></span>
		</td>
	</tr>
       <?php } ?>
<tr>
	<td class="cat" colspan="<?php if ($this->_rootref['S_IN_SEARCH_POPUP']) {  ?>9<?php } else { ?>8<?php } ?>" align="center"><?php if ($this->_rootref['S_IN_SEARCH_POPUP'] && ! $this->_rootref['S_SELECT_SINGLE']) {  ?><input class="btnlite" type="submit" value="<?php echo ((isset($this->_rootref['L_SELECT_MARKED'])) ? $this->_rootref['L_SELECT_MARKED'] : ((isset($user->lang['SELECT_MARKED'])) ? $user->lang['SELECT_MARKED'] : '{ SELECT_MARKED }')); ?>" /><?php } else { ?><span class="gensmall"><?php echo ((isset($this->_rootref['L_SELECT_SORT_METHOD'])) ? $this->_rootref['L_SELECT_SORT_METHOD'] : ((isset($user->lang['SELECT_SORT_METHOD'])) ? $user->lang['SELECT_SORT_METHOD'] : '{ SELECT_SORT_METHOD }')); ?>:</span>&nbsp;<select name="sk"><?php echo (isset($this->_rootref['S_MODE_SELECT'])) ? $this->_rootref['S_MODE_SELECT'] : ''; ?></select>&nbsp; <span class="gensmall"><?php echo ((isset($this->_rootref['L_ORDER'])) ? $this->_rootref['L_ORDER'] : ((isset($user->lang['ORDER'])) ? $user->lang['ORDER'] : '{ ORDER }')); ?></span>&nbsp;<select name="sd"><?php echo (isset($this->_rootref['S_ORDER_SELECT'])) ? $this->_rootref['S_ORDER_SELECT'] : ''; ?></select>&nbsp; <input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btnlite" /><?php } ?></td>
</tr>
</table>


<table width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="pagination"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?> [ <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> ]</td>
	<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><span class="pagination"><?php $this->_tpl_include('pagination.html'); ?></span></td>
</tr>
</table>
</form>
<br clear="all" />
	
<div align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php $this->_tpl_include('jumpbox.html'); ?></div>
<?php $this->_tpl_include('overall_footer.html'); ?>