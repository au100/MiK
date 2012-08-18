<?php
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang['permission_cat']['mypage']   = 'Моя Страница';

$lang = array_merge($lang, array(
	'acl_u_mp_view'		=> array('lang' => 'Можно смотреть Мою Страницу', 'cat' => 'mypage'),
	'acl_u_mp_ratings'	=> array('lang' => 'Можно оценивать Мою Страницу', 'cat' => 'mypage'),
	'acl_u_mp_own_ratings'	=> array('lang' => 'Можно оценивать свои страницы', 'cat' => 'mypage'),
	'acl_u_mp_comments'	=> array('lang' => 'Можно оценивать Мои Страницы', 'cat' => 'mypage'),
	'acl_u_mp_own_comments'	=> array('lang' => 'Можно оценивать свои страницы', 'cat' => 'mypage'),
	'acl_u_mp_use_html'	=> array('lang' => 'Можно использывать html на Моих Страницах', 'cat' => 'mypage'),
	'acl_u_mp_allowed_1'	=> array('lang' => '"Права Моих страниц (A)"<br /><em>Ставится в ACP 1-ое Значение</em>', 'cat' => 'mypage'),
	'acl_u_mp_allowed_2'	=> array('lang' => '"Права Моих страниц (B)"<br /><em>Ставится в ACP 2-ое Значение</em>', 'cat' => 'mypage'),
	'acl_u_mp_allowed_3'	=> array('lang' => '"Права Моих страниц (C)"<br /><em>Ставится в ACP 3-ое Значение</em>', 'cat' => 'mypage'),
	'acl_u_mp_uploads_1'	=> array('lang' => '"Права загрузки Моих Страниц (A)"<br /><em>Ставится в ACP 1-ое Значение</em>', 'cat' => 'mypage'),
	'acl_u_mp_uploads_2'	=> array('lang' => '"Права загрузки Моих Страниц (B)"<br /><em>Ставится в ACP 2-ое Значение</em>', 'cat' => 'mypage'),
	'acl_u_mp_uploads_3'	=> array('lang' => '"Права загрузки Моих Страниц (C)"<br /><em>Ставится в ACP 3-ое Значение</em>', 'cat' => 'mypage'),
	'acl_m_mp_edit'		=> array('lang' => 'Можно модерировать', 'cat' => 'misc'),
	'acl_a_mp_change'	=> array('lang' => 'Можно администрировать', 'cat' => 'misc'),
));

?>