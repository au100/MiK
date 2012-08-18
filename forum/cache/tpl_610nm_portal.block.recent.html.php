<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th colspan="3"><?php echo ((isset($this->_rootref['L_RECENT_TOPIC'])) ? $this->_rootref['L_RECENT_TOPIC'] : ((isset($user->lang['RECENT_TOPIC'])) ? $user->lang['RECENT_TOPIC'] : '{ RECENT_TOPIC }')); ?></th>
	</tr>
	<tr>
		<td class="row1"><strong><?php echo ((isset($this->_rootref['L_RECENT_ANN'])) ? $this->_rootref['L_RECENT_ANN'] : ((isset($user->lang['RECENT_ANN'])) ? $user->lang['RECENT_ANN'] : '{ RECENT_ANN }')); ?></strong></td>
		<td class="row1"><strong><?php echo ((isset($this->_rootref['L_RECENT_HOT_TOPIC'])) ? $this->_rootref['L_RECENT_HOT_TOPIC'] : ((isset($user->lang['RECENT_HOT_TOPIC'])) ? $user->lang['RECENT_HOT_TOPIC'] : '{ RECENT_HOT_TOPIC }')); ?></strong></td>
		<td class="row1"><strong><?php echo ((isset($this->_rootref['L_RECENT_TOPIC'])) ? $this->_rootref['L_RECENT_TOPIC'] : ((isset($user->lang['RECENT_TOPIC'])) ? $user->lang['RECENT_TOPIC'] : '{ RECENT_TOPIC }')); ?></strong></td>
	</tr>
	<tr>
		<td class="row1" width="33%" valign="top">
			<?php $_latest_announcements_count = (isset($this->_tpldata['latest_announcements'])) ? sizeof($this->_tpldata['latest_announcements']) : 0;if ($_latest_announcements_count) {for ($_latest_announcements_i = 0; $_latest_announcements_i < $_latest_announcements_count; ++$_latest_announcements_i){$_latest_announcements_val = &$this->_tpldata['latest_announcements'][$_latest_announcements_i]; ?>
						<a href="<?php echo $_latest_announcements_val['U_VIEW_TOPIC']; ?>" title="<?php echo $_latest_announcements_val['FULL_TITLE']; ?>"><?php echo $_latest_announcements_val['TITLE']; ?></a><br />
			<?php }} ?>
		</td>
		<td class="row1" width="33%" valign="top">
			<?php $_latest_hot_topics_count = (isset($this->_tpldata['latest_hot_topics'])) ? sizeof($this->_tpldata['latest_hot_topics']) : 0;if ($_latest_hot_topics_count) {for ($_latest_hot_topics_i = 0; $_latest_hot_topics_i < $_latest_hot_topics_count; ++$_latest_hot_topics_i){$_latest_hot_topics_val = &$this->_tpldata['latest_hot_topics'][$_latest_hot_topics_i]; ?>
				<a href="<?php echo $_latest_hot_topics_val['U_VIEW_TOPIC']; ?>" title="<?php echo $_latest_hot_topics_val['FULL_TITLE']; ?>"><?php echo $_latest_hot_topics_val['TITLE']; ?></a><br />
			<?php }} ?>
		</td>
		<td class="row1" width="33%" valign="top">
			<?php $_latest_topics_count = (isset($this->_tpldata['latest_topics'])) ? sizeof($this->_tpldata['latest_topics']) : 0;if ($_latest_topics_count) {for ($_latest_topics_i = 0; $_latest_topics_i < $_latest_topics_count; ++$_latest_topics_i){$_latest_topics_val = &$this->_tpldata['latest_topics'][$_latest_topics_i]; ?>
				<a href="<?php echo $_latest_topics_val['U_VIEW_TOPIC']; ?>" title="<?php echo $_latest_topics_val['FULL_TITLE']; ?>"><?php echo $_latest_topics_val['TITLE']; ?></a><br />
			<?php }} ?>
		</td>
	</tr>
</table>
<br />