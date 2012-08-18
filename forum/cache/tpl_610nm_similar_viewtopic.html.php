<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_NEW_TOPIC']) {  ?>

<script type="text/javascript">// <![CDATA[
var u_similar_search = '<?php echo (isset($this->_rootref['U_SIMILAR_SEARCH'])) ? $this->_rootref['U_SIMILAR_SEARCH'] : ''; ?>';
// ]]>
</script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/SimilarTopicSearchFunction.js"></script>
<tr id="similar_row" style="display:none;">
	<td class="row2" style="padding:0" colspan="2" id="similar_table"></td>
</tr>
<script type="text/javascript">// <![CDATA[
var similar_table = document.getElementById("similar_table");
var similar_row = document.getElementById("similar_row");
var liveSearch = similar_table && new LiveSearch(document.forms.postform.subject, similar_table, similar_row);
// ]]>
</script>
<?php } if (sizeof($this->_tpldata['similar'])) {  ?>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th width="4%" nowrap="nowrap">&nbsp;</th>
		<th colspan="2" nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_SIMILAR_TOPICS'])) ? $this->_rootref['L_SIMILAR_TOPICS'] : ((isset($user->lang['SIMILAR_TOPICS'])) ? $user->lang['SIMILAR_TOPICS'] : '{ SIMILAR_TOPICS }')); ?>&nbsp;</th>
		<th nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?>&nbsp;</th>
		<th nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?>&nbsp;</th>
		<th nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?>&nbsp;</th>
		<th nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>&nbsp;</th>
	</tr>
	<?php $_similar_count = (isset($this->_tpldata['similar'])) ? sizeof($this->_tpldata['similar']) : 0;if ($_similar_count) {for ($_similar_i = 0; $_similar_i < $_similar_count; ++$_similar_i){$_similar_val = &$this->_tpldata['similar'][$_similar_i]; ?>

		<tr valign="middle">
			<td class="row1" width="25" align="center"><?php echo $_similar_val['TOPIC_FOLDER_IMG']; ?></td>
			<td class="row1" width="25" align="center">
			<?php if ($_similar_val['TOPIC_ICON_IMG']) {  ?>

				<img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_similar_val['TOPIC_ICON_IMG']; ?>" width="<?php echo $_similar_val['TOPIC_ICON_IMG_WIDTH']; ?>" height="<?php echo $_similar_val['TOPIC_ICON_IMG_HEIGHT']; ?>" alt="" title="" />
			<?php } ?>

			</td>
			<td class="row1">
				<a href="<?php echo $_similar_val['U_VIEW_TOPIC']; ?>" class="topictitle" onclick="window.open(this.href);return false;"><?php echo $_similar_val['TOPIC_TITLE']; ?></a>&nbsp;<a href="<?php echo $_similar_val['U_VIEW_TOPIC']; ?>" title="<?php echo ((isset($this->_rootref['L_SIMILAR_TOPICS_THIS_WIN_EXPLAIN'])) ? $this->_rootref['L_SIMILAR_TOPICS_THIS_WIN_EXPLAIN'] : ((isset($user->lang['SIMILAR_TOPICS_THIS_WIN_EXPLAIN'])) ? $user->lang['SIMILAR_TOPICS_THIS_WIN_EXPLAIN'] : '{ SIMILAR_TOPICS_THIS_WIN_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_SIMILAR_TOPICS_THIS_WIN'])) ? $this->_rootref['L_SIMILAR_TOPICS_THIS_WIN'] : ((isset($user->lang['SIMILAR_TOPICS_THIS_WIN'])) ? $user->lang['SIMILAR_TOPICS_THIS_WIN'] : '{ SIMILAR_TOPICS_THIS_WIN }')); ?></a>
				<?php if ($_similar_val['PAGINATION']) {  ?>

					<p class="gensmall"> [ <?php echo (isset($this->_rootref['GOTO_PAGE_IMG'])) ? $this->_rootref['GOTO_PAGE_IMG'] : ''; echo ((isset($this->_rootref['L_GOTO_PAGE'])) ? $this->_rootref['L_GOTO_PAGE'] : ((isset($user->lang['GOTO_PAGE'])) ? $user->lang['GOTO_PAGE'] : '{ GOTO_PAGE }')); ?>: <?php echo $_similar_val['PAGINATION']; ?> ] </p>
				<?php } if ($_similar_val['S_TOPIC_GLOBAL']) {  ?>

					<p class="gensmall"><?php echo ((isset($this->_rootref['L_GLOBAL'])) ? $this->_rootref['L_GLOBAL'] : ((isset($user->lang['GLOBAL'])) ? $user->lang['GLOBAL'] : '{ GLOBAL }')); ?></p>
				<?php } else { ?>

					<p class="gensmall"><?php echo ((isset($this->_rootref['L_IN'])) ? $this->_rootref['L_IN'] : ((isset($user->lang['IN'])) ? $user->lang['IN'] : '{ IN }')); ?> <a href="<?php echo $_similar_val['U_VIEW_FORUM']; ?>" onclick="window.open(this.href);return false;"><?php echo $_similar_val['FORUM_TITLE']; ?></a></p>
				<?php } ?>

			</td>
			<td class="row2" width="100" align="center"><p class="topicauthor"><?php if ($_similar_val['U_TOPIC_AUTHOR']) {  ?><a href="<?php echo $_similar_val['U_TOPIC_AUTHOR']; ?>" onclick="window.open(this.href);return false;"><?php echo $_similar_val['TOPIC_AUTHOR']; ?></a><?php } else { echo $_similar_val['TOPIC_AUTHOR']; } ?></p></td>
			<td class="row1" width="50" align="center"><p class="topicdetails"><?php echo $_similar_val['TOPIC_REPLIES']; ?></p></td>
			<td class="row2" width="50" align="center"><p class="topicdetails"><?php echo $_similar_val['TOPIC_VIEWS']; ?></p></td>
			<td class="row1" width="120" align="center">
				<p class="topicdetails"><?php echo $_similar_val['LAST_POST_TIME']; ?></p>
				<p class="topicdetails"><?php if ($_similar_val['U_LAST_POST_AUTHOR']) {  ?><a href="<?php echo $_similar_val['U_LAST_POST_AUTHOR']; ?>" onclick="window.open(this.href);return false;"><?php echo $_similar_val['LAST_POST_AUTHOR']; ?></a><?php } else { echo $_similar_val['LAST_POST_AUTHOR']; } ?>

					<a href="<?php echo $_similar_val['U_LAST_POST']; ?>" onclick="window.open(this.href);return false;"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a>&nbsp;<a href="<?php echo $_similar_val['U_LAST_POST']; ?>" title="<?php echo ((isset($this->_rootref['L_SIMILAR_TOPICS_THIS_WIN_EXPLAIN'])) ? $this->_rootref['L_SIMILAR_TOPICS_THIS_WIN_EXPLAIN'] : ((isset($user->lang['SIMILAR_TOPICS_THIS_WIN_EXPLAIN'])) ? $user->lang['SIMILAR_TOPICS_THIS_WIN_EXPLAIN'] : '{ SIMILAR_TOPICS_THIS_WIN_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_SIMILAR_TOPICS_THIS_WIN'])) ? $this->_rootref['L_SIMILAR_TOPICS_THIS_WIN'] : ((isset($user->lang['SIMILAR_TOPICS_THIS_WIN'])) ? $user->lang['SIMILAR_TOPICS_THIS_WIN'] : '{ SIMILAR_TOPICS_THIS_WIN }')); ?></a>
				</p>
			</td>
		</tr>
	<?php }} ?>

	</table>
<?php } ?>