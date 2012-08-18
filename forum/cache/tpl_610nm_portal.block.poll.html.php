<?php if (!defined('IN_PHPBB')) exit; ?>O<table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><?php echo ((isset($this->_rootref['L_LATEST_POLLS'])) ? $this->_rootref['L_LATEST_POLLS'] : ((isset($user->lang['LATEST_POLLS'])) ? $user->lang['LATEST_POLLS'] : '{ LATEST_POLLS }')); ?></th>
	</tr>
	<tr class="row1" align="center">
		<td>
		<?php if ($this->_rootref['S_HAS_POLL']) {  $_poll_count = (isset($this->_tpldata['poll'])) ? sizeof($this->_tpldata['poll']) : 0;if ($_poll_count) {for ($_poll_i = 0; $_poll_i < $_poll_count; ++$_poll_i){$_poll_val = &$this->_tpldata['poll'][$_poll_i]; if ($_poll_val['S_CAN_VOTE']) {  ?><form method="post" action="<?php echo $_poll_val['S_POLL_ACTION']; ?>"><?php } ?>

			<table class="tablebg" cellspacing="1" cellpadding="4" border="0" align="center" width="100%">
				<tr>
					<td class="cat">
						<span class="gen"><b><?php echo $_poll_val['POLL_QUESTION']; ?></b></span><br /><span class="gensmall"><?php echo $_poll_val['L_POLL_LENGTH']; ?></span>
					</td>
				</tr>
				<?php if ($_poll_val['S_POLL_HAS_OPTIONS']) {  ?>
				<tr>	
					<td class="row1" align="center">
						<table cellspacing="0" cellpadding="2" border="0">
						<?php $_poll_option_count = (isset($_poll_val['poll_option'])) ? sizeof($_poll_val['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$_poll_val['poll_option'][$_poll_option_i]; ?>
							<tr>
							<?php if ($_poll_val['S_CAN_VOTE']) {  ?>
								<td>
									<?php if ($_poll_val['S_IS_MULTI_CHOICE']) {  ?>
										<input type="checkbox" class="radio" name="vote_id[]" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
									<?php } else { ?>
										<input type="radio" class="radio" name="vote_id[]" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
									<?php } ?>
								</td>
							<?php } ?>
								<td><span class="gen"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></span></td>
								<?php if ($_poll_val['S_DISPLAY_RESULTS']) {  ?>
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
				<?php } else { ?>
				<tr>
					<td class="row1" align="center">
						<?php echo ((isset($this->_rootref['L_NO_OPTIONS'])) ? $this->_rootref['L_NO_OPTIONS'] : ((isset($user->lang['NO_OPTIONS'])) ? $user->lang['NO_OPTIONS'] : '{ NO_OPTIONS }')); ?>
					</td>
				</tr>
				<?php } if ($_poll_val['S_CAN_VOTE']) {  ?>
				<tr>
					<td class="row1" align="center"><span class="gensmall"><?php echo $_poll_val['L_MAX_VOTES']; ?></span><br /><br /><input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="btnlite" /></td>
				</tr>
			<?php } if ($_poll_val['S_DISPLAY_RESULTS']) {  ?>
				<tr>
					<td class="row1" colspan="4" align="center"><span class="gensmall"><b><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo $_poll_val['TOTAL_VOTES']; ?></b> <b><a href="<?php echo $_poll_val['U_VIEW_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_TOPIC'])) ? $this->_rootref['L_VIEW_TOPIC'] : ((isset($user->lang['VIEW_TOPIC'])) ? $user->lang['VIEW_TOPIC'] : '{ VIEW_TOPIC }')); ?></a></b></span></td>
				</tr>
			<?php } else { ?>
				<tr>
					<td class="row1" align="center"><span class="gensmall"><b><a href="<?php echo $_poll_val['U_VIEW_RESULTS']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a></b> <b><a href="<?php echo $_poll_val['U_VIEW_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_TOPIC'])) ? $this->_rootref['L_VIEW_TOPIC'] : ((isset($user->lang['VIEW_TOPIC'])) ? $user->lang['VIEW_TOPIC'] : '{ VIEW_TOPIC }')); ?></a></b></span></td>
				</tr>
			<?php } ?>
				</table>
				<?php if ($_poll_val['S_CAN_VOTE']) {  echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>
				
				</form><?php } }} } else { ?>
			<table class="tablebg" cellspacing="1" width="100%">
				<tr>
					<td class="row1" class="cat">
						<strong><?php echo ((isset($this->_rootref['L_NO_POLL'])) ? $this->_rootref['L_NO_POLL'] : ((isset($user->lang['NO_POLL'])) ? $user->lang['NO_POLL'] : '{ NO_POLL }')); ?></strong>
					</td>
				</tr>
			</table>
		<?php } ?>
		</td>
	</tr>
</table>
<br />