<?php
/**
 * Functions
 * The secret sauce and other funky flavors for the Multi Child-Theme
 *
 * @package       Desk_Mess_Mirrored
 * @subpackage    Multi
 * @since         2.2
 *
 * @link          http://buynowshop.com/themes/multi/
 * @link          https://github.com/Cais/multi/
 * @link          https://wordpress.org/themes/multi/
 *
 * @author        Edward Caissie <edward.caissie@gmail.com>
 * @copyright     Copyright (c) 2009-2016, Edward Caissie
 */

/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 *
 * @package        Desk_Mess_Mirrored
 * @sub-package    Multi
 * @since          2.2
 */
load_theme_textdomain( 'multi', get_template_directory() . '/languages' );
$locale      = get_locale();
$locale_file = get_template_directory() . "/languages/$locale.php";
if ( is_readable( $locale_file ) ) {
	/** @noinspection PhpIncludeInspection */
	require_once( $locale_file );
}