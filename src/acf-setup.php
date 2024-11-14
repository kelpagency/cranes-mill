<?php
// Define path and URL to the ACF plugin.
// Since we are installing this via composer we need to tell ACF it's not in the usual spot
define(
	'MY_ACF_PATH',
	get_template_directory() . '/vendor/wpengine/advanced-custom-fields-pro/'
);
define(
	'MY_ACF_URL',
	get_template_directory_uri() . '/vendor/wpengine/advanced-custom-fields-pro/'
);

// Include the ACF plugin.
include_once MY_ACF_PATH . 'acf.php';

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url($url)
{
	return MY_ACF_URL;
}

// Adds options page
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

add_filter('timber/context', 'global_timber_context');

// add options to timber context
function global_timber_context($context)
{
	$context['options'] = get_fields('option');

	return $context;
}

// Hide the ACF admin menu item when in production.
// if ('production' === wp_get_environment_type()) {
// 	add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// 	function my_acf_settings_show_admin($show_admin)
// 	{
// 		return false;
// 	}
// }
