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
* @package acp
*/
class acp_recenttopics
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_recenttopics';
		$this->page_title = $user->lang['RECENT_TOPICS_MOD'];
		add_form_key('acp_recenttopics');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_recenttopics'))
			{
				trigger_error('FORM_INVALID');
			}
			set_config('rt_anti_topics', request_var('rt_anti_topics', 0));
			set_config('rt_number', request_var('rt_number', 5));
			set_config('rt_page_number', request_var('rt_page_number', 0));
			set_config('rt_index', request_var('rt_index', 0));
			#set_config('rt_muster', request_var('rt_muster', 0));
			trigger_error($user->lang['RT_SAVED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'RT_VERSION'			=> 'v' . $config['rt_mod_version'],
			'RT_ANTI_TOPICS'		=> $config['rt_anti_topics'],
			'RT_NUMBER'				=> $config['rt_number'],
			'RT_PAGE_NUMBER'		=> $config['rt_page_number'],
			'RT_INDEX'				=> $config['rt_index'],
			#'RT_MUSTER'				=> $config['rt_muster'],
			'U_ACTION'				=> $this->u_action,
		));
	}
}

?>