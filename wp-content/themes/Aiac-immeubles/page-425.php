<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<section class="presentation_charte container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 title text-center" data-aos="fade-up" data-aos-duration="1500">
				<h2><?php the_field('titre_h2'); ?></h2>
				<h5><?php the_field('titre_h5'); ?></h5>
				<p><?php the_field('description'); ?></p>

			</div>
		</div>
	</div>
</section>
<section class="domaines_courtage container-fluid">
	<div class="mx-15">
		<div class="container ">
			<div class="row justify-content-center">
				<?php
				$args = array(
					'post_type' => 'garanties',
					'posts_per_page' => -1,
					'orderby' => 'date',
					'order' => 'ASC'
				); ?>
				<?php
				$loop_leader = new WP_Query($args);
				?>

				<?php
				if ($loop_leader->have_posts()) {
					$i = 0;
					while ($loop_leader->have_posts()) {
						$loop_leader->the_post(); ?>

						<div class="col-12 col-md-6 col-lg-4 team_item text-center color-<?= the_title(); ?>" data-aos="fade-up" data-aos-duration="1000">
							<div class="garantie_item_container">
								<div class="pic-container">
									<a href="<?php the_field('page_en_lien'); ?>"><?= the_post_thumbnail($post->ID); ?></a>
								</div>
								<a href="<?php the_field('page_en_lien'); ?>">
									<h4><?= the_title(); ?>
									</h4>
								</a>
								<p><?= the_field('description_big'); ?></p>
							</div>


						</div>

				<?php $i++;
					}

					wp_reset_postdata();
				} ?>
			</div>
		</div>
</section>
<?php get_footer();
