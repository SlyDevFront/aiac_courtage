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
$categories = get_categories(
	array('parent' => 7)
);
$count = 1;
foreach ($categories as $c) {
?>
	<section class="team_courtage container-fluid">
		<div class="border_<?= $count; ?>_mobile col-12 d-block d-lg-none text-center" data-aos="fade-right" data-aos-duration="750">
			<div class="title_container">
				<h2><?php echo $c->name; ?></h2>
			</div>
		</div>
		<div class="mx-15">
			<div class="container ">
				<div class="row justify-content-center">
					<?php
					$args = array(
						'post_type' => 'experts',
						'cat' => $c->term_id,
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
							<div class="col-12 col-md-6 col-lg-4 team_item text-center" data-aos="fade-up" data-aos-duration="1000">
								<div class="item_container">
									<div class="pic_rounded_container_lead">

										<?php echo the_post_thumbnail($post->ID); ?>
									</div>
									<div class="infos_item">
										<h4><?php the_title(); ?></h4>
										<p><?php the_field('poste_occupe'); ?></p>
									</div>
									<ul class="social_team_item">

										<li><a href="mailto:<?php the_sub_field('email'); ?>"><i class="fas fa-envelope"></i></a></li>
										<li><a href="<?php the_sub_field('telephone'); ?>"><i class="fas fa-phone-alt"></i></a></li>
										<li><a href="<?php the_sub_field('linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a></li>

									</ul>
								</div>

							</div>
					<?php $i++;
						}

						wp_reset_postdata();
					} ?>
				</div>
			</div>
		</div>
		<div class="border_grey-<?= $count; ?> d-none d-lg-block text-center" data-aos="fade-right" data-aos-duration="750">
			<div class="title_container">
				<h2><?php echo $c->name; ?></h2>
			</div>
		</div>
	</section>

<?php
	$count++;
}

?>

<?php get_footer();
