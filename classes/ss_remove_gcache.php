<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ss_remove_gcache {
	public function process( $ip, &$stats = array(), &$options = array(), &$post = array() ) {

		extract( $options );

		$Updated	= false;

		while ( count( $stats['goodips'] ) > $ss_sp_good ) {
			array_shift( $stats['goodips'] );
			$Updated = true;
		}

		if( isset($goodips[$ip]) ){
			unset($stats['goodips'][$ip]);
			$Updated = true;
		}

		ss_set_stats( $stats );

		return $goodips; // return the array so AJAX can show it
	}
}

?>