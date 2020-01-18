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
include 'inc/slider.php'; ?>

<section class="contact_courtage container-fluid">
	<div class="mx-15">
		<div class="container ">
			<div class="row">
				<div class="col-12 col-md-8 col-lg-9" id="titre">
					<h1><?php the_field('titre_section_contact'); ?></h1>
				</div>

				<div class="col-12 col-md-4 col-lg-3 my-auto" id="contact">
					<button><a href="<?php the_field('lien_bouton_contact'); ?>">Contactez-nous</a></button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="approche container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="mx-15">
		<div class="">
			<div class="col-12 title text-lg-center">
				<h3>Une approche globale&nbsp;<span><?php the_field('titre_h1_section'); ?></span></h3>
				<h5><?php the_field('titre_h5_section'); ?></h5>
			</div>
			<div class="col-12 col-md-12 col-lg-12 garanties" data-aos="fade-up" data-aos-duration="2250">
				<div class="row justify-content-center">
					<?php
					if (have_rows('specialites')) :
						while (have_rows('specialites')) : the_row(); ?>
							<div class="col-12 col-md-6 col-lg-2 text-center garantie_item">
								<div class="garantie_item_container">
									<div class="pic-container">
										<img class="picto" src="<?php the_sub_field('pictogramme_specialite'); ?>">
										<img class="picto_background" src="<?php get_template_directory(); ?>/Aiac_1/wp-content/themes/Aiac-immeubles/img/aiac-circle-specialites.svg">
									</div>
									<h4><?php the_sub_field('titre_specialite'); ?></h4>
									<p><?php the_sub_field('description_specialite'); ?>..</p>
								</div>
							</div>
					<?php endwhile;
					endif; ?>

				</div>
			</div>
		</div>

	</div>
</section>

<section class=" qui_sommes_nous container-fluid" style="background:url(<?php the_field('background_section'); ?>)">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 text-center" id="pic" data-aos="fade-up" data-aos-duration="1000">
				<?php $pic = get_field('visuel_');
				//var_dump($pic);
				?>
				<img src="<?php echo $pic['sizes']['medium_large']; ?>" alt="<?php echo $pic['description']; ?>">
			</div>
			<div class="col-12 col-md-12 col-lg-6 text-content title text-left my-auto" data-aos="fade-right" data-aos-duration="1500">
				<h5><?php the_field('titre_h5_immeuble'); ?></h5>
				<h3><?php the_field('titre_h3_immeuble'); ?></h3>
				<p class="text">
					<?php the_field('texte_de_presentation'); ?>
				</p>
				<button><a href="<?php the_field('lien_bouton') ?>"><?php the_field('titre_bouton') ?></a></button>
			</div>
			<div class="col-12 raison_detre" data-aos="fade-up" data-aos-duration="500">
				<div class="row">
					<div class="col-12 col-md-3 my-auto " id="raisondetre_title">
						<img src="<?php get_template_directory(); ?>/Aiac_1/wp-content/themes/Aiac-immeubles/img/aiac-raisondetre-circle.svg">
						<span><?php the_field('raison_detre_titre'); ?></span>
					</div>
					<div class="col-12 col-md-9" id="raisondetre_texte">
						<p><?php the_field('raison_detre_contenu_texte'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="experts container-fluid" data-aos="fade-up" data-aos-duration="3000">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center my-auto" id="intro" data-aos="fade-up" data-aos-duration="1000">
				<h3>Notre équipe&nbsp;<span><?php the_field('intitule_section'); ?></span></h3>
				<h5><?php the_field('titre_h5_experts'); ?></h5>
			</div>
			<div class="col-12 team_list" data-aos="fade-up" data-aos-duration="1750">
				<div class=" row justify-content-center">
					<div class="col-12 col-md-3  text-center secteur">
						<img src="<?php get_template_directory(); ?>/Aiac_1/wp-content/themes/Aiac-immeubles/img/aiac-dirigeants.svg" alt="">
						<span class="title">direction</span>
					</div>
					<div class="col-12 col-md-3  text-center secteur">
						<img src="<?php get_template_directory(); ?>/Aiac_1/wp-content/themes/Aiac-immeubles/img/aiac-expert-secteurs.svg" alt="">
						<span class="title">experts secteur</span>
					</div>
					<div class="col-12 text-center">
						<button><a href="<?php the_field('lien_cta_equipe') ?>"><?php the_field('titre_cta_bouton_equipe') ?></a></button>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<?php get_footer();
