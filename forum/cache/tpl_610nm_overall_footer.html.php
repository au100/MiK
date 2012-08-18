<?php if (!defined('IN_PHPBB')) exit; ?></div>



<div id="wrapfooter">
	<span class="gensmall">
	<?php if ($this->_rootref['U_MCP']) {  ?>[ <a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a> ]<br /><?php } if ($this->_rootref['U_ACP']) {  ?>[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]<?php } ?>

	<br /><br />
	</span><br /><br />
</div>

</div></div></div>
</div>

<?php if ($this->_rootref['S_REIMG']) {  ?>

	<script type="text/javascript">
		if (window.reimg_version)
		{
			reimg_loading("<?php echo (isset($this->_rootref['REIMG_LOADING_IMG_SRC'])) ? $this->_rootref['REIMG_LOADING_IMG_SRC'] : ''; ?>");
		}
	</script>
<?php } ?>


</body>
</html>