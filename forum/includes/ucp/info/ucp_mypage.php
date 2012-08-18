<?php
/**
*
* @package ucp
* @version $Id: ucp_mypage.php,v 0.1.0 2008/02/02$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class ucp_mypage_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_mypage',
			'title'		=> 'UCP_MYPAGE',
			'version'	=> '0.1.0',
			'modes'		=> array(
				'main'			=> array('title' => 'UCP_MYPAGE', 'auth' => 'acl_u_mp_create', 'cat' => array()),
				'overview'		=> array('title' => 'UCP_MP_MAIN', 'auth' => 'acl_u_mp_create', 'cat' => array('UCP_MYPAGE')),
				'add'			=> array('title' => 'UCP_MP_ADD', 'auth' => 'acl_u_mp_create', 'cat' => array('UCP_MYPAGE')),
				'uploads'		=> array('title' => 'UCP_MP_UPLOADS', 'auth' => 'acl_u_mp_uploads', 'cat' => array('UCP_MYPAGE')),
				'edit'			=> array('title' => 'UCP_MP_EDIT', 'auth' => 'acl_u_mp_create', 'cat' => array('UCP_MYPAGE')),
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
