<?php if (!defined('IN_PHPBB')) exit; ?><!-- $Id: recent_topics_body.html 68 2008-01-06 01:03:56Z nickvergessen $ --><?php if ($this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<div id="pagecontent">
	<?php if ($this->_rootref['PAGINATION']) {  ?>

		<table width="100%" cellspacing="1">
		<tr>
			<td class="nav" valign="middle" nowrap="nowrap">&nbsp;<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
			<td class="gensmall" width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php $this->_tpl_include('pagination.html'); ?></td>
		</tr>
		</table>
	<?php } ?>

	<table class="tablebg" width="100%" cellspacing="1">
		<tr class="nav">
			<td class="cat" colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>6<?php } else { ?>5<?php } ?>" valign="middle" align="center"><?php echo ((isset($this->_rootref['L_RECENT_TOPICS'])) ? $this->_rootref['L_RECENT_TOPICS'] : ((isset($user->lang['RECENT_TOPICS'])) ? $user->lang['RECENT_TOPICS'] : '{ RECENT_TOPICS }')); ?></td>
		</tr>
		<tr>
			<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

				<th colspan="3">&nbsp;<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>&nbsp;</th>
			<?php } else { ?>

				<th colspan="2">&nbsp;<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>&nbsp;</th>
			<?php } ?>

			<th>&nbsp;<?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?>&nbsp;</th>
			<th>&nbsp;<?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?>&nbsp;</th>
			<th>&nbsp;<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>&nbsp;</th>
		</tr>

		<?php $_recenttopicrow_count = (isset($this->_tpldata['recenttopicrow'])) ? sizeof($this->_tpldata['recenttopicrow']) : 0;if ($_recenttopicrow_count) {for ($_recenttopicrow_i = 0; $_recenttopicrow_i < $_recenttopicrow_count; ++$_recenttopicrow_i){$_recenttopicrow_val = &$this->_tpldata['recenttopicrow'][$_recenttopicrow_i]; if ($_recenttopicrow_val['S_TOPIC_TYPE_SWITCH'] == (1)) {  ?>

				<tr>
					<td class="row3" colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>"><b class="gensmall"><?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); ?></b></td>
				</tr>
			<?php } else if ($_recenttopicrow_val['S_TOPIC_TYPE_SWITCH'] == 0) {  ?>

				<tr>
					<td class="row3" colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>"><b class="gensmall"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></b></td>
				</tr>
			<?php } ?>


			<tr>
				<td class="row1" width="25" align="center"><?php echo $_recenttopicrow_val['TOPIC_FOLDER_IMG']; ?></td>
				<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

					<td class="row1" width="25" align="center"><?php if ($_recenttopicrow_val['TOPIC_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_recenttopicrow_val['TOPIC_ICON_IMG']; ?>" width="<?php echo $_recenttopicrow_val['TOPIC_ICON_IMG_WIDTH']; ?>" height="<?php echo $_recenttopicrow_val['TOPIC_ICON_IMG_HEIGHT']; ?>" alt="" title="" /><?php } ?></td>
				<?php } ?>

				<td class="row1">
					<?php if ($_recenttopicrow_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_recenttopicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a><?php } ?>

					
 			                <?php echo $_recenttopicrow_val['ATTACH_ICON_IMG']; ?> <?php if ($_recenttopicrow_val['S_HAS_POLL'] || $_recenttopicrow_val['S_TOPIC_MOVED']) {  ?><b><?php echo $_recenttopicrow_val['TOPIC_TYPE']; ?></b> <?php } ?><a title="<?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>: <?php echo $_recenttopicrow_val['FIRST_POST_TIME']; ?>" href="<?php echo $_recenttopicrow_val['U_VIEW_TOPIC']; ?>" class="topictitle"><?php if ($_recenttopicrow_val['TOPIC_TITLE_COLOUR']) {  ?><span style="color: #<?php echo $_recenttopicrow_val['TOPIC_TITLE_COLOUR']; ?>"><?php } ?> <?php echo $_recenttopicrow_val['TOPIC_TITLE']; if ($_recenttopicrow_val['TOPIC_TITLE_COLOUR']) {  ?></span><?php } ?></a>
					
					<?php if ($_recenttopicrow_val['S_TOPIC_UNAPPROVED'] || $_recenttopicrow_val['S_POSTS_UNAPPROVED']) {  ?>

						<a href="<?php echo $_recenttopicrow_val['U_MCP_QUEUE']; ?>"><?php echo $_recenttopicrow_val['UNAPPROVED_IMG']; ?></a>&nbsp;
					<?php } if ($_recenttopicrow_val['S_TOPIC_REPORTED']) {  ?>

						<a href="<?php echo $_recenttopicrow_val['U_MCP_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?></a>&nbsp;
					<?php } if ($_recenttopicrow_val['PAGINATION']) {  ?>

						<p class="gensmall"> [ <?php echo (isset($this->_rootref['GOTO_PAGE_IMG'])) ? $this->_rootref['GOTO_PAGE_IMG'] : ''; echo ((isset($this->_rootref['L_GOTO_PAGE'])) ? $this->_rootref['L_GOTO_PAGE'] : ((isset($user->lang['GOTO_PAGE'])) ? $user->lang['GOTO_PAGE'] : '{ GOTO_PAGE }')); ?>: <?php echo $_recenttopicrow_val['PAGINATION']; ?> ] </p>
					<?php } ?>

					<p class="gensmall"><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_recenttopicrow_val['LAST_POST_AUTHOR_FULL']; ?>

					<?php echo ((isset($this->_rootref['L_POSTED_ON_DATE'])) ? $this->_rootref['L_POSTED_ON_DATE'] : ((isset($user->lang['POSTED_ON_DATE'])) ? $user->lang['POSTED_ON_DATE'] : '{ POSTED_ON_DATE }')); ?> <?php echo $_recenttopicrow_val['LAST_POST_TIME']; ?>

					<?php if ($_recenttopicrow_val['U_VIEW_FORUM'] && $_recenttopicrow_val['FORUM_NAME']) {  ?>

						<?php echo ((isset($this->_rootref['L_IN'])) ? $this->_rootref['L_IN'] : ((isset($user->lang['IN'])) ? $user->lang['IN'] : '{ IN }')); ?> <a href="<?php echo $_recenttopicrow_val['U_VIEW_FORUM']; ?>" style="font-weight: bold;"><?php echo $_recenttopicrow_val['FORUM_NAME']; ?></a>
					<?php } ?>

					</p>
				</td>
				<td class="row1" width="50" align="center"><p class="topicdetails"><?php echo $_recenttopicrow_val['REPLIES']; ?></p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails"><?php echo $_recenttopicrow_val['VIEWS']; ?></p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;"><?php echo $_recenttopicrow_val['LAST_POST_TIME']; ?></p>
					<p class="topicdetails"><?php echo $_recenttopicrow_val['LAST_POST_AUTHOR_FULL']; ?>

						<a href="<?php echo $_recenttopicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a>
					</p>
				</td>
			</tr>

		<?php }} else { ?>


			<tr>
				<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

					<td class="row1" colspan="7" height="30" align="center" valign="middle"><span class="gen"><?php if (! $this->_rootref['S_SORT_DAYS']) {  echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); } else { echo ((isset($this->_rootref['L_NO_TOPICS_TIME_FRAME'])) ? $this->_rootref['L_NO_TOPICS_TIME_FRAME'] : ((isset($user->lang['NO_TOPICS_TIME_FRAME'])) ? $user->lang['NO_TOPICS_TIME_FRAME'] : '{ NO_TOPICS_TIME_FRAME }')); } ?></span></td>
				<?php } else { ?>

					<td class="row1" colspan="6" height="30" align="center" valign="middle"><span class="gen"><?php if (! $this->_rootref['S_SORT_DAYS']) {  echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); } else { echo ((isset($this->_rootref['L_NO_TOPICS_TIME_FRAME'])) ? $this->_rootref['L_NO_TOPICS_TIME_FRAME'] : ((isset($user->lang['NO_TOPICS_TIME_FRAME'])) ? $user->lang['NO_TOPICS_TIME_FRAME'] : '{ NO_TOPICS_TIME_FRAME }')); } ?></span></td>
				<?php } ?>

			</tr>
		<?php } ?>

		</table>
</div>
<br clear="all" />
<?php } ?>