<?php
/**
*
* @package acp
* @version $Id: nv_recenttopics_version.php 161 2008-09-09 02:21:04Z nickvergessen $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package nv_altt
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class nv_recenttopics_version
{
	function version()
	{
		return array(
			'author'	=> 'nickvergessen',
			'title'		=> 'NV Recent Topics',
			'tag'		=> 'nv_recenttopics',
			'version'	=> '1.0.1',
			'file'		=> array('www.flying-bits.org', 'updatecheck', 'nv_recenttopics.xml'),
		);
	}
}

?>