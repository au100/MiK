<?php if (!defined('IN_PHPBB')) exit; $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (( $_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_FIRST_ROW'] ) || $_forumrow_val['S_NO_CAT']) {  ?>

</table>
<br />
<?php } if ($_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_FIRST_ROW'] || $_forumrow_val['S_NO_CAT']) {  ?>

<table class="tablebg" cellspacing="1" width="100%">
<tr>
	<th colspan="2"<?php if ($_forumrow_val['S_IS_CAT']) {  ?> style="text-align: left;">&nbsp;<a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { ?>>&nbsp;<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?>&nbsp;</th>
	<th width="50">&nbsp;<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>&nbsp;</th>
	<th width="50">&nbsp;<?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>&nbsp;</th>
</tr>
<?php } if ($_forumrow_val['S_IS_CAT']) {  } else if ($_forumrow_val['S_IS_LINK']) {  ?>

		<tr>
			<td class="row1" width="50" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
			<td class="row1">
				<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>

					<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>; margin-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>: 5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></div>
				<?php } ?>

				<a class="forumlink" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
				<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
			</td>
			<?php if ($_forumrow_val['CLICKS']) {  ?>

				<td class="row2" colspan="3" align="center"><span class="genmed"><?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?></span></td>
			<?php } else { ?>

				<td class="row2" colspan="3" align="center">&nbsp;</td>
			<?php } ?>

		</tr>
	<?php } else { if ($_forumrow_val['S_NO_CAT']) {  ?>

         <tr>
            <td class="cat" colspan="5"><h4><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?></h4></td>
         </tr>
      <?php } ?>

		<tr>
			<td class="row1" width="50" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
			<td class="row1">
				<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>

					<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>; margin-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>: 5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></div>
				<?php } ?>

				<a class="forumlink" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
				<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
				<?php if ($_forumrow_val['MODERATORS']) {  ?>

					<p class="forumdesc"><strong><?php echo $_forumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_forumrow_val['MODERATORS']; ?></p>
				<?php } if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?>

					<p class="forumdesc"><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; ?></p>
				<?php } ?>

			</td>
			<td class="row2" align="center" width="60"><p class="topicdetails"><?php echo $_forumrow_val['TOPICS']; ?></p></td>
			<td class="row2" align="center" width="60"><p class="topicdetails"><?php echo $_forumrow_val['POSTS']; ?></p></td>
			<td class="row2" align="center" width="170">
				<?php if ($_forumrow_val['LAST_POST_TIME']) {  ?>

					<p class="topicdetails"><?php if ($_forumrow_val['U_UNAPPROVED_TOPICS']) {  ?><a href="<?php echo $_forumrow_val['U_UNAPPROVED_TOPICS']; ?>"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?></a>&nbsp;<?php } echo $_forumrow_val['LAST_POST_TIME']; ?></p>
                                        <?php if ($this->_rootref['S_ALTT_ACTIVE']) {  ?>

                                          <p class="topicdetails">
                                            <?php if ($_forumrow_val['ALTT_LINK_NAME_SHORT']) {  ?><a <?php if ($this->_rootref['ALTT_STYLE']) {  ?>style="<?php echo (isset($this->_rootref['ALTT_STYLE'])) ? $this->_rootref['ALTT_STYLE'] : ''; ?>"<?php } ?> href="<?php echo $_forumrow_val['U_ALTT_LINK']; ?>" title="<?php echo $_forumrow_val['ALTT_LINK_NAME']; ?>"><?php if ($_forumrow_val['TOPIC_TITLE_COLOUR']) {  ?><span style="color:#<?php echo $_forumrow_val['TOPIC_TITLE_COLOUR']; ?>;"><?php } echo $_forumrow_val['ALTT_LINK_NAME_SHORT']; if ($_forumrow_val['TOPIC_TITLE_COLOUR']) {  ?></span><?php } ?></a>
                                            <?php } else { echo ((isset($this->_rootref['L_ALTT_PROTECTED'])) ? $this->_rootref['L_ALTT_PROTECTED'] : ((isset($user->lang['ALTT_PROTECTED'])) ? $user->lang['ALTT_PROTECTED'] : '{ ALTT_PROTECTED }')); ?>

                                            <?php } ?><br />
                                          </p>
                                        <?php } ?>					
					<p class="topicdetails"><?php echo $_forumrow_val['LAST_POSTER_FULL']; ?>

						<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_forumrow_val['U_LAST_POST']; ?>" <?php if ($_forumrow_val['LAST_TEXT_HOVER']) {  ?>title="<?php echo $_forumrow_val['LAST_TEXT_HOVER']; ?>"<?php } ?> > <?php if ($_forumrow_val['LAST_TEXT_HOVER']) {  echo $_forumrow_val['LAST_POST_IMG']; } else { ?> <?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?> <?php } ?> </a><?php } ?>

					</p>
				<?php } else { ?>

					<p class="topicdetails"><?php echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?></p>
				<?php } ?>

			</td>
		</tr>
	<?php } if ($_forumrow_val['S_LAST_ROW']) {  ?>

</table>
<br />
<?php } }} else { ?>

<p><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></p>

<?php } ?>