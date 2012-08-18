<?php if (!defined('IN_PHPBB')) exit; ?><form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post">
<table class="tablebg" cellspacing="1" width="100%">
	<tr>
		<th><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></th>
	</tr>
	<tr class="row1">
		<td>

			<span class="genmed"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</span><br />
			<input type="text" tabindex="1" name="username" id="username" size="20" maxlength="40" value="" class="inputbox autowidth" /><br /><br /> 
			<span class="genmed"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</span><br />
			<input type="password" tabindex="2" id="password" name="password" size="20" maxlength="25" class="inputbox autowidth" /> 
		
			<?php if ($this->_rootref['S_DISPLAY_FULL_LOGIN']) {  ?>			
			<br /><br />
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>
			<input type="checkbox" class="radio" name="autologin" tabindex="3" /> <span class="gensmall"><?php echo ((isset($this->_rootref['L_UM_LOG_ME_IN'])) ? $this->_rootref['L_UM_LOG_ME_IN'] : ((isset($user->lang['UM_LOG_ME_IN'])) ? $user->lang['UM_LOG_ME_IN'] : '{ UM_LOG_ME_IN }')); ?></span><br />
			<?php } ?>
			<input type="checkbox" class="radio" name="viewonline" tabindex="4" /> <span class="gensmall"><?php echo ((isset($this->_rootref['L_UM_HIDE_ME'])) ? $this->_rootref['L_UM_HIDE_ME'] : ((isset($user->lang['UM_HIDE_ME'])) ? $user->lang['UM_HIDE_ME'] : '{ UM_HIDE_ME }')); ?></span><br />
			<?php } ?>		

			<br />
			<input type="hidden" name="redirect" value="<?php echo (isset($this->_rootref['U_PORTAL'])) ? $this->_rootref['U_PORTAL'] : ''; ?>" />
			<input type="submit" name="login" tabindex="6" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="button1" />
			
		</td>
	</tr>
</table>
<br />