<?php

/**
*
* @package - NV recent topics
* @version $Id: acp_recenttopics.php 163 2008-09-09 02:32:58Z nickvergessen $
* @copyright (c) nickvergessen ( http://mods.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_recenttopics_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_recenttopics',
			'title'		=> 'RECENT_TOPICS_MOD',
			'version'	=> '1.0.1',
			'modes'		=> array(
				'adjust_recenttopics'	=> array('title' => 'RT_CONFIG', 'auth' => 'acl_a_board', 'cat' => array('RECENT_TOPICS_MOD')),
			),
		);
	}
}

?>