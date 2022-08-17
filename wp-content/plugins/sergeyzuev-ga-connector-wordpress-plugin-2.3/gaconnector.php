<?php
/*
Plugin Name: GA Connector
Description: Visitor Source Tracking
Version: 2.3
Author: Sergiy Zuev
*/

add_action( 'wp_enqueue_scripts', 'add_gaconnector_js' );  
function add_gaconnector_js() {
	wp_register_script('gaconnector-tracker', 'https://tracker.gaconnector.com/gaconnector.js', array('jquery'), null, true);
        wp_register_script('gaconnector', plugins_url('gaconnector.js', __FILE__), array('gaconnector-tracker'), '1.0', true);
	wp_enqueue_script('gaconnector-tracker');
	wp_enqueue_script('gaconnector');
}

add_filter( 'script_loader_tag', 'prevent_cloudflare_caching', 10, 3 );
function prevent_cloudflare_caching( $tag, $handle, $src ) {
    if ( strpos($handle, 'gaconnector') !== false ) {
        return str_replace( '<script', '<script data-cfasync="false"', $tag );
    }
    return $tag;
}

add_filter( 'gform_field_input', 'gaconnector_gravity_forms_render_field', 10, 5 );
function gaconnector_gravity_forms_render_field( $input, $field, $value, $lead_id, $form_id ) {
    $label = $field['label'];
    $gaconnector_fields = array('fc_source', 'fc_medium', 'fc_campaign', 'fc_term', 'fc_content', 'fc_landing', 'fc_referrer', 'fc_channel', 'GA_Client_ID', 'pages_visited_list', 'page_visits', 'lc_source', 'lc_medium', 'lc_campaign', 'lc_term', 'lc_content', 'lc_landing', 'lc_referrer', 'lc_channel', 'ip_address', 'OS', 'device', 'browser', 'city', 'country', 'region', 'time_zone', 'latitude', 'longitude', 'all_traffic_sources' , 'time_passed', 'gclid');
    if ( in_array($label, $gaconnector_fields) ) {
        $input_name = 'input_' . str_replace( '.', '_', $field['id'] );
        $input = '<input type="hidden" class="gform_hidden ' . $label . '" id="' . $label . '" name="' . $input_name . '">';
    }

    return $input;
}