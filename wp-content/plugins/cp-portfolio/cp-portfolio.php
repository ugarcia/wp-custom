<?php
/*
Plugin Name: Custom Portfolio
Plugin URI: https://github.com/ugarcia/wp-custom.git
Description: Custom Portfolio Data Type.
Version: 1.0.0
Author: Frontcoder
Author URI: http://frontcoder.com/
Text Domain: cp-portfolio
License: GPLv2
Copyright 2015 Unai Garcia (email : unai.gg77@gmail.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
156 ❘ CHAPTER 8 PLUGIN DEVELOPMENT
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

/**
 * Plugin activation
 */
function cp_portfolio_install()
{
	global $wp_version;

	if ( version_compare( $wp_version, '4.1', '<' ) ) {
		wp_die( 'This plugin requires WordPress version 4.1 or higher.' );
	}

    cp_register_portfolio_items();

    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'cp_portfolio_install' );

/**
 * Plugin deactivation
 */
function cp_portfolio_deactivate()
{

}
register_deactivation_hook( __FILE__, 'cp_portfolio_deactivate' );

/**
 * Portfolio Items custom post type registration
 */
function cp_register_portfolio_items()
{
    register_post_type( 'portfolio_items',
        array(
            'labels' => array(
                'name' => __('Portfolio Items', 'textdomain'),
                'singular_name' => __('Portfolio Item', 'textdomain'),
                'add_new_item' => __('Add New Portfolio Item', 'textdomain'),
                'edit_item' => __('Edit Portfolio Item', 'textdomain'),
                'new_item' => __('New Portfolio Item', 'textdomain'),
                'view_item' => __('View Portfolio Item', 'textdomain'),
                'search_items' => __('Search Portfolio Items', 'textdomain'),
                'not_found' => __(' No Portfolio Items found', 'textdomain'),
                'not_found_in_thrash' => __(' No Portfolio Items found in thrash', 'textdomain')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-portfolio',
            'taxonomies' => array('category'),
            'rewrite' => array('slug' => 'portfolio'),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
        )
    );
}
add_action( 'init', 'cp_register_portfolio_items' );
