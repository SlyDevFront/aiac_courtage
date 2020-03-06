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
		<div class="col-12 text-center text-md-left text-xl-center">
			<span class=" d-none d-sm-inline anchor anchor_title">Garantir&nbsp;: </span>
			<span class=" d-block d-sm-none anchor anchor_title" data-toggle="collapse" data-target=".anchors">Garantir&nbsp;<i class="fas d-inline  fa-caret-down"></i> </span>
			<ul class="anchors collapse color-<?php the_title(); ?>">
				<?php
				if (have_rows('ancre_bandeau')) : $count = 1;
					while (have_rows('ancre_bandeau')) : the_row(); ?>
						<li>
							<a href="#anchor-<?= $count; ?>">
								<div class="li_container block-<?= $count; ?>">
									<img class=" anchor_icon test" src="<?php the_sub_field('icone_'); ?>"><span class="anchor"><?php the_sub_field('garantie_element'); ?></span>

								</div>
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
			<div class="col-12 col-md-5 my-auto col-lg-6 text-center" id="pic" data-aos="fade-up" data-aos-duration="1500">
				<?= the_post_thumbnail(); ?>
			</div>
			<div class="col-12 col-md-7 col-lg-6 title text-left" data-aos="fade-up" data-aos-duration="1500">
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
					<?php $order = ($count % 2) ? '' : 'order-md-2'; ?>
					<div class="col-12 col-md-5 col-lg-5 text-left my-auto my-xl-0 <?= $order; ?>" data-aos="fade-left" data-aos-duration="1500">
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
<section class="container-fluid prefooter-infos prefoooter-color-<?php echo the_title(); ?>">
	<div class="row mx-15 py-5 justify-content-between">
		<div class="col-12 col-lg-4 my-auto text-left" id="download">
			<a href="<?php the_field('pdf_a_telecharger_'); ?>" target="_blank">
				<?php if (get_field('picto_bloc_pdf')) { ?>
					<img src="<?php the_field('picto_bloc_pdf'); ?>" alt="">
				<?php } else { ?>
					<img src="<?php bloginfo('url') ?>/wp-content/themes/Aiac-immeubles/img/aiac-garantir-picto-pdf.svg" alt="">
				<?php 	} ?>

				<p><strong> <?php the_field('texte_bloc_pdf'); ?></strong></p>
				<p><?php echo the_title(); ?></p>
			</a>
		</div>
		<div class="col-12 col-lg-3 " id="contact_fiche" data-aos="fade-up" data-aos-duration="1000">
			<?php $expert = get_field('expert_associe');
			$args = array(
				'post_type' => 'experts',
				'posts_per_page' => 1,
				'p' => $expert->ID
			);
			$the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<div class=" text-left text-lg-center text-xl-left">
						<div class="item_container">
							<div class="pic_rounded_container_lead" data-aos="fade-right" data-aos-duration="750">

								<?php echo the_post_thumbnail($post->ID); ?>
							</div>
							<div class="data_associe" data-aos="fade-left" data-aos-duration="1750">
								<div class="infos_item">
									<h4><?php the_title(); ?></h4>
									<h4><?php the_field('poste_occupe'); ?></h4>
								</div>
								<ul class="social_team_item">

									<li><a href="mailto:<?php the_field('email'); ?>"><i class="fas fa-envelope"></i></a></li>
									<li><a href="<?php the_field('telephone'); ?>"><i class="fas fa-phone-alt"></i></a></li>
									<li><a href="<?php the_field('linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a></li>

								</ul>
							</div>
						</div>

					</div>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post().
			?>
		</div>
		<div class="col-12 col-lg-4 text-right" id="contact_domain">
			<a href="<?php the_field('mail_contact'); ?>">
				<?php if (get_field('picto_bloc_contact')) { ?>
					<img src="<?php the_field('picto_bloc_contact'); ?>" alt="">
				<?php } else { ?>
					<img src="<?php bloginfo('url') ?>/wp-content/themes/Aiac-immeubles/img/aiac-garantir-picto-mail.svg" alt="">
				<?php 	} ?>

				<p><strong><?= the_field('texte_bloc_contact'); ?></strong></p>
				<p>Assurances &nbsp;<?php echo the_title(); ?></p>
			</a>
		</div>
	</div>
</section>





<?php get_footer(); ?>
