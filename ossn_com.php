<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   BigFarm
 * @author    SlugMonkey <slugmonkey@theslugmonkey.com>
 * @copyright 2022 TheSlugMonkey
 * @license   General Public Licence V3
 * @link      https://www.gnu.org/licenses/gpl-3.0.en.html
 */
define('__BigFarm__', ossn_route()->com . 'BigFarm/');

function bigfarm_init() {
	ossn_register_page('bigfarm', 'bigfarm_pages');
	  if (ossn_isLoggedin()) {       
		ossn_extend_view('css/ossn.default', 'css/bigfarm');
		
				ossn_register_sections_menu('newsfeed', array(

						'name' => 'bigfarm',

						'text' => ossn_print('com:ossn:bigfarm'),

						'url' => ossn_site_url('bigfarm/bigfarm'),

						'section' => 'bigfarm',

				));
					
    }
}
function bigfarm_pages($pages) {

if(!ossn_isLoggedin()) {

				ossn_error_page();
		}


		switch($pages[0]) {

				case 'bigfarm':

						$guid                = $pages[1];

						$title               = ossn_print('com:ossn:bigfarm');
						
						$contents['content'] = ossn_plugin_view('pages/bigfarm', array(

								'guid' => $guid

						));

						$content             = ossn_set_page_layout('newsfeed', $contents);

						echo ossn_view_page($title, $content);

						break;
						
				

	}
}
ossn_register_callback('ossn', 'init', 'bigfarm_init');
