<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_PRINT_MODE']) {  $this->_tpl_include('overall_header.html'); $this->_tpl_include('blog/blog.js'); if (! $this->_rootref['S_CATEGORY_MODE'] && ( $this->_rootref['BLOG_TITLE'] || $this->_rootref['BLOG_DESCRIPTION'] )) {  ?>

		<div class="forumrules">
			<h3><?php echo (isset($this->_rootref['BLOG_TITLE'])) ? $this->_rootref['BLOG_TITLE'] : ''; ?></h3><br />
			<?php echo (isset($this->_rootref['BLOG_DESCRIPTION'])) ? $this->_rootref['BLOG_DESCRIPTION'] : ''; ?>

		</div>
		<br clear="all" />
	<?php } ?>


	<div id="pagecontent">
		<?php if (! $this->_rootref['S_CATEGORY_MODE']) {  ?>

		<table style="width: 100%">
			<tr>
				<td style="width: 240px; vertical-align: top;">
					<?php $this->_tpl_include('blog/left_menu.html'); ?>

				</td>
				<td style="vertical-align: top; padding-left: 10px;">
		<?php } ?>


		<div id="pageheader">
			<?php if ($this->_rootref['S_SINGLE']) {  $_blogrow_count = (isset($this->_tpldata['blogrow'])) ? sizeof($this->_tpldata['blogrow']) : 0;if ($_blogrow_count) {for ($_blogrow_i = ($_blogrow_count < 0 ? $_blogrow_count : 0); $_blogrow_i < (1 > $_blogrow_count ? $_blogrow_count : 1); ++$_blogrow_i){$_blogrow_val = &$this->_tpldata['blogrow'][$_blogrow_i]; ?><h2><a class="titles" href="<?php echo $_blogrow_val['U_VIEW']; ?>"><?php echo $_blogrow_val['TITLE']; ?></a></h2><?php }} } if ($this->_rootref['U_BLOG_MCP']) {  ?>

				<p class="linkmcp">[&nbsp;<a href="<?php echo (isset($this->_rootref['U_BLOG_MCP'])) ? $this->_rootref['U_BLOG_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_BLOG_MCP'])) ? $this->_rootref['L_BLOG_MCP'] : ((isset($user->lang['BLOG_MCP'])) ? $user->lang['BLOG_MCP'] : '{ BLOG_MCP }')); ?></a>&nbsp;]</p><br /><br />
			<?php } ?>

		</div>

		<table width="100%" cellspacing="1">
			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="middle" nowrap="nowrap">
					<?php if ($this->_rootref['U_ADD_BLOG']) {  ?><a href="<?php echo (isset($this->_rootref['U_ADD_BLOG'])) ? $this->_rootref['U_ADD_BLOG'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button_blog_new.gif" alt="<?php echo ((isset($this->_rootref['L_POST_A_NEW_BLOG'])) ? $this->_rootref['L_POST_A_NEW_BLOG'] : ((isset($user->lang['POST_A_NEW_BLOG'])) ? $user->lang['POST_A_NEW_BLOG'] : '{ POST_A_NEW_BLOG }')); ?>" /></a><?php } if ($this->_rootref['U_REPLY_BLOG']) {  ?>&nbsp;<a href="<?php echo (isset($this->_rootref['U_REPLY_BLOG'])) ? $this->_rootref['U_REPLY_BLOG'] : ''; ?>"><?php echo (isset($this->_rootref['REPLY_IMG'])) ? $this->_rootref['REPLY_IMG'] : ''; ?></a><?php } ?>

				</td>
				<?php if ($this->_rootref['TOTAL_POSTS']) {  ?>

					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
					<td class="gensmall" nowrap="nowrap">&nbsp;[ <?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> ]&nbsp;</td>
					<td class="gensmall" width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php if ($this->_rootref['PAGINATION']) {  ?><b><?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>&nbsp;&nbsp;<?php } echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; if ($this->_rootref['NEXT_PAGE']) {  ?> &nbsp;<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } ?></b><?php } ?></td>
				<?php } ?>

			</tr>
		</table>

		<br />

		<table class="tablebg" width="100%" cellspacing="0">
			<tr>
				<td class="cat" align="center"><?php if ($this->_rootref['S_SORT']) {  ?><form name="sort_blog" method="post" action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>"><span class="gensmall"><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>:</span> <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<span class="gensmall"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?></span> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<input class="btnlite" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" name="sort" /></form><?php } ?></td>
				<td class="cat" align="right"><?php if ($this->_rootref['U_BLOG_FEED']) {  ?><a href="<?php echo (isset($this->_rootref['U_BLOG_FEED'])) ? $this->_rootref['U_BLOG_FEED'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/blog/feed.gif" alt="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?>" /></a> &nbsp;<?php } ?></td>
			</tr>
		</table>

		<?php $_blogrow_count = (isset($this->_tpldata['blogrow'])) ? sizeof($this->_tpldata['blogrow']) : 0;if ($_blogrow_count) {for ($_blogrow_i = 0; $_blogrow_i < $_blogrow_count; ++$_blogrow_i){$_blogrow_val = &$this->_tpldata['blogrow'][$_blogrow_i]; ?>

			<a name="b<?php echo $_blogrow_val['ID']; ?>"></a>
			<table class="tablebg" width="100%" cellspacing="1">
				<?php if ($_blogrow_val['S_HAS_POLL'] && $this->_rootref['S_SINGLE']) {  ?>

					<tr>
						<td class="row2" colspan="2" align="center"><br clear="all" />
							<form method="post" action="<?php echo (isset($this->_rootref['S_POLL_ACTION'])) ? $this->_rootref['S_POLL_ACTION'] : ''; ?>">
								<table cellspacing="0" cellpadding="4" border="0" align="center">
									<tr>
										<td align="center"><span class="gen"><b><?php echo $_blogrow_val['POLL_QUESTION']; ?></b></span><br /><span class="gensmall"><?php echo $_blogrow_val['L_POLL_LENGTH']; ?></span></td>
									</tr>
									<tr>
										<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>">
											<table cellspacing="0" cellpadding="2" border="0">
												<?php $_poll_option_count = (isset($_blogrow_val['poll_option'])) ? sizeof($_blogrow_val['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$_blogrow_val['poll_option'][$_poll_option_i]; ?>

													<tr>
													<?php if ($_blogrow_val['S_CAN_VOTE']) {  ?>

														<td>
															<?php if ($_blogrow_val['S_IS_MULTI_CHOICE']) {  ?>

																<input type="checkbox" class="radio" name="vote_id[]" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
															<?php } else { ?>

																<input type="radio" class="radio" name="vote_id[]" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
															<?php } ?>

														</td>
													<?php } ?>

														<td><span class="gen"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></span></td>
														<?php if ($_blogrow_val['S_DISPLAY_RESULTS']) {  ?>

															<td dir="ltr"><?php echo (isset($this->_rootref['POLL_LEFT_CAP_IMG'])) ? $this->_rootref['POLL_LEFT_CAP_IMG'] : ''; echo $_poll_option_val['POLL_OPTION_IMG']; echo (isset($this->_rootref['POLL_RIGHT_CAP_IMG'])) ? $this->_rootref['POLL_RIGHT_CAP_IMG'] : ''; ?></td>
															<td class="gen" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><b>&nbsp;<?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?>&nbsp;</b></td>
															<td class="gen" align="center">[ <?php echo $_poll_option_val['POLL_OPTION_RESULT']; ?> ]</td>
															<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>

																<td class="gensmall" valign="top"><b title="<?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>">x</b></td>
															<?php } } ?>

													</tr>
												<?php }} ?>

											</table>
										</td>
									</tr>
									<?php if ($_blogrow_val['S_CAN_VOTE']) {  ?>

										<tr>
											<td align="center"><span class="gensmall"><?php echo $_blogrow_val['L_MAX_VOTES']; ?></span><br /><br /><input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="btnlite" /></td>
										</tr>
									<?php } if ($_blogrow_val['S_DISPLAY_RESULTS']) {  ?>

										<tr>
											<td class="gensmall" colspan="4" align="center"><b><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo $_blogrow_val['TOTAL_VOTES']; ?></b></td>
										</tr>
									<?php } else { ?>

										<tr>
											<td align="center"><span class="gensmall"><b><a href="<?php echo (isset($this->_rootref['U_VIEW_RESULTS'])) ? $this->_rootref['U_VIEW_RESULTS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a></b></span></td>
										</tr>
									<?php } ?>

								</table>
							<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

							</form>
						</td>
					</tr>
				<?php } if (!($_blogrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } if ($this->_rootref['S_CATEGORY_MODE']) {  ?>

						<td align="center" valign="middle">
							<?php echo $_blogrow_val['USER_FULL']; ?>

						</td>
					<?php } ?>

					<td width="100%" height="25">
						<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">&nbsp;<b><?php if ($_blogrow_val['S_HAS_POLL']) {  echo ((isset($this->_rootref['L_VIEW_TOPIC_POLL'])) ? $this->_rootref['L_VIEW_TOPIC_POLL'] : ((isset($user->lang['VIEW_TOPIC_POLL'])) ? $user->lang['VIEW_TOPIC_POLL'] : '{ VIEW_TOPIC_POLL }')); } else { echo ((isset($this->_rootref['L_POST_SUBJECT'])) ? $this->_rootref['L_POST_SUBJECT'] : ((isset($user->lang['POST_SUBJECT'])) ? $user->lang['POST_SUBJECT'] : '{ POST_SUBJECT }')); ?>:<?php } ?></b> <a href="<?php echo $_blogrow_val['U_VIEW']; ?>"><?php echo $_blogrow_val['TITLE']; ?></a></div><div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php if ($this->_rootref['S_IS_BOT']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon_post_target.gif" alt="<?php echo ((isset($this->_rootref['L_PERMANENT_LINK'])) ? $this->_rootref['L_PERMANENT_LINK'] : ((isset($user->lang['PERMANENT_LINK'])) ? $user->lang['PERMANENT_LINK'] : '{ PERMANENT_LINK }')); ?>" /><?php } else { ?><a href="<?php echo $_blogrow_val['U_VIEW_PERMANENT']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon_post_target.gif" alt="<?php echo ((isset($this->_rootref['L_PERMANENT_LINK'])) ? $this->_rootref['L_PERMANENT_LINK'] : ((isset($user->lang['PERMANENT_LINK'])) ? $user->lang['PERMANENT_LINK'] : '{ PERMANENT_LINK }')); ?>" /></a><?php } ?><b><?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>:</b> <?php echo $_blogrow_val['DATE']; ?>&nbsp;</div>
					</td>
				</tr>

				<?php if (!($_blogrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } if ($this->_rootref['S_CATEGORY_MODE']) {  ?>

						<td valign="top" class="profile">
							<table cellspacing="4" align="center" width="150">
								<?php if ($_blogrow_val['ONLINE_IMG']) {  ?>

									<tr>
										<td><?php echo $_blogrow_val['ONLINE_IMG']; ?></td>
									</tr>
								<?php } if ($_blogrow_val['RANK_TITLE']) {  ?>

									<tr>
										<td class="postdetails"><?php echo $_blogrow_val['RANK_TITLE']; ?></td>
									</tr>
								<?php } if ($_blogrow_val['RANK_IMG']) {  ?>

									<tr>
										<td><?php echo $_blogrow_val['RANK_IMG']; ?></td>
									</tr>
								<?php } if ($_blogrow_val['AVATAR']) {  ?>

									<tr>
										<td><?php echo $_blogrow_val['AVATAR']; ?></td>
									</tr>
								<?php } ?>

							</table>

							<span class="postdetails">
								<?php if ($_blogrow_val['POSTER_JOINED']) {  ?><br /><b><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>:</b> <?php echo $_blogrow_val['POSTER_JOINED']; } if ($_blogrow_val['POSTER_POSTS'] != ('')) {  ?><br /><b><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>:</b> <?php echo $_blogrow_val['POSTER_POSTS']; } if ($_blogrow_val['POSTER_FROM']) {  ?><br /><b><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>:</b> <?php echo $_blogrow_val['POSTER_FROM']; } if ($_blogrow_val['S_PROFILE_FIELD1']) {  ?><!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
									<br /><b><?php echo $_blogrow_val['PROFILE_FIELD1_NAME']; ?>:</b> <?php echo $_blogrow_val['PROFILE_FIELD1_VALUE']; ?>

								<?php } $_custom_fields_count = (isset($_blogrow_val['custom_fields'])) ? sizeof($_blogrow_val['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$_blogrow_val['custom_fields'][$_custom_fields_i]; ?>

									<br /><b><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</b> <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?>

								<?php }} ?>

							</span>
						</td>
					<?php } ?>

					<td valign="top">
						<table width="100%" cellspacing="5">
							<tr>
								<td>
									<?php if ($_blogrow_val['S_UNAPPROVED'] || $_blogrow_val['S_REPORTED']) {  ?>

										<table width="100%" cellspacing="0">
											<tr>
												<td class="gensmall"><?php if ($_blogrow_val['S_UNAPPROVED']) {  ?><span class="postapprove"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?> <a href="<?php echo $_blogrow_val['U_APPROVE']; ?>"><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></a></span> <?php } if ($_blogrow_val['S_REPORTED']) {  ?><span class="postreported"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?> <a href="<?php echo $_blogrow_val['U_REPORT']; ?>"><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></a></span><?php } ?></td>
											</tr>
										</table>

										<br clear="all" />
									<?php } if (! $_blogrow_val['S_SHORTENED'] && $_blogrow_val['RATING_STRING']) {  ?><div style="float: right;"><?php echo $_blogrow_val['RATING_STRING']; ?></div><?php } ?>


									<div class="postbody"><?php echo $_blogrow_val['MESSAGE']; ?></div>

									<?php if ($_blogrow_val['S_HAS_ATTACHMENTS']) {  ?>

										<br clear="all" /><br />

										<table class="tablebg" width="100%" cellspacing="1">
										<tr>
											<td class="row3"><b class="genmed"><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?>: </b></td>
										</tr>
										<?php $_attachment_count = (isset($_blogrow_val['attachment'])) ? sizeof($_blogrow_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_blogrow_val['attachment'][$_attachment_i]; ?>

											<tr>
												<?php if (!($_attachment_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2"><?php } else { ?><td class="row1"><?php } echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></td>
											</tr>
										<?php }} ?>

										</table>
									<?php } if ($_blogrow_val['S_DISPLAY_NOTICE']) {  ?>

										<span class="gensmall error"><br /><br /><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></span>
									<?php } if ($_blogrow_val['SIGNATURE'] && $this->_rootref['S_SINGLE']) {  ?>

										<span class="postbody"><br />_________________<br /><?php echo $_blogrow_val['SIGNATURE']; ?></span>
									<?php } ?>


									<?php echo $_blogrow_val['EXTRA']; ?>


									<?php if ($_blogrow_val['EDITED_MESSAGE'] || $_blogrow_val['EDIT_REASON']) {  ?>

										<br /><br />
										<table class="tablebg" width="100%" cellspacing="1">
										<tr>
											<td class="row3"><span class="gensmall"><?php echo $_blogrow_val['EDITED_MESSAGE']; ?></span></td>
										</tr>
										<?php if ($_blogrow_val['EDIT_REASON']) {  ?>

											<tr>
												<td class="row2"><span class="genmed"><?php echo $_blogrow_val['EDIT_REASON']; ?></span></td>
											</tr>
										<?php } ?>

										</table>
									<?php } if ($_blogrow_val['DELETED_MESSAGE']) {  ?>

										<br /><br />
											<table class="tablebg" width="100%" cellspacing="1">
											<tr>
												<td class="row3"><span class="gensmall"><?php echo $_blogrow_val['DELETED_MESSAGE']; ?></span></td>
											</tr>
										</table>
									<?php } if (! $_blogrow_val['S_HAS_ATTACHMENTS']) {  ?><br clear="all" /><br /><?php } ?>


									<table width="100%" cellspacing="0">
										<tr valign="middle">
											<td class="gensmall" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>">
											<?php if (! $_blogrow_val['S_SHORTENED'] && ! $this->_rootref['S_IS_BOT']) {  if ($_blogrow_val['U_REPORT'] && ! $_blogrow_val['S_REPORTED']) {  ?><a href="<?php echo $_blogrow_val['U_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORT_IMG'])) ? $this->_rootref['REPORT_IMG'] : ''; ?></a> <?php } if ($_blogrow_val['U_WARN']) {  ?><a href="<?php echo $_blogrow_val['U_WARN']; ?>"><?php echo (isset($this->_rootref['WARN_IMG'])) ? $this->_rootref['WARN_IMG'] : ''; ?></a> <?php } if ($_blogrow_val['U_DELETE']) {  ?><a href="<?php echo $_blogrow_val['U_DELETE']; ?>"><?php echo (isset($this->_rootref['DELETE_IMG'])) ? $this->_rootref['DELETE_IMG'] : ''; ?></a> <?php } } ?>

											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<?php if (!($_blogrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } if ($this->_rootref['S_CATEGORY_MODE']) {  ?><td class="profile"><strong><a href="#wrapheader"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></strong></td><?php } ?>

					<td>
						<?php if ($this->_rootref['S_SINGLE']) {  ?>

							<div class="gensmall" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">&nbsp;<?php if ($_blogrow_val['U_PROFILE']) {  ?><a href="<?php echo $_blogrow_val['U_PROFILE']; ?>"><?php echo (isset($this->_rootref['PROFILE_IMG'])) ? $this->_rootref['PROFILE_IMG'] : ''; ?></a> <?php } if ($_blogrow_val['U_PM']) {  ?><a href="<?php echo $_blogrow_val['U_PM']; ?>"><?php echo (isset($this->_rootref['PM_IMG'])) ? $this->_rootref['PM_IMG'] : ''; ?></a> <?php } if ($_blogrow_val['U_EMAIL']) {  ?><a href="<?php echo $_blogrow_val['U_EMAIL']; ?>"><?php echo (isset($this->_rootref['EMAIL_IMG'])) ? $this->_rootref['EMAIL_IMG'] : ''; ?></a> <?php } ?>&nbsp;</div> <div class="gensmall" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php if (! $this->_rootref['S_IS_BOT']) {  if ($_blogrow_val['U_EDIT']) {  ?><a href="<?php echo $_blogrow_val['U_EDIT']; ?>"><?php echo (isset($this->_rootref['EDIT_IMG'])) ? $this->_rootref['EDIT_IMG'] : ''; ?></a> <?php } if ($_blogrow_val['U_QUOTE']) {  ?><a href="<?php echo $_blogrow_val['U_QUOTE']; ?>"><?php echo (isset($this->_rootref['QUOTE_IMG'])) ? $this->_rootref['QUOTE_IMG'] : ''; ?></a> <?php } } ?>&nbsp;</div>
						<?php } else { ?>

							<div class="gensmall" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">&nbsp;<?php echo $_blogrow_val['VIEWS']; ?></div> <div class="gensmall" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php echo $_blogrow_val['REPLIES']; ?>&nbsp;</div>
						<?php } ?>

					</td>
				</tr>
			</table>
		<?php }} else { ?>

			<table class="tablebg" width="100%" cellspacing="1">
				<tr class="row1">
					<td>
						<div style="text-align: center;"><?php if ($this->_rootref['MODE'] == ('deleted')) {  echo ((isset($this->_rootref['L_NO_DELETED_BLOGS'])) ? $this->_rootref['L_NO_DELETED_BLOGS'] : ((isset($user->lang['NO_DELETED_BLOGS'])) ? $user->lang['NO_DELETED_BLOGS'] : '{ NO_DELETED_BLOGS }')); } else { echo ((isset($this->_rootref['L_NO_BLOGS_USER'])) ? $this->_rootref['L_NO_BLOGS_USER'] : ((isset($user->lang['NO_BLOGS_USER'])) ? $user->lang['NO_BLOGS_USER'] : '{ NO_BLOGS_USER }')); } ?></div>
					</td>
				</tr>
			</table>
		<?php } if ($this->_rootref['S_REPLIES']) {  ?>

			<a name="replies"></a>
			<br /><br />
			<table width="100%" cellspacing="1" class="tablebg">
				<th><?php echo ((isset($this->_rootref['L_COMMENTS'])) ? $this->_rootref['L_COMMENTS'] : ((isset($user->lang['COMMENTS'])) ? $user->lang['COMMENTS'] : '{ COMMENTS }')); ?></th>
				<tr align="center">
					<td class="cat"><?php if ($this->_rootref['S_SORT_REPLY']) {  ?><form name="sort_replies" method="post" action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>"><span class="gensmall"><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>:</span> <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<span class="gensmall"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?></span> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<input class="btnlite" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" name="sort" /></form><?php } ?></td>
				</tr>
			</table>
			<?php $_replyrow_count = (isset($this->_tpldata['replyrow'])) ? sizeof($this->_tpldata['replyrow']) : 0;if ($_replyrow_count) {for ($_replyrow_i = 0; $_replyrow_i < $_replyrow_count; ++$_replyrow_i){$_replyrow_val = &$this->_tpldata['replyrow'][$_replyrow_i]; ?>

				<a name="r<?php echo $_replyrow_val['ID']; ?>"></a>
				<?php if ($_replyrow_val['S_DELETED'] || $_replyrow_val['USER_FOE']) {  ?>

					<div id="d<?php echo $_replyrow_val['ID']; ?>" class="post<?php if ($_replyrow_val['USER_FOE']) {  ?> foe<?php } if ($_replyrow_val['S_DELETED']) {  ?> deleted<?php } ?>" style="width: 97%; margin: 0 auto 10px auto;">
						<div class="inner"><span class="corners-top"><span></span></span>
							<div class="postbody" style="width: 100%; text-align: center;">
								<?php if ($_replyrow_val['S_DELETED']) {  ?>

									<a href="#none" onClick="toggleDiv('r<?php echo $_replyrow_val['ID']; ?>'); toggleDiv('d<?php echo $_replyrow_val['ID']; ?>');"><?php echo ((isset($this->_rootref['L_DELETED_REPLY_SHOW'])) ? $this->_rootref['L_DELETED_REPLY_SHOW'] : ((isset($user->lang['DELETED_REPLY_SHOW'])) ? $user->lang['DELETED_REPLY_SHOW'] : '{ DELETED_REPLY_SHOW }')); ?></a>
								<?php } else { ?>

									<?php echo $_replyrow_val['L_USER_FOE']; ?><br /><a href="#none" onClick="toggleDiv('r<?php echo $_replyrow_val['ID']; ?>'); toggleDiv('d<?php echo $_replyrow_val['ID']; ?>');"><?php echo ((isset($this->_rootref['L_CLICK_HERE_SHOW_POST'])) ? $this->_rootref['L_CLICK_HERE_SHOW_POST'] : ((isset($user->lang['CLICK_HERE_SHOW_POST'])) ? $user->lang['CLICK_HERE_SHOW_POST'] : '{ CLICK_HERE_SHOW_POST }')); ?></a>
								<?php } ?>

								<noscript><br /><?php echo ((isset($this->_rootref['L_REPLY_SHOW_NO_JS'])) ? $this->_rootref['L_REPLY_SHOW_NO_JS'] : ((isset($user->lang['REPLY_SHOW_NO_JS'])) ? $user->lang['REPLY_SHOW_NO_JS'] : '{ REPLY_SHOW_NO_JS }')); ?></noscript>
								<div class="back2top"><a href="#wrap" class="top" title="<?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?>"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></div>
							</div>
						<span class="corners-bottom"><span></span></span></div>
					</div>
				<?php } ?>

				<table class="tablebg" width="100%" cellspacing="1">
				<?php if (!($_replyrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>

					<td align="center" valign="middle">
						<?php echo $_replyrow_val['USER_FULL']; ?>

					</td>
					<td width="100%" height="25">
						<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">&nbsp;<b><?php if ($_replyrow_val['S_HAS_POLL']) {  echo ((isset($this->_rootref['L_VIEW_TOPIC_POLL'])) ? $this->_rootref['L_VIEW_TOPIC_POLL'] : ((isset($user->lang['VIEW_TOPIC_POLL'])) ? $user->lang['VIEW_TOPIC_POLL'] : '{ VIEW_TOPIC_POLL }')); } else { echo ((isset($this->_rootref['L_POST_SUBJECT'])) ? $this->_rootref['L_POST_SUBJECT'] : ((isset($user->lang['POST_SUBJECT'])) ? $user->lang['POST_SUBJECT'] : '{ POST_SUBJECT }')); ?>:<?php } ?></b> <a href="<?php echo $_replyrow_val['U_VIEW']; ?>"><?php echo $_replyrow_val['TITLE']; ?></a></div><div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php if ($this->_rootref['S_IS_BOT']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon_post_target.gif" alt="<?php echo ((isset($this->_rootref['L_PERMANENT_LINK'])) ? $this->_rootref['L_PERMANENT_LINK'] : ((isset($user->lang['PERMANENT_LINK'])) ? $user->lang['PERMANENT_LINK'] : '{ PERMANENT_LINK }')); ?>" /><?php } else { ?><a href="<?php echo $_replyrow_val['U_VIEW_PERMANENT']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon_post_target.gif" alt="<?php echo ((isset($this->_rootref['L_PERMANENT_LINK'])) ? $this->_rootref['L_PERMANENT_LINK'] : ((isset($user->lang['PERMANENT_LINK'])) ? $user->lang['PERMANENT_LINK'] : '{ PERMANENT_LINK }')); ?>" /></a><?php } ?><b><?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>:</b> <?php echo $_replyrow_val['DATE']; ?>&nbsp;</div></td>
					</td>
				</tr>

				<?php if (!($_replyrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>

					<td valign="top" class="profile">
						<table cellspacing="4" align="center" width="150">
							<?php if ($_replyrow_val['ONLINE_IMG']) {  ?>

								<tr>
									<td><?php echo $_replyrow_val['ONLINE_IMG']; ?></td>
								</tr>
							<?php } if ($_replyrow_val['RANK_TITLE']) {  ?>

								<tr>
									<td class="postdetails"><?php echo $_replyrow_val['RANK_TITLE']; ?></td>
								</tr>
							<?php } if ($_replyrow_val['RANK_IMG']) {  ?>

								<tr>
									<td><?php echo $_replyrow_val['RANK_IMG']; ?></td>
								</tr>
							<?php } if ($_replyrow_val['AVATAR']) {  ?>

								<tr>
									<td><?php echo $_replyrow_val['AVATAR']; ?></td>
								</tr>
							<?php } ?>

						</table>

						<span class="postdetails">
							<?php if ($_replyrow_val['POSTER_JOINED']) {  ?><br /><b><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>:</b> <?php echo $_replyrow_val['POSTER_JOINED']; } if ($_replyrow_val['POSTER_POSTS'] != ('')) {  ?><br /><b><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>:</b> <?php echo $_replyrow_val['POSTER_POSTS']; } if ($_replyrow_val['POSTER_FROM']) {  ?><br /><b><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>:</b> <?php echo $_replyrow_val['POSTER_FROM']; } if ($_replyrow_val['S_PROFILE_FIELD1']) {  ?><!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
								<br /><b><?php echo $_replyrow_val['PROFILE_FIELD1_NAME']; ?>:</b> <?php echo $_replyrow_val['PROFILE_FIELD1_VALUE']; ?>

							<?php } $_custom_fields_count = (isset($_replyrow_val['custom_fields'])) ? sizeof($_replyrow_val['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$_replyrow_val['custom_fields'][$_custom_fields_i]; ?>

								<br /><b><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</b> <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?>

							<?php }} ?>

						</span>
					</td>
					<td valign="top">
						<table width="100%" cellspacing="5">
							<tr>
								<td>
									<?php if ($_replyrow_val['S_UNAPPROVED'] || $_replyrow_val['S_REPORTED']) {  ?>

										<table width="100%" cellspacing="0">
											<tr>
												<td class="gensmall"><?php if ($_replyrow_val['S_UNAPPROVED']) {  ?><span class="postapprove"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?> <a href="<?php echo $_replyrow_val['U_APPROVE']; ?>"><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></a></span> <?php } if ($_replyrow_val['S_REPORTED']) {  ?><span class="postreported"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?> <a href="<?php echo $_replyrow_val['U_REPORT']; ?>"><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></a></span><?php } ?></td>
											</tr>
										</table>

										<br clear="all" />
									<?php } ?>


									<div class="postbody"><?php echo $_replyrow_val['MESSAGE']; ?></div>

									<?php if ($_replyrow_val['S_HAS_ATTACHMENTS']) {  ?>

										<br clear="all" /><br />

										<table class="tablebg" width="100%" cellspacing="1">
										<tr>
											<td class="row3"><b class="genmed"><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?>: </b></td>
										</tr>
										<?php $_attachment_count = (isset($_replyrow_val['attachment'])) ? sizeof($_replyrow_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_replyrow_val['attachment'][$_attachment_i]; ?>

											<tr>
												<?php if (!($_attachment_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row1"><?php } else { ?><td class="row2"><?php } echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></td>
											</tr>
										<?php }} ?>

										</table>
									<?php } if ($_replyrow_val['S_DISPLAY_NOTICE']) {  ?>

										<span class="gensmall error"><br /><br /><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></span>
									<?php } if ($_replyrow_val['SIGNATURE'] && $this->_rootref['S_SINGLE']) {  ?>

										<span class="postbody"><br />_________________<br /><?php echo $_replyrow_val['SIGNATURE']; ?></span>
									<?php } ?>


									<?php echo $_replyrow_val['EXTRA']; ?>


									<?php if ($_replyrow_val['EDITED_MESSAGE'] || $_replyrow_val['EDIT_REASON']) {  ?>

										<br /><br />
										<table class="tablebg" width="100%" cellspacing="1">
										<tr>
											<td class="row3"><span class="gensmall"><?php echo $_replyrow_val['EDITED_MESSAGE']; ?></span></td>
										</tr>
										<?php if ($_replyrow_val['EDIT_REASON']) {  ?>

											<tr>
												<td class="row2"><span class="genmed"><?php echo $_replyrow_val['EDIT_REASON']; ?></span></td>
											</tr>
										<?php } ?>

										</table>
									<?php } if ($_replyrow_val['DELETED_MESSAGE']) {  ?>

										<br /><br />
											<table class="tablebg" width="100%" cellspacing="1">
											<tr>
												<td class="row3"><span class="gensmall"><?php echo $_replyrow_val['DELETED_MESSAGE']; ?></span></td>
											</tr>
										</table>
									<?php } if (! $_replyrow_val['S_HAS_ATTACHMENTS']) {  ?><br clear="all" /><br /><?php } ?>


									<table width="100%" cellspacing="0">
										<tr valign="middle">
											<td class="gensmall" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>">
											<?php if (! $this->_rootref['S_IS_BOT']) {  if ($_replyrow_val['U_REPORT'] && ! $_replyrow_val['S_REPORTED']) {  ?><a href="<?php echo $_replyrow_val['U_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORT_IMG'])) ? $this->_rootref['REPORT_IMG'] : ''; ?></a> <?php } if ($_replyrow_val['U_WARN']) {  ?><a href="<?php echo $_replyrow_val['U_WARN']; ?>"><?php echo (isset($this->_rootref['WARN_IMG'])) ? $this->_rootref['WARN_IMG'] : ''; ?></a> <?php } if ($_replyrow_val['U_DELETE']) {  ?><a href="<?php echo $_replyrow_val['U_DELETE']; ?>"><?php echo (isset($this->_rootref['DELETE_IMG'])) ? $this->_rootref['DELETE_IMG'] : ''; ?></a> <?php } } ?>

											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<?php if (!($_replyrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>

					<td class="profile"><strong><a href="#wrapheader"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></strong></td>
					<td>
						<div class="gensmall" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">&nbsp;<?php if ($_replyrow_val['U_PROFILE']) {  ?><a href="<?php echo $_replyrow_val['U_PROFILE']; ?>"><?php echo (isset($this->_rootref['PROFILE_IMG'])) ? $this->_rootref['PROFILE_IMG'] : ''; ?></a> <?php } if ($_replyrow_val['U_PM']) {  ?><a href="<?php echo $_replyrow_val['U_PM']; ?>"><?php echo (isset($this->_rootref['PM_IMG'])) ? $this->_rootref['PM_IMG'] : ''; ?></a> <?php } if ($_replyrow_val['U_EMAIL']) {  ?><a href="<?php echo $_replyrow_val['U_EMAIL']; ?>"><?php echo (isset($this->_rootref['EMAIL_IMG'])) ? $this->_rootref['EMAIL_IMG'] : ''; ?></a> <?php } ?>&nbsp;</div> <div class="gensmall" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php if (! $this->_rootref['S_IS_BOT']) {  if ($_replyrow_val['U_EDIT']) {  ?><a href="<?php echo $_replyrow_val['U_EDIT']; ?>"><?php echo (isset($this->_rootref['EDIT_IMG'])) ? $this->_rootref['EDIT_IMG'] : ''; ?></a> <?php } if ($_replyrow_val['U_QUOTE']) {  ?><a href="<?php echo $_replyrow_val['U_QUOTE']; ?>"><?php echo (isset($this->_rootref['QUOTE_IMG'])) ? $this->_rootref['QUOTE_IMG'] : ''; ?></a> <?php } } ?>&nbsp;</div>
					</td>
				</tr>
			</table>
			<?php }} } if ($this->_rootref['S_QUICK_REPLY']) {  $this->_tpl_include('blog/quick_reply.html'); } ?>


		<table width="100%" cellspacing="1">
			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="middle" nowrap="nowrap">
					<br /><?php if ($this->_rootref['U_ADD_BLOG']) {  ?><a href="<?php echo (isset($this->_rootref['U_ADD_BLOG'])) ? $this->_rootref['U_ADD_BLOG'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button_blog_new.gif" alt="<?php echo ((isset($this->_rootref['L_POST_A_NEW_BLOG'])) ? $this->_rootref['L_POST_A_NEW_BLOG'] : ((isset($user->lang['POST_A_NEW_BLOG'])) ? $user->lang['POST_A_NEW_BLOG'] : '{ POST_A_NEW_BLOG }')); ?>" /></a><?php } if ($this->_rootref['U_REPLY_BLOG']) {  ?>&nbsp;<a href="<?php echo (isset($this->_rootref['U_REPLY_BLOG'])) ? $this->_rootref['U_REPLY_BLOG'] : ''; ?>"><?php echo (isset($this->_rootref['REPLY_IMG'])) ? $this->_rootref['REPLY_IMG'] : ''; ?></a><?php } ?>

				</td>
				<?php if ($this->_rootref['TOTAL_POSTS']) {  ?>

					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
					<td class="gensmall" nowrap="nowrap">&nbsp;[ <?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> ]&nbsp;</td>
					<td class="gensmall" width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php if ($this->_rootref['PAGINATION']) {  ?><b><?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>&nbsp;&nbsp;<?php } echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; if ($this->_rootref['NEXT_PAGE']) {  ?> &nbsp;<a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } ?></b><?php } ?></td>
				<?php } ?>

			</tr>
		</table>

		<br clear="all" />

		<?php $this->_tpl_include('breadcrumbs.html'); if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

			<br clear="all" />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td class="cat"><h4><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></h4></td>
			</tr>
			<tr>
				<td class="row1"><p class="gensmall"><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></p></td>
			</tr>
			</table>
		<?php } ?>


		<br clear="all" />

		<?php if (! $this->_rootref['S_CATEGORY_MODE']) {  ?>

				</td>
			</tr>
		</table>
		<?php } ?>

	</div>

	<div id="pagefooter"></div>

	<?php $this->_tpl_include('overall_footer.html'); } else { ?><!-- Print Mode -->

	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html dir="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>" lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($this->_rootref['S_CONTENT_ENCODING'])) ? $this->_rootref['S_CONTENT_ENCODING'] : ''; ?>">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Language" content="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
	<title><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> :: <?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>

	<style type="text/css">
	<!--

	body {
		font-family: Verdana,serif;
		font-size: 10pt;
	}

	img {
		border: 0;
	}

	td {
		font-family: Verdana,serif;
		font-size: 10pt;
		line-height: 150%;
	}

	.code,
	.quote {
		font-size: smaller;
		border: black solid 1px;
	}

	.forum {
		font-family: Arial,Helvetica,sans-serif;
		font-weight: bold;
		font-size: 18pt;
	}

	.topic {
		font-family: Arial,Helvetica,sans-serif;
		font-size: 14pt;
		font-weight: bold;
	}

	.gensmall {
		font-size: 8pt;
	}

	hr {
		color: #888;
		height: 3px;
		border-style: solid;
	}

	hr.sep {
		color: #aaa;
		height: 1px;
		border-style: dashed;
	}
	//-->
	</style>

	</head>
	<body>

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td colspan="2" align="center"><span class="Forum"><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?></span></td>
	</tr>
	<tr>
		<td colspan="2"><br /></td>
	</tr>
	<tr>
		<td><span class="topic"><?php echo (isset($this->_rootref['TITLE'])) ? $this->_rootref['TITLE'] : ''; ?></span><br /><span class="gensmall"><a href="<?php echo (isset($this->_rootref['U_BLOG_SELF'])) ? $this->_rootref['U_BLOG_SELF'] : ''; ?>"><?php echo (isset($this->_rootref['U_BLOG_SELF'])) ? $this->_rootref['U_BLOG_SELF'] : ''; ?></a></span></td>
	</tr>
	</table>

	<hr width="85%" />

	<?php $_blogrow_count = (isset($this->_tpldata['blogrow'])) ? sizeof($this->_tpldata['blogrow']) : 0;if ($_blogrow_count) {for ($_blogrow_i = 0; $_blogrow_i < $_blogrow_count; ++$_blogrow_i){$_blogrow_val = &$this->_tpldata['blogrow'][$_blogrow_i]; ?>

		<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
			<tr>
				<td width="10%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?>:&nbsp;</td>
				<td><?php echo $_blogrow_val['USER_FULL']; ?> [ <?php echo $_blogrow_val['DATE']; ?> ]</td>
			</tr>
			<tr>
				<td width="10%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_BLOG_SUBJECT'])) ? $this->_rootref['L_BLOG_SUBJECT'] : ((isset($user->lang['BLOG_SUBJECT'])) ? $user->lang['BLOG_SUBJECT'] : '{ BLOG_SUBJECT }')); ?>:&nbsp;</td>
				<td><b><?php echo $_blogrow_val['TITLE']; ?></b></td>
			</tr>
			<tr>
				<td colspan="2"><hr class="sep" /><?php echo $_blogrow_val['MESSAGE']; ?>

				<br /><?php echo $_blogrow_val['EXTRA']; ?></td>
			</tr>
		</table>

		<hr width="85%" />
	<?php }} if ($this->_rootref['S_REPLIES']) {  ?>

		<br /><br />
		<div align="center"><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></div>
		<hr width="85%" />
		<?php $_replyrow_count = (isset($this->_tpldata['replyrow'])) ? sizeof($this->_tpldata['replyrow']) : 0;if ($_replyrow_count) {for ($_replyrow_i = 0; $_replyrow_i < $_replyrow_count; ++$_replyrow_i){$_replyrow_val = &$this->_tpldata['replyrow'][$_replyrow_i]; ?>

			<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
				<tr>
					<td width="10%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?>:&nbsp;</td>
					<td><?php echo $_replyrow_val['USER_FULL']; ?> [ <?php echo $_replyrow_val['DATE']; ?> ]</td>
				</tr>
				<tr>
					<td colspan="2"><hr class="sep" /><?php echo $_replyrow_val['MESSAGE']; ?>

					<br /><?php echo $_replyrow_val['EXTRA']; ?></td>
				</tr>
			</table>

			<hr width="85%" />
		<?php }} } ?>


	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td colspan="2" align="right"><span class="gensmall"><?php echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?></span></td>
	</tr>
	<tr>
		<td align="center"><br /><span class="gensmall">Powered by phpBB &copy; 2002, 2006 phpBB Group<br /><a href="http://www.phpbb.com">www.phpbb.com</a></span></td>
		<td align="center"><br /><span class="gensmall">User Blog system created by EXreaction &copy; 2007 Lithium Studios<br /><a href="http://www.lithiumstudios.org">www.lithiumstudios.org</a></span></td>
	</tr>
	</table>

	</body>
	</html>

<?php } ?>