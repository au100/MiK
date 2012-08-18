<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo (isset($this->_rootref['LAST_VISITED_BOTS'])) ? $this->_rootref['LAST_VISITED_BOTS'] : ''; ?></th>
	</tr>
	<tr class="row1">
		<td>
			<?php $_last_visited_bots_count = (isset($this->_tpldata['last_visited_bots'])) ? sizeof($this->_tpldata['last_visited_bots']) : 0;if ($_last_visited_bots_count) {for ($_last_visited_bots_i = 0; $_last_visited_bots_i < $_last_visited_bots_count; ++$_last_visited_bots_i){$_last_visited_bots_val = &$this->_tpldata['last_visited_bots'][$_last_visited_bots_i]; ?>
				<span class="genmed"><?php echo $_last_visited_bots_val['BOT_NAME']; ?></span> <br /> <span class="gensmall"><?php echo $_last_visited_bots_val['LAST_VISIT_DATE']; ?></span><hr />
			<?php }} ?>
		</td>
	</tr>
</table>
<br />