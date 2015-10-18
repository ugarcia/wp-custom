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


function cp_portfolio_install() {

	global $wp_version;

	if ( version_compare( $wp_version, '4.1', '<' ) ) {
		wp_die( 'This plugin requires WordPress version 4.1 or higher.' );
	}
}
register_activation_hook( __FILE__, 'cp_portfolio_install' );


function cp_portfolio_deactivate() {

}
register_deactivation_hook( __FILE__, 'cp_portfolio_deactivate' );

