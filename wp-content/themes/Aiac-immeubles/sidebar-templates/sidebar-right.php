<?php

/**
 * The right sidebar containing the main widget area
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!is_active_sidebar('right-sidebar')) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod('understrap_sidebar_position');
?>

<div class="row justify-content-center">
	<div class="col-10 widget-area" id="right-sidebar" role="complementary" data-aos="fade-up" data-aos-duration="500">

		<?php dynamic_sidebar('right-sidebar'); ?>


	</div><!-- #right-sidebar -->
</div>
