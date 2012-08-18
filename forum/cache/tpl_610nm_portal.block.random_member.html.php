<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_RND_MEMBER'])) ? $this->_rootref['L_RND_MEMBER'] : ((isset($user->lang['RND_MEMBER'])) ? $user->lang['RND_MEMBER'] : '{ RND_MEMBER }')); ?></th>
	</tr>
	<tr class="row1">
		<td>
			<?php $_random_member_count = (isset($this->_tpldata['random_member'])) ? sizeof($this->_tpldata['random_member']) : 0;if ($_random_member_count) {for ($_random_member_i = 0; $_random_member_i < $_random_member_count; ++$_random_member_i){$_random_member_val = &$this->_tpldata['random_member'][$_random_member_i]; ?>
			<span style="float:left;font-size:12px;">
				<a href="<?php echo $_random_member_val['U_VIEW_PROFILE']; ?>"><?php if ($_random_member_val['USER_COLOR']) {  ?><span style="color: <?php echo $_random_member_val['USER_COLOR']; ?>; font-weight: bold;"><?php } else { ?><span><?php } echo $_random_member_val['USERNAME']; ?></span></a>
			</span>
			<span style="float:right;"></span><br /><br />
			<?php if ($_random_member_val['AVATAR_IMG']) {  ?><a href="<?php echo $_random_member_val['U_VIEW_PROFILE']; ?>"><?php echo $_random_member_val['AVATAR_IMG']; ?></a><?php } if ($_random_member_val['RANK_TITLE']) {  ?><br /><small><?php echo $_random_member_val['RANK_TITLE']; ?></small><br /><?php } if ($_random_member_val['RANK_IMG']) {  ?><br /><?php echo $_random_member_val['RANK_IMG']; ?><br /><?php } ?>
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_RND_JOIN'])) ? $this->_rootref['L_RND_JOIN'] : ((isset($user->lang['RND_JOIN'])) ? $user->lang['RND_JOIN'] : '{ RND_JOIN }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo $_random_member_val['JOINED']; ?></span><br />
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_RND_POSTS'])) ? $this->_rootref['L_RND_POSTS'] : ((isset($user->lang['RND_POSTS'])) ? $user->lang['RND_POSTS'] : '{ RND_POSTS }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo $_random_member_val['USER_POSTS']; ?></span><br />
			<?php if ($_random_member_val['USER_OCC']) {  ?>
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_RND_OCC'])) ? $this->_rootref['L_RND_OCC'] : ((isset($user->lang['RND_OCC'])) ? $user->lang['RND_OCC'] : '{ RND_OCC }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo $_random_member_val['USER_OCC']; ?></span><br />
			<?php } if ($_random_member_val['USER_FROM']) {  ?>
			<span style="float:left;"><?php echo ((isset($this->_rootref['L_RND_FROM'])) ? $this->_rootref['L_RND_FROM'] : ((isset($user->lang['RND_FROM'])) ? $user->lang['RND_FROM'] : '{ RND_FROM }')); ?>:</span><span style="float:right;padding-right:10px;"><?php echo $_random_member_val['USER_FROM']; ?></span><br />
			<?php } if ($_random_member_val['U_WWW']) {  ?>
			<span style="float:left;"><a href="<?php echo $_random_member_val['U_WWW']; ?>" title="<?php echo $_random_member_val['U_WWW']; ?>" target="_blank"><?php echo ((isset($this->_rootref['L_RND_WWW'])) ? $this->_rootref['L_RND_WWW'] : ((isset($user->lang['RND_WWW'])) ? $user->lang['RND_WWW'] : '{ RND_WWW }')); ?></a></span><span style="float:right;"></span><br />
			<?php } }} ?>	
		</td>
	</tr>
</table>
<br />