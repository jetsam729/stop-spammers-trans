<?php
/* translated: full */

if ( ! defined( 'ABSPATH' ) ) die;
if ( ! current_user_can( 'manage_options' ) ) die( __('Access Denied',SFS_TXTDOMAIN) );

ss_fix_post_vars();
$stats = ss_get_stats();
extract( $stats );
$now     = date( 'Y/m/d H:i:s', time() + ( get_option( 'gmt_offset' ) * 3600 ) );
$options = ss_get_options();
extract( $options );

/*
$badips	= array_merge($badips,['2.2.2.2'=>'2019/12/01 01:00:00'],['3.3.3.3'=>'2019/12/02 01:00:00']);$stats['badips'] = $badips;
$goodips= array_merge($goodips,['4.4.4.4'=>'2019/12/01 01:00:00'],['5.5.5.5'=>'2019/12/01 01:00:00']);$stats['goodips'] = $goodips;
ss_set_stats( $stats );
*/

$nonce = ( array_key_exists( 'ss_stop_spammers_control', $_POST )?$_POST['ss_stop_spammers_control']:'');
$ajaxurl = admin_url( 'admin-ajax.php' );

if ( ! empty( $nonce ) && wp_verify_nonce( $nonce, 'ss_stopspam_update' ) ) {
	if ( array_key_exists( 'update_options', $_POST ) ) {
		if ( array_key_exists( 'ss_sp_cache', $_POST ) ) {
			$ss_sp_cache            = stripslashes( $_POST['ss_sp_cache'] );
			$options['ss_sp_cache'] = $ss_sp_cache;
		}

		if ( array_key_exists( 'ss_sp_good', $_POST ) ) {
			$ss_sp_good            = stripslashes( $_POST['ss_sp_good'] );
			$options['ss_sp_good'] = $ss_sp_good;
		}

		ss_set_options( $options );
	}
}

if ( wp_verify_nonce( $nonce, 'ss_stopspam_update' ) ) {
	if ( array_key_exists( 'ss_stop_clear_cache', $_POST ) ) {

		// clear the cache
		$stats['badips']  = $badips	= [];
		$stats['goodips'] = $goodips	= [];
		ss_set_stats( $stats );
		echo '<div class="notice notice-success"><p>'.__('Cache Cleared',SFS_TXTDOMAIN).'</p></div>';

	}

	$msg = '<div class="notice notice-success"><p>'.__('Options Updated',SFS_TXTDOMAIN).'</p></div>';
}

$nonce = wp_create_nonce( 'ss_stopspam_update' );
?>
<div id="ss-plugin" class="wrap ss-set-alt">
    <h1><?php echo __('Stop Spammers — Cache',SFS_TXTDOMAIN);?></h1>
	<?php if ( ! empty( $msg ) ) {echo "$msg";} ?>
	<p><?php echo __('Whenever a user tries to leave a comment, register, or login, they are recorded in the Good Cache'
		.'<br />if they pass or the Bad Cache if they fail. If a user is blocked from access, they are added to the Bad Cache.'
		.'<br />You can see the caches here. The caches clear themselves over time,'
		.'<br />but if you are getting lots of spam it is a good idea to clear these out manually by pressing the "Clear Cache" button.'
		,SFS_TXTDOMAIN);?>
	</p>
    <form method="post" action="">
        <input type="hidden" name="update_options" value="update"/>
        <input type="hidden" name="ss_stop_spammers_control" value="<?php echo $nonce; ?>"/>
        <fieldset>
		<legend>
		<span style="font-weight:bold;font-size:1.2em;">
			<?php echo __('Bad Cache Size',SFS_TXTDOMAIN);?>
		</span>
		</legend>
		<p>
		<?php echo __('You can change the number of entries to keep in your history and cache.'
			.'<br />The size of these items is an issue and will cause problems with some WordPress installations.'
			.'<br />It is best to keep these small.'
			,SFS_TXTDOMAIN);?>
		</p>
		<?php echo __('Bad IP Cache Size',SFS_TXTDOMAIN);?> :
		<select name="ss_sp_cache">
			<option value="0"  <?php if ($ss_sp_cache == '0')  echo 'selected="true"';?>>0</option>
			<option value="10" <?php if ($ss_sp_cache == '10') echo 'selected="true"';?>>10</option>
			<option value="25" <?php if ($ss_sp_cache == '25') echo 'selected="true"';?>>25</option>
			<option value="50" <?php if ($ss_sp_cache == '50') echo 'selected="true"';?>>50</option>
			<option value="75" <?php if ($ss_sp_cache == '75') echo 'selected="true"';?>>75</option>
			<option value="100"  <?php if ($ss_sp_cache == '100')  echo 'selected="true"';?>>100</option>
			<option value="200"  <?php if ($ss_sp_cache == '200')  echo 'selected="true"';?>>200</option>
		</select>
		<p>
		<?php echo __('Select the number of items to save in the bad IP cache.'
				.'<br />Avoid making this too big as it can cause the plugin to run out of memory.'
			,SFS_TXTDOMAIN);?>
		</p>
        </fieldset>
        <br />
        <fieldset>
		<legend>
			<span style="font-weight:bold;font-size:1.2em;">
			<?php echo __('Good Cache Size',SFS_TXTDOMAIN);?>
			</span>
		</legend>
		<p>
		<?php echo __('The good cache should be set to just a few entries.'
				.'<br />The first time a spammer hits your site he may not be well-known and once he gets in the Good Cache'
				.'<br />he can hit your site without being checked again.'
				.'<br />Increasing the size of the cache means a spammer has more opportunities to hit your site without a new check.'
				,SFS_TXTDOMAIN);?>
		</p>
		<?php echo __('Good IP Cache Size',SFS_TXTDOMAIN);?> :
		<select name="ss_sp_good">
			<option value="0"  <?php if ($ss_sp_good == '0')  echo 'selected="true"';?>>0</option>
			<option value="1"  <?php if ($ss_sp_good == '1')  echo 'selected="true"';?>>1</option>
			<option value="2"  <?php if ($ss_sp_good == '2')  echo 'selected="true"';?>>2</option>
			<option value="3"  <?php if ($ss_sp_good == '3')  echo 'selected="true"';?>>3</option>
			<option value="4"  <?php if ($ss_sp_good == '4')  echo 'selected="true"';?>>4</option>
			<option value="5"  <?php if ($ss_sp_good == '5')  echo 'selected="true"';?>>5</option>
			<option value="10" <?php if ($ss_sp_good == '10') echo 'selected="true"';?>>10</option>
			<option value="25" <?php if ($ss_sp_good == '25') echo 'selected="true"';?>>25</option>
			<option value="50" <?php if ($ss_sp_good == '50') echo 'selected="true"';?>>50</option>
			<option value="75" <?php if ($ss_sp_good == '75') echo 'selected="true"';?>>75</option>
			<option value="100"  <?php if ($ss_sp_good == '100')  echo 'selected="true"';?>>100</option>
			<option value="200"  <?php if ($ss_sp_good == '200')  echo 'selected="true"';?>>200</option>
		</select>
        </fieldset>
        <br />
        <p class="submit"><input class="button-primary" value="<?php echo __('Save Changes',SFS_TXTDOMAIN);?>" type="submit"/></p>

    </form>
	<?php
	if ( count( $badips ) == 0 && count( $goodips ) == 0 ) {
		echo __('Nothing in the cache.',SFS_TXTDOMAIN);
	} else {
		?>
        <h2><?php echo __('Cached Values',SFS_TXTDOMAIN);?></h2>
        <form method="post" action="">
            <input type="hidden" name="ss_stop_spammers_control" value="<?php echo $nonce; ?>"/>
            <input type="hidden" name="ss_stop_clear_cache" value="true"/>
            <p class="submit">
		<input class="button-primary" value="<?php echo __('Cache Clear',SFS_TXTDOMAIN);?>" type="submit"/></p>
        </form>
        <table>
	<?php 
		echo "<tr>\r\n";	// start row

		echo '<td width="30%">'.__('Rejected IPs',SFS_TXTDOMAIN).'</td>'."\r\n";
		echo '<td width="30%">'.__('Good IPs',SFS_TXTDOMAIN).'</td>'."\r\n";
            	echo "</tr>\r\n";

		echo "<tr>\r\n";
                echo '<td style="vertical-align:top;"  id="badips">';
		if ( count($badips) > 0 ) {
			arsort($badips);
				//$options = ss_get_options();	//allready  loaded at top of file
				//$stats   = ss_get_stats();    //allready  loaded at top of file
			$show    = be_load( 'ss_get_bcache', 'x', $stats, $options );
			echo $show;
				
		}
		echo "</td>\r\n";

		echo '<td style="vertical-align:top;"  id="goodips">';
		if ( count( $goodips ) > 0 ) {
			arsort($goodips);
				//$options = ss_get_options();	//allready  loaded at top of file
				//$stats   = ss_get_stats();    //allready  loaded at top of file
			$show    = be_load( 'ss_get_gcache', 'x', $stats, $options );
			echo $show;
		}
		echo "</td>\r\n";

		echo "</tr>\r\n";
	?>
        </table>
		<?php
	}

	?>


