<?php
if ( ! defined( 'ABSPATH' ) ) die;

class ss_remove_bcache {
	public function process( $ip, &$stats = array(), &$options = array(), &$post = array() ) {

		extract( $options );

		$Updated	= false;

		while ( count( $stats['badips'] ) > $ss_sp_cache ){
			array_shift( $stats['badips'] );
			$Updated = true;
		}


		if( isset($badips[$ip]) ){
			unset($stats['badips'][$ip]);
			$Updated = true;
		}

		if($Updated)	ss_set_stats( $stats );

		return $stats['badips']; // return the array so AJAX can show it
	}
}

