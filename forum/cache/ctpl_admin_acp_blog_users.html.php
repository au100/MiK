<?php if (!defined('IN_PHPBB')) exit; ?><fieldset>
		<legend><?php echo ((isset($this->_rootref['L_BLOG'])) ? $this->_rootref['L_BLOG'] : ((isset($user->lang['BLOG'])) ? $user->lang['BLOG'] : '{ BLOG }')); ?></legend>
		<dl>
			<dt><label for="blog_title"><?php echo ((isset($this->_rootref['L_BLOG_TITLE'])) ? $this->_rootref['L_BLOG_TITLE'] : ((isset($user->lang['BLOG_TITLE'])) ? $user->lang['BLOG_TITLE'] : '{ BLOG_TITLE }')); ?>:</label></dt>
			<dd><input type="text" name="blog_title" id="blog_title" value="<?php echo (isset($this->_rootref['BLOG_TITLE'])) ? $this->_rootref['BLOG_TITLE'] : ''; ?>" /></dd>
		</dl>
		<dl>
			<dt><label for="blog_description"><?php echo ((isset($this->_rootref['L_BLOG_DESCRIPTION'])) ? $this->_rootref['L_BLOG_DESCRIPTION'] : ((isset($user->lang['BLOG_DESCRIPTION'])) ? $user->lang['BLOG_DESCRIPTION'] : '{ BLOG_DESCRIPTION }')); ?>:</label></dt>
			<dd><textarea name="blog_description" id="blog_description" rows="3" cols="30"><?php echo (isset($this->_rootref['BLOG_DESCRIPTION'])) ? $this->_rootref['BLOG_DESCRIPTION'] : ''; ?></textarea></dd>
		</dl>
		<dl>
			<dt><label for="blog_style"><?php echo ((isset($this->_rootref['L_BLOG_STYLE'])) ? $this->_rootref['L_BLOG_STYLE'] : ((isset($user->lang['BLOG_STYLE'])) ? $user->lang['BLOG_STYLE'] : '{ BLOG_STYLE }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_BLOG_STYLE_EXPLAIN'])) ? $this->_rootref['L_BLOG_STYLE_EXPLAIN'] : ((isset($user->lang['BLOG_STYLE_EXPLAIN'])) ? $user->lang['BLOG_STYLE_EXPLAIN'] : '{ BLOG_STYLE_EXPLAIN }')); ?></span></dt>
			<dd>
				<label for="blog_style">
					<select name="blog_style" onchange="document.getElementById('style_demo').src = this.options[selectedIndex].id;">
						<?php $_blog_styles_count = (isset($this->_tpldata['blog_styles'])) ? sizeof($this->_tpldata['blog_styles']) : 0;if ($_blog_styles_count) {for ($_blog_styles_i = 0; $_blog_styles_i < $_blog_styles_count; ++$_blog_styles_i){$_blog_styles_val = &$this->_tpldata['blog_styles'][$_blog_styles_i]; ?>

							<option value="<?php echo $_blog_styles_val['VALUE']; ?>"<?php if ($_blog_styles_val['SELECTED']) {  ?> selected="selected"<?php } ?> id="<?php echo $_blog_styles_val['DEMO']; ?>">
								<?php echo $_blog_styles_val['NAME']; if ($_blog_styles_val['BLOG_CSS']) {  ?> *<?php } ?>

							</option>
						<?php }} ?>

					</select>
				</label>
			</dd>
			<dd>
				<img id="style_demo" src="<?php echo (isset($this->_rootref['DEFAULT_DEMO'])) ? $this->_rootref['DEFAULT_DEMO'] : ''; ?>" />
			</dd>
		</dl>
		<dl>
			<dt><label for="blog_css"><?php echo ((isset($this->_rootref['L_BLOG_CSS'])) ? $this->_rootref['L_BLOG_CSS'] : ((isset($user->lang['BLOG_CSS'])) ? $user->lang['BLOG_CSS'] : '{ BLOG_CSS }')); ?>:</label><span><?php echo ((isset($this->_rootref['L_BLOG_CSS_EXPLAIN'])) ? $this->_rootref['L_BLOG_CSS_EXPLAIN'] : ((isset($user->lang['BLOG_CSS_EXPLAIN'])) ? $user->lang['BLOG_CSS_EXPLAIN'] : '{ BLOG_CSS_EXPLAIN }')); ?></span></dt>
			<dd><textarea name="blog_css" id="blog_css" rows="15" cols="76" tabindex="3" class="inputbox"><?php echo (isset($this->_rootref['BLOG_CSS'])) ? $this->_rootref['BLOG_CSS'] : ''; ?></textarea></dd>
		</dl>
	</fieldset>