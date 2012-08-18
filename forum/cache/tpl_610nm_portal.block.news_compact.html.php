<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_LATEST_NEWS'])) ? $this->_rootref['L_LATEST_NEWS'] : ((isset($user->lang['LATEST_NEWS'])) ? $user->lang['LATEST_NEWS'] : '{ LATEST_NEWS }')); ?></th>
	</tr>
	<?php $_news_row_count = (isset($this->_tpldata['news_row'])) ? sizeof($this->_tpldata['news_row']) : 0;if ($_news_row_count) {for ($_news_row_i = 0; $_news_row_i < $_news_row_count; ++$_news_row_i){$_news_row_val = &$this->_tpldata['news_row'][$_news_row_i]; if ($_news_row_val['S_NO_TOPICS']) {  ?>
	<tr class="row1">
		<td styl="text-align:center;">
			<span class="gensmall"><strong><?php echo ((isset($this->_rootref['L_NO_NEWS'])) ? $this->_rootref['L_NO_NEWS'] : ((isset($user->lang['NO_NEWS'])) ? $user->lang['NO_NEWS'] : '{ NO_NEWS }')); ?></strong></span>
		</td>
	</tr>
	<?php } else { ?>
	<tr class="row1">
		<td>
			&#187&nbsp;<a href="<?php echo $_news_row_val['U_VIEW_COMMENTS']; ?>"><strong style="font-size:1.1em;"><?php echo $_news_row_val['TITLE']; ?></strong></a>
			<br />
			<span style="float: left;font-size:0.9em;">
				<a href="<?php echo $_news_row_val['U_VIEW_COMMENTS']; ?>" title="<?php echo ((isset($this->_rootref['L_VIEW_COMMENTS'])) ? $this->_rootref['L_VIEW_COMMENTS'] : ((isset($user->lang['VIEW_COMMENTS'])) ? $user->lang['VIEW_COMMENTS'] : '{ VIEW_COMMENTS }')); ?>"><em><?php echo ((isset($this->_rootref['L_COMMENTS'])) ? $this->_rootref['L_COMMENTS'] : ((isset($user->lang['COMMENTS'])) ? $user->lang['COMMENTS'] : '{ COMMENTS }')); ?>: <?php echo $_news_row_val['REPLIES']; ?></em></a>
			</span>
			<span style="float: right;"><?php echo $_news_row_val['TIME']; ?></span>
		</td>
	</tr>
	<?php } }} ?>
</table>
<br />