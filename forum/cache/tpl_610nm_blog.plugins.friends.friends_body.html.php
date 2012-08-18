<?php if (!defined('IN_PHPBB')) exit; ?><script type="text/javascript">
// <![CDATA[

/**
* Set up some global variables
*/
var current_online_id = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
var current_offline_id = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
var current_user_friends_id = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
var next = '';
var online_end = 0;
var offline_end = 0;
var user_friends_end = 0;

/**
* Next/Previous Online/Offline List
* Copyright 2007 EXreaction
*/
function next_list(field)
{
	if (field == 'online')
	{
		current_id = current_online_id - <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		limit = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		end = online_end;
	}
	else if (field == 'offline')
	{
		current_id = current_offline_id - <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		limit = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		end = offline_end;
	}
	else
	{
		current_id = current_user_friends_id - <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		limit = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		end = user_friends_end;
	}

	for (var i = 0; i < (limit * 2); i++)
	{
		next = document.getElementById(field + '_friends_' + current_id);
		if (next)
		{
			if (i < limit)
			{
				next.style.display = "none";
			}
			else
			{
				next.style.display = "block";
			}
			current_id++;
		}
		else
		{
			end++;
		}

		next = false;
	}

	next = document.getElementById('previous_' + field);
	next.style.display = "block";

	next = document.getElementById(field + '_friends_' + (current_id));
	if (end > 0 || !next)
	{
		next = document.getElementById('next_' + field);
		next.style.display = "none";
	}

	if (field == 'online')
	{
		current_online_id = current_id;
		online_end = end;
	}
	else if (field == 'offline')
	{
		current_offline_id = current_id;
		offline_end = end;
	}
	else
	{
		current_user_friends_id = current_id;
		user_friends_end = end;
	}
}

function previous_list(field)
{
	start = false;

	if (field == 'online')
	{
		current_id = current_online_id - 1;
		limit = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		end = online_end;
	}
	else if (field == 'offline')
	{
		current_id = current_offline_id - 1;
		limit = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		end = offline_end;
	}
	else
	{
		current_id = current_user_friends_id - 1;
		limit = <?php echo (isset($this->_rootref['ZEBRA_LIST_LIMIT'])) ? $this->_rootref['ZEBRA_LIST_LIMIT'] : ''; ?>;
		end = user_friends_end;
	}

	for (var i = 0; i < ((limit * 2) - end); i++)
	{
		next = document.getElementById(field + '_friends_' + current_id);
		if (next)
		{
			if (i < (limit - end))
			{
				next.style.display = "none";
			}
			else
			{
				next.style.display = "block";
			}
			current_id--;
		}

		next = false;
	}
	current_id = (current_id + limit + 1);

	next = document.getElementById('next_' + field);
	next.style.display = "block";
	end = 0;

	if (current_id == limit)
	{
		next = document.getElementById('previous_' + field);
		next.style.display = "none";
	}

	if (field == 'online')
	{
		current_online_id = current_id;
		online_end = end;
	}
	else if (field == 'offline')
	{
		current_offline_id = current_id;
		offline_end = end;
	}
	else
	{
		current_user_friends_id = current_id;
		user_friends_end = end;
	}
}
// ]]>
</script>

<?php if ($this->_rootref['S_MENU_ZEBRA_ENABLED']) {  ?>

	<table class="tablebg" width="100%" cellspacing="1">
		<tr class="cat" align="center"><td><strong><?php echo ((isset($this->_rootref['L_FRIENDS'])) ? $this->_rootref['L_FRIENDS'] : ((isset($user->lang['FRIENDS'])) ? $user->lang['FRIENDS'] : '{ FRIENDS }')); ?></strong></td></tr>
		<tr class="row1">
			<td style="padding: 10px;">
				<strong style="color:green"><?php echo ((isset($this->_rootref['L_FRIENDS_ONLINE'])) ? $this->_rootref['L_FRIENDS_ONLINE'] : ((isset($user->lang['FRIENDS_ONLINE'])) ? $user->lang['FRIENDS_ONLINE'] : '{ FRIENDS_ONLINE }')); ?></strong><br />
				<?php $_menu_friends_online_count = (isset($this->_tpldata['menu_friends_online'])) ? sizeof($this->_tpldata['menu_friends_online']) : 0;if ($_menu_friends_online_count) {for ($_menu_friends_online_i = 0; $_menu_friends_online_i < $_menu_friends_online_count; ++$_menu_friends_online_i){$_menu_friends_online_val = &$this->_tpldata['menu_friends_online'][$_menu_friends_online_i]; ?>

					<div id="online_friends_<?php echo $_menu_friends_online_val['S_ROW_COUNT']; ?>" style="padding-bottom: 4px;<?php if ($_menu_friends_online_val['S_ROW_COUNT'] >= $this->_rootref['ZEBRA_LIST_LIMIT']) {  ?> display: none;<?php } ?>">
						<span style="float: right;"><a href="<?php echo $_menu_friends_online_val['U_VIEW_BLOG']; ?>" class="right"><?php echo ((isset($this->_rootref['L_VIEW_BLOG'])) ? $this->_rootref['L_VIEW_BLOG'] : ((isset($user->lang['VIEW_BLOG'])) ? $user->lang['VIEW_BLOG'] : '{ VIEW_BLOG }')); ?></a></span>
						<img src="<?php echo (isset($this->_rootref['IMG_PORTAL_MEMBER'])) ? $this->_rootref['IMG_PORTAL_MEMBER'] : ''; ?>" style="margin-bottom: -4px;" alt="<?php echo ((isset($this->_rootref['L_ONLINE'])) ? $this->_rootref['L_ONLINE'] : ((isset($user->lang['ONLINE'])) ? $user->lang['ONLINE'] : '{ ONLINE }')); ?>" /> <?php echo $_menu_friends_online_val['USERNAME_FULL']; ?>

					</div>
				<?php }} else { ?>

					<?php echo ((isset($this->_rootref['L_NO_FRIENDS_ONLINE'])) ? $this->_rootref['L_NO_FRIENDS_ONLINE'] : ((isset($user->lang['NO_FRIENDS_ONLINE'])) ? $user->lang['NO_FRIENDS_ONLINE'] : '{ NO_FRIENDS_ONLINE }')); ?><br />
				<?php } if ($this->_rootref['S_SHOW_NEXT_ONLINE']) {  ?>

					<div style="margin-bottom: 10px;">
						<div id="previous_online" style="display: none;">
							<a class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" onclick="previous_list('online')" style="color: #3D6FC0; cursor: pointer;"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
						</div>
						<div id="next_online">
							<a class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" onclick="next_list('online')" style="color: #3D6FC0; cursor: pointer;"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a>
						</div>
					</div>
				<?php } ?>

				<br />
				<strong style="color:red"><?php echo ((isset($this->_rootref['L_FRIENDS_OFFLINE'])) ? $this->_rootref['L_FRIENDS_OFFLINE'] : ((isset($user->lang['FRIENDS_OFFLINE'])) ? $user->lang['FRIENDS_OFFLINE'] : '{ FRIENDS_OFFLINE }')); ?></strong><br />
				<?php $_menu_friends_offline_count = (isset($this->_tpldata['menu_friends_offline'])) ? sizeof($this->_tpldata['menu_friends_offline']) : 0;if ($_menu_friends_offline_count) {for ($_menu_friends_offline_i = 0; $_menu_friends_offline_i < $_menu_friends_offline_count; ++$_menu_friends_offline_i){$_menu_friends_offline_val = &$this->_tpldata['menu_friends_offline'][$_menu_friends_offline_i]; ?>

					<div id="offline_friends_<?php echo $_menu_friends_offline_val['S_ROW_COUNT']; ?>" style="padding-bottom: 4px;<?php if ($_menu_friends_offline_val['S_ROW_COUNT'] >= $this->_rootref['ZEBRA_LIST_LIMIT']) {  ?> display: none;<?php } ?>">
						<span style="float: right;"><a href="<?php echo $_menu_friends_offline_val['U_VIEW_BLOG']; ?>" class="right"><?php echo ((isset($this->_rootref['L_VIEW_BLOG'])) ? $this->_rootref['L_VIEW_BLOG'] : ((isset($user->lang['VIEW_BLOG'])) ? $user->lang['VIEW_BLOG'] : '{ VIEW_BLOG }')); ?></a></span>
						<img src="<?php echo (isset($this->_rootref['IMG_PORTAL_MEMBER'])) ? $this->_rootref['IMG_PORTAL_MEMBER'] : ''; ?>" style="margin-bottom: -4px;" alt="<?php echo ((isset($this->_rootref['L_OFFLINE'])) ? $this->_rootref['L_OFFLINE'] : ((isset($user->lang['OFFLINE'])) ? $user->lang['OFFLINE'] : '{ OFFLINE }')); ?>" /> <?php echo $_menu_friends_offline_val['USERNAME_FULL']; ?>

					</div>
				<?php }} else { ?>

					<?php echo ((isset($this->_rootref['L_NO_FRIENDS_OFFLINE'])) ? $this->_rootref['L_NO_FRIENDS_OFFLINE'] : ((isset($user->lang['NO_FRIENDS_OFFLINE'])) ? $user->lang['NO_FRIENDS_OFFLINE'] : '{ NO_FRIENDS_OFFLINE }')); ?>

				<?php } if ($this->_rootref['S_SHOW_NEXT_OFFLINE']) {  ?>

					<div style="margin-bottom: 10px;">
						<div id="previous_offline" style="display: none;">
							<a class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" onclick="previous_list('offline')" style="color: #3D6FC0; cursor: pointer;"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>
						</div>
						<div id="next_offline">
							<a class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" onclick="next_list('offline')" style="color: #3D6FC0; cursor: pointer;"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a>
						</div>
					</div>
				<?php } ?>

			</td>
		</tr>
	</table>
	<br />
<?php } ?>