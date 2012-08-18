<?php

class acp_mypage_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_mypage',
			'title'		=> 'ACP_MP_MYPAGE',
			'version'	=> '0.2.0',
			'modes'		=> array(
				'overview'		=> array('title' => 'ACP_MP_MAIN', 'auth' => 'acl_a_mp_change', 'cat' => array('ACP_MP_MYPAGE')),
				'limits'		=> array('title' => 'ACP_MP_LIMITS', 'auth' => 'acl_a_mp_change', 'cat' => array('ACP_MP_MYPAGE')),
				'style'			=> array('title' => 'ACP_MP_STYLE', 'auth' => 'acl_a_mp_change', 'cat' => array('ACP_MP_MYPAGE')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>