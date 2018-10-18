<?php
/**
 * Plugin Name: WP Insert Content
 * Version: 1.0.1
 * Plugin URI: https://github.com/keesiemeijer/wp-insert-content
 * Description: PHP functions you can use in your (child) theme to insert content between or after HTML paragraphs.
 * Author: keesiemijer
 * Author URI: https://keesiemeijer.wordpress.com/
 * License: GPL v2+
 *
 * For more information visit: https://github.com/keesiemeijer/wp-insert-content
 *
 * WP Insert Content is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WP Insert Content is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Additional Content. If not, see <http://www.gnu.org/licenses/>.
 *
 * @license GPL-2.0+
 * @author  keesiemeijer
 * @version 1.0.0
 */

require 'includes/WPUpdatePhp.php';

$updatePhp = new Insert_Content_WPUpdatePhp( '5.3' );

$updatePhp->set_plugin_name( 'WP Insert Content' );
if ( $updatePhp->does_it_meet_required_php_version() ) {
	// Namespaced file
	require 'includes/insert-content.php';
}
