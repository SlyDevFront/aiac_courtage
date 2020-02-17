<?php

/**
 * Template Name: Page détail domaine
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

<section class="container-fluid anchors_container">
	<div class="mx-5 my-3">
		<div class="col-12 text-right">
			<span class="anchor">Garantir&nbsp;: </span>
			<ul class="anchors">
				<?php
				if (have_rows('ancre_bandeau')) : $count = 1;
					while (have_rows('ancre_bandeau')) : the_row(); ?>
						<li>
							<a href="#anchor-<?= $count; ?>">
								<img class="anchor_icon" src="<?php the_sub_field('icone_'); ?>"><span class="anchor"><?php the_sub_field('garantie_element'); ?></span>
							</a>
						</li>
				<?php $count++;
					endwhile;
				endif; ?>
			</ul>
		</div>
	</div>
</section>
<section class="main_content container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5 my-auto col-lg-5 text-center" id="pic" data-aos="fade-up" data-aos-duration="1500">
				<?= the_post_thumbnail(); ?>
			</div>
			<div class="col-12 col-md-7 col-lg-7 title text-left" data-aos="fade-up" data-aos-duration="1500">
				<h2><?php the_field('titre_h2'); ?></h2>
				<h5><?php the_field('titre_h5'); ?></h5>
				<?php the_field('contenu_texte'); ?>
			</div>

		</div>
	</div>
</section>
<section class="descriptif_content container-fluid">
	<div class="container">
		<?php
		if (have_rows('descriptif')) : $count = 1;

			while (have_rows('descriptif')) : the_row(); ?>
				<div class="row my-7 justify-content-between" id="anchor-<?= $count; ?>">
					<?php $order = ($count % 2) ? '' : 'order-lg-2'; ?>
					<div class="col-12 col-md-5 col-lg-5 text-left <?= $order; ?>" data-aos="fade-left" data-aos-duration="1500">
						<?php $pic = get_sub_field('image');
						?>
						<img src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt']; ?>">
					</div>
					<div class="col-12 col-md-7 col-lg-6 title text-left connaitre_content" data-aos="fade-right" data-aos-duration="1500">
						<h3><?php the_sub_field('titre_h3_descriptif'); ?></h3>
						<?php the_sub_field('contenu_descriptif'); ?>

					</div>
				</div>

		<?php $count++;
			endwhile;
		endif; ?>


	</div>
</section>
<section class="container-fluid prefooter-infos <?php echo the_title(); ?>">
	<div class="row mx-15 py-4 justify-content-between">
		<div class="col-12 col-lg-4 my-auto text-left" id="download">
			<a href="<?php the_field('pdf_a_telecharger_'); ?>" target="_blank"><img src="<?php bloginfo('url') ?>/wp-content/themes/Aiac-immeubles/img/aiac-garantir-picto-pdf.svg" alt="">
				<p><strong> Télecharger la plaquette</strong></p>
				<p><?php echo the_title(); ?></p>
			</a>
		</div>
		<div class="col-12 col-lg-4 " id="contact_fiche">
			<?php $expert = get_field('expert_associe');
			$args = array(
				'post_type' => 'experts',
				'posts_per_page' => 1,
				'p' => $expert->ID
			);
			$the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<li>
							<h2><?= the_title(); ?></h2>
							<?= the_post_thumbnail(); ?>
							<?= the_field('email'); ?>
							<?= the_field('telephone'); ?>
							<?= the_field('linkedin'); ?>

						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post().
			?>
		</div>
		<div class="col-12 col-lg-4 text-right" id="contact_domain">
			<a href="mailto:<?php the_field('mail_contact'); ?>"><img src="<?php bloginfo('url') ?>/wp-content/themes/Aiac-immeubles/img/aiac-garantir-picto-mail.svg" alt="">
				<p>Contactez-nous</p>
				<p>Assurances &nbsp;<?php echo the_title(); ?></p>
			</a>
		</div>
	</div>
</section>





<?php get_footer(); ?>
