<?php if (!defined('IN_PHPBB')) exit; ?><!-- $Id: paypal.html,v 1.1 2008/02/09 08:18:17 angelside Exp $ //-->

<!-- reference and all paypal codes
https://www.paypal.com/cgi-bin/webscr?cmd=p/pdn/howto_checkout-outside 
https://www.paypal.com/cgi-bin/webscr?cmd=p/sell/mc/mc_wa-outside
//-->

<form action="https://www.paypal.com/cgi-bin/webscr" target="_blank" method="post">
<center>
	<input type="hidden" name="cmd" value="_xclick" />
	<input type="hidden" name="business" value="<?php echo (isset($this->_rootref['PAY_ACC'])) ? $this->_rootref['PAY_ACC'] : ''; ?>" />
	<input type="hidden" name="item_name" value="<?php echo ((isset($this->_rootref['L_PAY_ITEM'])) ? $this->_rootref['L_PAY_ITEM'] : ((isset($user->lang['PAY_ITEM'])) ? $user->lang['PAY_ITEM'] : '{ PAY_ITEM }')); ?>" />
	<input type="hidden" name="no_note" value="1" />
	<input type="hidden" name="currency_code" value="USD" />
	<input type="hidden" name="no_shipping" value="2" />
	<input type="hidden" name="bn" value="PP-DonationsBF" />
	<input type="hidden" name="tax" value="0" />
	$
<!--
ISO 8859-1 character set overview
http://www.htmlhelp.com/reference/charset/
//-->	
	<select name="amount">
		<option value="1.00">1.00</option>
		<option value="2.00">2.00</option>
		<option value="3.00">3.00</option>
		<option value="4.00">4.00</option>
		<option value="5.00">5.00</option>
		<option value="10.00">10.00</option>
		<option value="20.00">20.00</option>
		<option value="25.00">25.00</option>
		<option value="50.00">50.00</option>
		<option value="100.00">100.00</option>
	</select>
	<br />
	<input type="image" src="portal/images/paypal.gif" style="border:0px; background-color:transparent; padding-top:6px" />
</center>
</form>