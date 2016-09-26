<?php
/**
 * Plugin Name: Insert Content Between HTML Paragraphs
 * Version: 1.0.0
 * Plugin URI: https://github.com/keesiemeijer/insert-content
 * Description: PHP functions you can use in your (child) theme to insert content between or after HTML paragraphs.
 * Author: keesiemijer
 * Author URI: https://keesiemeijer.wordpress.com/
 * License: GPL v2+
 *
 * For more information visit: https://github.com/keesiemeijer/insert-content
 *
 * Insert Content Between HTML Paragraphs is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Additional Content is distributed in the hope that it will be useful,
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

$updatePhp->set_plugin_name( 'Insert Content Between HTML Paragraphs' );
if ( $updatePhp->does_it_meet_required_php_version() ) {
	// Namespaced file
	require 'includes/insert-content.php';
}
