<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_SPECIAL_GROUP']) {  ?>

	<fieldset>
	<legend><?php echo ((isset($this->_rootref['L_AUTO_GROUP'])) ? $this->_rootref['L_AUTO_GROUP'] : ((isset($user->lang['AUTO_GROUP'])) ? $user->lang['AUTO_GROUP'] : '{ AUTO_GROUP }')); ?></legend>
	<dl>
		<dt><label for="min_group_days"><?php echo ((isset($this->_rootref['L_GROUP_MIN_DAYS'])) ? $this->_rootref['L_GROUP_MIN_DAYS'] : ((isset($user->lang['GROUP_MIN_DAYS'])) ? $user->lang['GROUP_MIN_DAYS'] : '{ GROUP_MIN_DAYS }')); ?></label></dt>
		<dd><input name="min_group_days" size="40" value="<?php echo (isset($this->_rootref['MIN_GROUP_DAYS'])) ? $this->_rootref['MIN_GROUP_DAYS'] : ''; ?>" /></dd>
	</dl>
	<dl>
		<dt><label for="max_group_days"><?php echo ((isset($this->_rootref['L_GROUP_MAX_DAYS'])) ? $this->_rootref['L_GROUP_MAX_DAYS'] : ((isset($user->lang['GROUP_MAX_DAYS'])) ? $user->lang['GROUP_MAX_DAYS'] : '{ GROUP_MAX_DAYS }')); ?></label></dt>
		<dd><input name="max_group_days" size="40" value="<?php echo (isset($this->_rootref['MAX_GROUP_DAYS'])) ? $this->_rootref['MAX_GROUP_DAYS'] : ''; ?>" /></dd>
	</dl>
	<dl>
		<dt><label for="min_group_posts"><?php echo ((isset($this->_rootref['L_GROUP_MIN_POSTS'])) ? $this->_rootref['L_GROUP_MIN_POSTS'] : ((isset($user->lang['GROUP_MIN_POSTS'])) ? $user->lang['GROUP_MIN_POSTS'] : '{ GROUP_MIN_POSTS }')); ?></label></dt>
		<dd><input name="min_group_posts" size="40" value="<?php echo (isset($this->_rootref['MIN_GROUP_POSTS'])) ? $this->_rootref['MIN_GROUP_POSTS'] : ''; ?>" /></dd>
	</dl>
	<dl>
		<dt><label for="max_group_posts"><?php echo ((isset($this->_rootref['L_GROUP_MAX_POSTS'])) ? $this->_rootref['L_GROUP_MAX_POSTS'] : ((isset($user->lang['GROUP_MAX_POSTS'])) ? $user->lang['GROUP_MAX_POSTS'] : '{ GROUP_MAX_POSTS }')); ?></label></dt>
		<dd><input name="max_group_posts" size="40" value="<?php echo (isset($this->_rootref['MAX_GROUP_POSTS'])) ? $this->_rootref['MAX_GROUP_POSTS'] : ''; ?>" /></dd>
	</dl>	
	<dl>
		<dt><label for="min_group_warnings"><?php echo ((isset($this->_rootref['L_GROUP_MIN_WARNINGS'])) ? $this->_rootref['L_GROUP_MIN_WARNINGS'] : ((isset($user->lang['GROUP_MIN_WARNINGS'])) ? $user->lang['GROUP_MIN_WARNINGS'] : '{ GROUP_MIN_WARNINGS }')); ?></label></dt>
		<dd><input name="min_group_warnings" size="40" value="<?php echo (isset($this->_rootref['MIN_GROUP_WARNINGS'])) ? $this->_rootref['MIN_GROUP_WARNINGS'] : ''; ?>" /></dd>
	</dl>
	<dl>
		<dt><label for="max_group_warnings"><?php echo ((isset($this->_rootref['L_GROUP_MAX_WARNINGS'])) ? $this->_rootref['L_GROUP_MAX_WARNINGS'] : ((isset($user->lang['GROUP_MAX_WARNINGS'])) ? $user->lang['GROUP_MAX_WARNINGS'] : '{ GROUP_MAX_WARNINGS }')); ?></label></dt>
		<dd><input name="max_group_warnings" size="40" value="<?php echo (isset($this->_rootref['MAX_GROUP_WARNINGS'])) ? $this->_rootref['MAX_GROUP_WARNINGS'] : ''; ?>" /></dd>
	</dl>
	<dl>
		<dt><label for="group_auto_default"><?php echo ((isset($this->_rootref['L_DEFAULT_AUTO_GROUP'])) ? $this->_rootref['L_DEFAULT_AUTO_GROUP'] : ((isset($user->lang['DEFAULT_AUTO_GROUP'])) ? $user->lang['DEFAULT_AUTO_GROUP'] : '{ DEFAULT_AUTO_GROUP }')); ?> </label><br /><span><?php echo ((isset($this->_rootref['L_DEFAULT_AUTO_GROUP_EXPLAIN'])) ? $this->_rootref['L_DEFAULT_AUTO_GROUP_EXPLAIN'] : ((isset($user->lang['DEFAULT_AUTO_GROUP_EXPLAIN'])) ? $user->lang['DEFAULT_AUTO_GROUP_EXPLAIN'] : '{ DEFAULT_AUTO_GROUP_EXPLAIN }')); ?></span></dt>
		<dd><input type="checkbox" name="group_auto_default" <?php echo (isset($this->_rootref['S_GROUP_AUTO_DEFAULT'])) ? $this->_rootref['S_GROUP_AUTO_DEFAULT'] : ''; ?> /></dd>
	</dl>
	</fieldset>
	<?php } ?>