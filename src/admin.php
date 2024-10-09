<?php

/**
 * Registers an editor stylesheet for the theme when editing pages from gutenburg
 */
function admin_scripts()
{
	add_editor_style(get_template_directory_uri() . '/static/css/editor-style.css');
}
add_action('admin_init', 'admin_scripts');
