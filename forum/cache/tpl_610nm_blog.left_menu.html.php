<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_USER_BLOG_MENU']) {  ?>

	<table class="tablebg" width="100%" cellspacing="1">
		<tr class="cat" align="center"><td><strong><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></strong></td></tr>
		<tr class="row1">
			<td style="padding: 10px;">
				<?php echo (isset($this->_rootref['USER_FULL'])) ? $this->_rootref['USER_FULL'] : ''; ?>

				<table cellspacing="4" align="center">
					<?php if ($this->_rootref['ONLINE_IMG']) {  ?>

						<tr>
							<td><?php echo (isset($this->_rootref['ONLINE_IMG'])) ? $this->_rootref['ONLINE_IMG'] : ''; ?></td>
						</tr>
					<?php } if ($this->_rootref['RANK_TITLE']) {  ?>

						<tr>
							<td class="postdetails"><?php echo (isset($this->_rootref['RANK_TITLE'])) ? $this->_rootref['RANK_TITLE'] : ''; ?></td>
						</tr>
					<?php } if ($this->_rootref['RANK_IMG']) {  ?>

						<tr>
							<td><?php echo (isset($this->_rootref['RANK_IMG'])) ? $this->_rootref['RANK_IMG'] : ''; ?></td>
						</tr>
					<?php } if ($this->_rootref['AVATAR']) {  ?>

						<tr>
							<td><?php echo (isset($this->_rootref['AVATAR'])) ? $this->_rootref['AVATAR'] : ''; ?></td>
						</tr>
					<?php } ?>

				</table>

				<span class="postdetails">
					<?php if ($this->_rootref['POSTER_JOINED']) {  ?><br /><b><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>:</b> <?php echo (isset($this->_rootref['POSTER_JOINED'])) ? $this->_rootref['POSTER_JOINED'] : ''; } if ($this->_rootref['POSTER_POSTS'] != ('')) {  ?><br /><b><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>:</b> <?php echo (isset($this->_rootref['POSTER_POSTS'])) ? $this->_rootref['POSTER_POSTS'] : ''; } if ($this->_rootref['POSTER_FROM']) {  ?><br /><b><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>:</b> <?php echo (isset($this->_rootref['POSTER_FROM'])) ? $this->_rootref['POSTER_FROM'] : ''; } if ($this->_rootref['S_PROFILE_FIELD1']) {  ?><!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
						<br /><b><?php echo (isset($this->_rootref['PROFILE_FIELD1_NAME'])) ? $this->_rootref['PROFILE_FIELD1_NAME'] : ''; ?>:</b> <?php echo (isset($this->_rootref['PROFILE_FIELD1_VALUE'])) ? $this->_rootref['PROFILE_FIELD1_VALUE'] : ''; ?>

					<?php } $_custom_fields_count = (isset($this->_tpldata['custom_fields'])) ? sizeof($this->_tpldata['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$this->_tpldata['custom_fields'][$_custom_fields_i]; ?>

						<br /><b><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</b> <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?>

					<?php }} ?>

				</span>
			</td>
		</tr>
	</table>

	<br />

	<?php echo (isset($this->_rootref['USER_MENU_EXTRA'])) ? $this->_rootref['USER_MENU_EXTRA'] : ''; ?>

<?php } if ($this->_rootref['S_BLOG_LINKS']) {  ?>

	<table class="tablebg" width="100%" cellspacing="1">
		<tr class="cat" align="center"><td><strong><?php echo ((isset($this->_rootref['L_BLOG_LINKS'])) ? $this->_rootref['L_BLOG_LINKS'] : ((isset($user->lang['BLOG_LINKS'])) ? $user->lang['BLOG_LINKS'] : '{ BLOG_LINKS }')); ?></strong></td></tr>
		<tr class="row1">
			<td style="padding: 10px;">
			<ul style="list-style: none; margin: 0;">
				<?php $_left_blog_links_count = (isset($this->_tpldata['left_blog_links'])) ? sizeof($this->_tpldata['left_blog_links']) : 0;if ($_left_blog_links_count) {for ($_left_blog_links_i = 0; $_left_blog_links_i < $_left_blog_links_count; ++$_left_blog_links_i){$_left_blog_links_val = &$this->_tpldata['left_blog_links'][$_left_blog_links_i]; ?>

					<li class="<?php echo $_left_blog_links_val['CLASS']; ?>" style="font-weight: normal; padding-bottom: <?php if ($_left_blog_links_val['S_LAST_ROW']) {  ?>0<?php } else { ?>4<?php } ?>px;">
						<?php if ($_left_blog_links_val['URL'] == ('spacer') && $_left_blog_links_val['NAME'] == ('spacer')) {  ?>&nbsp;<?php } else { ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/<?php echo $_left_blog_links_val['IMG']; ?>" alt="<?php echo $_left_blog_links_val['NAME']; ?>" /> <a href="<?php echo $_left_blog_links_val['URL']; ?>"><?php echo $_left_blog_links_val['NAME']; ?></a><?php } ?>

					</li>
				<?php }} ?>

			</ul>
			</td>
		</tr>
	</table>
	<br />
<?php } if ($this->_rootref['S_BLOG_STATS']) {  ?>

	<table class="tablebg" width="100%" cellspacing="1">
		<tr class="cat" align="center"><td><strong><?php echo ((isset($this->_rootref['L_BLOG_STATS'])) ? $this->_rootref['L_BLOG_STATS'] : ((isset($user->lang['BLOG_STATS'])) ? $user->lang['BLOG_STATS'] : '{ BLOG_STATS }')); ?></strong></td></tr>
		<tr class="row1">
			<td style="padding: 10px;">
				<?php $_stats_count = (isset($this->_tpldata['stats'])) ? sizeof($this->_tpldata['stats']) : 0;if ($_stats_count) {for ($_stats_i = 0; $_stats_i < $_stats_count; ++$_stats_i){$_stats_val = &$this->_tpldata['stats'][$_stats_i]; ?>

					<div style="padding-bottom: <?php if ($_stats_val['S_LAST_ROW']) {  ?>6<?php } else { ?>3<?php } ?>px;">
						<?php if ($_stats_val['URL'] == ('spacer') && $_stats_val['NAME'] == ('spacer')) {  ?>&nbsp;<?php } else { ?><span style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php echo $_stats_val['VALUE']; ?></span><span><?php echo $_stats_val['NAME']; ?></span><?php } ?>

					</div>
				<?php }} ?>

			</td>
		</tr>
	</table>
	<br />
<?php } if ($this->_rootref['S_DISPLAY_BLOG_SEARCH']) {  ?>

	<table class="tablebg" width="100%" cellspacing="1">
		<tr class="cat" align="center"><td><strong><?php echo ((isset($this->_rootref['L_SEARCH_BLOGS'])) ? $this->_rootref['L_SEARCH_BLOGS'] : ((isset($user->lang['SEARCH_BLOGS'])) ? $user->lang['SEARCH_BLOGS'] : '{ SEARCH_BLOGS }')); ?></strong></td></tr>
		<tr class="row1">
			<td style="padding: 10px;">
				<form id="blog_searchform" method="post" action="<?php echo (isset($this->_rootref['U_BLOG_SEARCH'])) ? $this->_rootref['U_BLOG_SEARCH'] : ''; ?>">
						<input name="keywords" id="blog_keywords" type="text" maxlength="128" title="<?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS'])) ? $this->_rootref['L_SEARCH_KEYWORDS'] : ((isset($user->lang['SEARCH_KEYWORDS'])) ? $user->lang['SEARCH_KEYWORDS'] : '{ SEARCH_KEYWORDS }')); ?>" class="inputbox search" style="width: 140px;" value="<?php if ($this->_rootref['SEARCH_WORDS']) {  echo (isset($this->_rootref['SEARCH_WORDS'])) ? $this->_rootref['SEARCH_WORDS'] : ''; } else { echo ((isset($this->_rootref['L_SEARCH_MINI'])) ? $this->_rootref['L_SEARCH_MINI'] : ((isset($user->lang['SEARCH_MINI'])) ? $user->lang['SEARCH_MINI'] : '{ SEARCH_MINI }')); } ?>" onclick="if(this.value=='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>';" />
						<input class="button2" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" type="submit" /><br />
						<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

				</form>
			<div style="padding-top: 2px;"><a href="<?php echo (isset($this->_rootref['U_BLOG_SEARCH'])) ? $this->_rootref['U_BLOG_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?></a></div>
			</td>
		</tr>
	</table>
	<br />
<?php } ?>


<?php echo (isset($this->_rootref['MENU_EXTRA'])) ? $this->_rootref['MENU_EXTRA'] : ''; ?>