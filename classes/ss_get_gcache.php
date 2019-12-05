<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ss_get_gcache {
	public function process( $ip, &$stats = array(), &$options = array(), &$post = array() ) {
// gets the innerhtml for cache - same as get gcache except for names
		$cachedel  = 'delete_gcache';
		$container = 'goodips';
		$ajaxurl   = admin_url( 'admin-ajax.php' );

		// img def
		$img_tpl	= '<img src="%s" height="16px" alt="%s" />';	// tpl for all img in line
		$trash_img	= sprintf($img_tpl,SS_PLUGIN_URL.'images/trash.png','to trash');
		$whois_img	= sprintf($img_tpl,SS_PLUGIN_URL.'images/whois.png','to whois');
		$deny_img	= sprintf($img_tpl,SS_PLUGIN_URL.'images/tdown.png','to deny');
		$allow_img	= sprintf($img_tpl,SS_PLUGIN_URL.'images/tup.png',  'to allow');

		$whois_url = '<a title="'.__('Look Up WHOIS',SFS_TXTDOMAIN).'" target="_stopspam"'
				.' href="https://lacnic.net/cgi-bin/lacnic/whois?lg=EN&query=%s">'
				.$whois_img
				.'</a>'."\r\n";

		$show      = '';
		foreach ( $stats['goodips'] as $key => $value ) {
			$show	.= '<div>';
			// delete IP from cache 
			$alt_t	= sprintf(__('Delete %s from Cache',SFS_TXTDOMAIN),$key);
			$show	.= sprintf(' <a href="" onclick="%s" title="%s" alt="%s">%s</a>'
			           	, "sfs_ajax_process('$key','$container','$cachedel','$ajaxurl');return false;"	//onClick
					, $alt_t
					, $alt_t
					, $trash_img
					);
                        $show	.= '&nbsp;';

			// add IP to Deny List
			$alt_t	= sprintf(__('Add %s to Deny List',SFS_TXTDOMAIN),$key);
			$show	.= sprintf(' <a href="" onclick="%s" title="%s" alt="%s">%s</a>'
			           	, "sfs_ajax_process('$key','$container','add_black','$ajaxurl');return false;"	//onClick
					, $alt_t
					, $alt_t
					, $deny_img
					);
                        $show	.= '&nbsp;';

			// add IP to Allow List
			$alt_t	= sprintf(__('Add %s to Allow List',SFS_TXTDOMAIN),$key);
			$show	.= sprintf(' <a href="" onclick="%s" title="%s" alt="%s">%s</a>'
			           	, "sfs_ajax_process('$key','$container','add_white','$ajaxurl');return false;"	//onClick
					, $alt_t
					, $alt_t
					, $allow_img
					);
                        $show	.= '&nbsp;';

			// whois
                        $show	.= sprintf($whois_url,$key);
                        $show	.= '&nbsp;';


			// data
			$show	.= " <small>$value</small>&nbsp;";

			// get info about IP from sfs
			$alt_t	= sprintf(__('Search %s in StopForumSpam.com',SFS_TXTDOMAIN),$key);
			$show	.= " <a href=\"https://www.stopforumspam.com/search?q=$key\" title=\"$alt_t\""
					." target=\"_stopspam\">$key</a>";
			$show	.= '</div>';
		}

		return $show;
	}
}

?>