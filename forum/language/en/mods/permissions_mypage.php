<?php
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang['permission_cat']['mypage']   = 'My Page';

$lang = array_merge($lang, array(
	'acl_u_mp_view'		=> array('lang' => 'Can view mypage', 'cat' => 'mypage'),
	'acl_u_mp_ratings'	=> array('lang' => 'Can rate mypages', 'cat' => 'mypage'),
	'acl_u_mp_own_ratings'	=> array('lang' => 'Can allow ratings on own pages', 'cat' => 'mypage'),
	'acl_u_mp_comments'	=> array('lang' => 'Can comment on mypage', 'cat' => 'mypage'),
	'acl_u_mp_own_comments'	=> array('lang' => 'Can allow comments on own pages', 'cat' => 'mypage'),
	'acl_u_mp_use_html'	=> array('lang' => 'Can use html in mypage', 'cat' => 'mypage'),
	'acl_u_mp_allowed_1'	=> array('lang' => 'Allowed mypages (A)<br /><em>This is the amount set in the ACP for the 1st value</em>', 'cat' => 'mypage'),
	'acl_u_mp_allowed_2'	=> array('lang' => 'Allowed mypages (B)<br /><em>This is the amount set in the ACP for the 2nd value</em>', 'cat' => 'mypage'),
	'acl_u_mp_allowed_3'	=> array('lang' => 'Allowed mypages (C)<br /><em>This is the amount set in the ACP for the 3rd value</em>', 'cat' => 'mypage'),
	'acl_u_mp_uploads_1'	=> array('lang' => 'Allowed mypage uploads (A)<br /><em>This is the amount set in the ACP for the 1st value</em>', 'cat' => 'mypage'),
	'acl_u_mp_uploads_2'	=> array('lang' => 'Allowed mypage uploads (B)<br /><em>This is the amount set in the ACP for the 2nd value</em>', 'cat' => 'mypage'),
	'acl_u_mp_uploads_3'	=> array('lang' => 'Allowed mypage uploads (C)<br /><em>This is the amount set in the ACP for the 3rd value</em>', 'cat' => 'mypage'),
	'acl_m_mp_edit'		=> array('lang' => 'Can moderate mypage', 'cat' => 'misc'),
	'acl_a_mp_change'	=> array('lang' => 'Can admin mypage', 'cat' => 'misc'),
));

?>