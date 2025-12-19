<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Kibaran
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
get_sidebar('banner-160x600-kanan');
get_sidebar('banner-160x600-kiri');
?>
		<div class="notfound-box">
			<div class="notfound-wrap">
				<div class="notfound-image">
					<div class="img-404"></div>
				</div>
				<div class="notfound-title">
					<h1><?php echo esc_html__( 'Sorry, page not found', 'kibaran' ); ?></h1>
				</div>
				<div class="notfound-desc">
					<p><?php echo esc_html__( 'Don\'t worry, there\'s still lots of other interesting content', 'kibaran' ); ?></p>
				</div>
				<div class="notfound-button">
					<a href="<?php echo get_home_url(); ?>"><?php echo esc_html__( 'View other content', 'kibaran' ); ?></a>
				</div>

			</div>
		</div>

<?php

get_footer();
