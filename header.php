<?php
/**
 * Multi
 *
 * A Child-Theme of Desk Mess Mirrored - Marble desktop covered with a mix
 * of old and new items, such as some vintage papers, a stainless steel pen,
 * and, a hot cup of coffee!
 *
 * Desk Mess Mirrored Theme Description: Marble desktop covered with a mix of
 * old and new items, such as some vintage papers, a stainless steel pen, and, a
 * hot cup of coffee! Now with more documentation and post-format support for
 * the following types: asides, quotes and status!
 *
 * @package     Desk_Mess_Mirrored
 * @subpackage  Multi
 * @since       1.8.3
 *
 * @version     2.3
 * @date        February 2016
 *
 * @link        http://wordpress.org/extend/themes/desk-mess-mirrored
 * @link        https://github.com/Cais/desk-mess-mirrored/multi
 * @link        https://wordpress.org/themes/multi/
 *
 * @internal    REQUIRES WordPress version 4.1 per Desk Mess Mirrored 2.5
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2009-2016, Edward Caissie
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="mainwrap">

	<div id="header-container">

		<div id="header"> <!-- header -->

			<div id="headerleft"></div>

			<div id="logo">

				<h2>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
				</h2>

				<p><?php bloginfo( 'description' ); ?></p>
			</div>
			<!-- #logo -->

			<div id="cup">
				<a href="<?php echo get_feed_link( 'rss2' ); ?>" title="<?php esc_attr_e( 'Add this blog to any reader', 'multi' ); ?>">
					<img alt="<?php esc_attr_e( 'Coffee cup image used as visual link', 'multi' ); ?>" src="<?php echo get_stylesheet_directory_uri(); ?>/images/rsscup.png" border="0" />
				</a>
			</div>
			<!-- #cup -->

			<div id="top-navigation-menu">
				<?php dmm_nav_menu(); ?>
			</div>

		</div>
		<!-- #header -->

	</div>
	<!-- #header-container -->