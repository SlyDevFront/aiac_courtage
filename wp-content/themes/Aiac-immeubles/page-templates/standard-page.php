<?php

/**
 * Template Name: Page Standard
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<section class="standard-page container-fluid">
	<div class="container">
		<div class="content-standard">
			<?= the_content($post->ID); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
