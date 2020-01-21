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

get_header(); ?>
<section class="container-fluid header-page my-auto" style="background: url('<?php the_field('background_titre'); ?>">
	<div class="header-overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 ">
					<h1 class="page-title text-center text-lg-left"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="presentation_charte container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 title text-center" data-aos="fade-up" data-aos-duration="1500">
				<h2><?php the_field('titre_h2_page_copie'); ?></h2>
				<h5><?php the_field('titre_h5_copie'); ?></h5>

			</div>
			<div class="col-12 col-md-6 desc">
				<?php the_field('texte_de_presentation_gauche'); ?>

			</div>
			<div class="col-12 col-md-6 desc">
				<?php the_field('texte_de_presentation_droite'); ?>
			</div>
			<div class="col-12 text-center title">
				<button><a href="<?php the_field('lien_bouton_copie') ?>"><?php the_field('titre_bouton_copie') ?></a></button>

			</div>
		</div>
	</div>
</section>
<section class="connaitre_la_charte container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 my-auto col-lg-6 text-center" id="pic" data-aos="fade-left" data-aos-duration="1500">
				<?php $pic = get_field('visuel_gauche_charte'); ?>
				<img src="<?php echo $pic['url']; ?>">
			</div>
			<div class="col-12 col-md-6 col-lg-6 title text-left" data-aos="fade-right" data-aos-duration="1500">
				<h2><?php the_field('titre_h2_charte'); ?></h2>
				<h5><?php the_field('titre_h5_charte'); ?></h5>
				<?php the_field('texte_de_presentation'); ?>
				<ul class="5c">
					<?php
					if (have_rows('les_5_c')) :
						while (have_rows('les_5_c')) : the_row(); ?>
							<li><?php the_sub_field('intitule'); ?></li>
					<?php endwhile;
					endif; ?>
				</ul>
			</div>

		</div>
	</div>
</section>

<section class="raison-etre container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="container raison_detre_charte data-aos=" fade-up" data-aos-duration="500">
		<div class="row">
			<div class="col-12 col-md-4 my-auto " id="raisondetre_title">

				<img src="<?php get_template_directory(); ?>/wp-content/themes/Aiac-immeubles/img/aiac-raisondetre-circle.svg">
				<span><?php the_field('raison_detre'); ?></span>
			</div>
			<div class="col-12 col-md-8" id="raisondetre_texte">
				<p><?php the_field('raison_detre_contenu_texte'); ?></p>
			</div>
		</div>
	</div>
</section>
<section class="accroche_charte container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="container charte" data-aos=" fade-up" data-aos-duration="500">
		<div class="row">
			<?php
			if (have_rows('element_accroche')) : $count = 1;
				while (have_rows('element_accroche')) : the_row(); ?>
					<div class="col-12 col-md-4 accroche_content">
						<div class="row">
							<div class="col-12 text-left my-auto " id="accroche_title">
								<h4><?php the_sub_field('intitule_accroche'); ?></h4>
							</div>
							<div class="col-3 col-md-4">
								<div class="count-container">
									<img src="<?php bloginfo('url') ?>/wp-content/themes/Aiac-immeubles/img/aiac-circle-specialites.svg" alt="">
									<p class="count text-center"><?= $count; ?></p>
								</div>

							</div>
							<div class="col-12 col-md-8">
								<?php the_sub_field('description'); ?>
							</div>
						</div>
					</div>

			<?php $count++;
				endwhile;
			endif; ?>
			<div class="col-12 text-center title">
				<button><a href="<?php the_field('lien_bouton_team') ?>"><?php the_field('titre_bouton_team') ?></a></button>
			</div>
		</div>
	</div>
</section>
<?php get_footer();