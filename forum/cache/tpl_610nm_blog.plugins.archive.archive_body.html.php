<?php if (!defined('IN_PHPBB')) exit; ?><script type="text/javascript">
// <![CDATA[
	function toggle_month(month)
	{
		thisMonth = document.getElementById('month_' + month);
		thisImg = document.getElementById('month_image_' + month);

		if (thisMonth && thisImg)
		{
			if (thisMonth.style.display == "none")
			{
				thisMonth.style.display = "block";
				thisImg.src = "<?php echo (isset($this->_rootref['IMG_MINUS'])) ? $this->_rootref['IMG_MINUS'] : ''; ?>";
				thisImg.alt = '-';
			}
			else
			{
				thisMonth.style.display = "none";
				thisImg.src = "<?php echo (isset($this->_rootref['IMG_PLUS'])) ? $this->_rootref['IMG_PLUS'] : ''; ?>";
				thisImg.alt = '+';
			}
		}
	}
// ]]>
</script>

<?php if ($this->_rootref['S_ARCHIVES']) {  ?>

	<table class="tablebg" width="100%" cellspacing="1">
		<tr class="cat" align="center"><td><strong><?php echo ((isset($this->_rootref['L_ARCHIVES'])) ? $this->_rootref['L_ARCHIVES'] : ((isset($user->lang['ARCHIVES'])) ? $user->lang['ARCHIVES'] : '{ ARCHIVES }')); ?></strong></td></tr>
		<tr class="row1">
			<td style="padding: 10px;">
				<?php $_archiverow_count = (isset($this->_tpldata['archiverow'])) ? sizeof($this->_tpldata['archiverow']) : 0;if ($_archiverow_count) {for ($_archiverow_i = 0; $_archiverow_i < $_archiverow_count; ++$_archiverow_i){$_archiverow_val = &$this->_tpldata['archiverow'][$_archiverow_i]; ?>

					<span onclick="toggle_month(<?php echo $_archiverow_val['S_ROW_COUNT']; ?>);" style="cursor: pointer;"><strong><img id="month_image_<?php echo $_archiverow_val['S_ROW_COUNT']; ?>" src="<?php if ($_archiverow_val['S_ROW_COUNT'] > 0) {  echo (isset($this->_rootref['IMG_PLUS'])) ? $this->_rootref['IMG_PLUS'] : ''; ?>"  alt="+"<?php } else { echo (isset($this->_rootref['IMG_MINUS'])) ? $this->_rootref['IMG_MINUS'] : ''; ?>"  alt="-"<?php } ?> /> <?php echo $_archiverow_val['MONTH']; ?> <?php echo $_archiverow_val['YEAR']; ?></strong></span>
					<div id="month_<?php echo $_archiverow_val['S_ROW_COUNT']; ?>" <?php if ($_archiverow_val['S_ROW_COUNT'] > 0) {  ?>style="display: none;"<?php } ?>>
						<?php $_monthrow_count = (isset($_archiverow_val['monthrow'])) ? sizeof($_archiverow_val['monthrow']) : 0;if ($_monthrow_count) {for ($_monthrow_i = 0; $_monthrow_i < $_monthrow_count; ++$_monthrow_i){$_monthrow_val = &$_archiverow_val['monthrow'][$_monthrow_i]; ?>

							<dl class="panel">
								<dt><a href="<?php echo $_monthrow_val['U_VIEW']; ?>"><?php echo $_monthrow_val['TITLE']; ?></a></dt>
								<dd>&nbsp; &nbsp;<?php echo $_monthrow_val['DATE']; ?></dd>
							</dl>
						<?php }} ?>

					</div>
					<br />
				<?php }} ?>

			</td>
		</tr>
	</table>
	<br />
<?php } ?>