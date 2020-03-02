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
<section class="presentation container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6 text-left" id="pic" data-aos="fade-left" data-aos-duration="1500">
				<div class="">
					<?php $pic1 = get_field('visuel'); ?>
					<img src="<?php echo $pic1; ?>">
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-6 title text-left" data-aos="fade-right" data-aos-duration="1500">
				<h2><?php the_field('titre_h2_page'); ?></h2>
				<h5><?php the_field('titre_h5'); ?></h5>
				<div style="clear:both;"></div>
				<p class="">
					<?php the_field('texte_de_presentation'); ?>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="approche_charte approche container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="mx-15">
		<div class="row">
			<div class="col-12 title text-lg-center">
				<h2><?php the_field('titre_h1_section'); ?></h2>
				<h5><?php the_field('titre_h5_section'); ?></h5>
			</div>
			<div class="col-12 col-md-2 col-lg-2 my-auto text-center big_pres" data-aos="fade-right" data-aos-duration="1000">
				<?php $img = get_field('visuel_bloc_gauche'); ?>
				<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['description']; ?>">
			</div>
			<div class="col-12 col-md-10 col-lg-10 garanties" data-aos="fade-up" data-aos-duration="2250">
				<div class="row justify-content-center">
					<?php
					$args = array(
						'post_type' => 'garanties',
						'posts_per_page' => 5,
						'orderby' => 'date',
						'order' => 'ASC'
					);
					$loop_specialites = new WP_Query($args);
					if ($loop_specialites->have_posts()) {
						while ($loop_specialites->have_posts()) {
							$loop_specialites->the_post(); ?>
							<div class="col-12 col-md-2 col-lg-2 text-center garantie_item">
								<div class="garantie_item_container">
									<div class="pic-container">
										<a href="<?php echo the_permalink(); ?>"><?= the_post_thumbnail($post->ID); ?></a>
									</div>
									<h4><?= the_title(); ?></h4>
								</div>
							</div>
					<?php wp_reset_postdata();
						}
					} ?>

				</div>
			</div>
		</div>
	</div>
</section>
<section class="chiffres-cle container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="row my-auto ">
		<div class="col-12 col-md-3 col-lg-5 number-left">
			<!--my-auto-->
			<div class="numbcontainer" data-aos="fade-left" data-aos-duration="750">
				<?php
				if (have_rows('chiffre_cle_2')) :
					while (have_rows('chiffre_cle_2')) : the_row(); ?>
						<div class="number-itemb text-center">
							<p class="number counter"><?php echo the_sub_field('chiffres'); ?></p>
							<p class="definition"><?php echo the_sub_field('definition'); ?></p>
							<p class="unite"><?php echo the_sub_field('unite'); ?></p>
						</div>

				<?php
					endwhile;
				endif; ?>
			</div>
		</div>

		<div class="col-12 col-md-9 col-lg-7 my-auto number-circle" style="background-image: url(<?php the_field('background_chiffre_phare'); ?>">
			<div class="overlay"></div>
			<div class="col-12 col-lg-9 padding_container" data-aos="fade-right" data-aos-duration="2000">
				<div class="row no-gutters my-auto">
					<img class=" d-none d-md-block " src="<?php bloginfo('url') ?>/wp-content/themes/Aiac-immeubles/img/aiac-circle-.footer.svg" alt="">
					<?php
					if (have_rows('chiffre_cle_1')) :

						$k = 1;
						while (have_rows('chiffre_cle_1')) : the_row();
							$after = ($k == 1 || $k == 6) ? '12' : '6'; ?>
							<div class="number-itemb col-12 col-md-<?= $after; ?> col-lg-<?= $after; ?> col-xl-<?= $after; ?> text-center">
								<p class="definition"><?php echo the_sub_field('definition'); ?></p>
								<p class="number counter"><?php echo the_sub_field('chiffres'); ?>
									<?php if (get_sub_field('unite_chiffre')) { ?>
										<div class="unite_container">
											<span class="unite_chiffre"><?php echo the_sub_field('unite_chiffre'); ?></span>

											<span class="unite_devise"><?php echo the_sub_field('devise'); ?></span>

										</div>
								</p>
							<?php } ?>
							<p class="unite"><?php echo the_sub_field('unite'); ?></p>
							</div>

					<?php $k = $k + 1;
						endwhile;
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mieux_vous_connaitre container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5 col-lg-6 text-left" id="pic" data-aos="fade-left" data-aos-duration="1500">
				<?php $pic = get_field('visuel__immeuble');
				//var_dump($pic);
				?>
				<img src="<?php echo $pic; ?>">
			</div>
			<div class="border_dark_grey d-none d-lg-block"></div>
			<div class="col-12 col-md-7 col-lg-6 title text-left connaitre_content" data-aos="fade-right" data-aos-duration="1500">
				<h2><?php the_field('titre_h3'); ?></h2>
				<h5><?php the_field('titre_h5_immeuble'); ?></h5>
				<div style="clear:both;"></div>
				<p class="">
					<?php the_field('texte_de_presentation_immeubles'); ?>
				</p>
				<button><a href="<?php the_field('lien_bouton') ?>"><?php the_field('titre_bouton') ?></a></button>
			</div>
		</div>
	</div>
	<div class="border_dark_grey d-none d-lg-block"></div>
</section>

<section class="raison-etre container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="container raison_detre_presentation" data-aos="fade-up" data-aos-duration="500">
		<div class="row">
			<div class="col-12 col-md-3 my-auto " id="raisondetre_title">
				<img src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/aiac-raisondetre-circle.svg">
				<span><?php the_field('raison_detre'); ?></span>
			</div>
			<div class="col-12 col-md-9" id="raisondetre_texte">
				<p class="raison"><?php the_field('raison_detre_contenu_texte'); ?></p>
			</div>
		</div>
	</div>
	<div class="border_grey d-none d-lg-block"></div>
</section>
<section class="approche container-fluid" data-aos="fade-up" data-aos-duration="1500">
	<div class="mx-15">
		<div class="">
			<div class="col-12 title text-lg-center">
				<h3><?php the_field('titre_h3_servir'); ?></h3>
				<p><?php the_field('texte_secondaire'); ?></p>
			</div>
			<div class="col-12 col-md-12 col-lg-12 garanties" data-aos="fade-up" data-aos-duration="2250">
				<div class="row justify-content-center">
					<?php
					if (have_rows('etapes')) :

						$k = 1;
						while (have_rows('etapes')) : the_row(); ?>
							<div class="col-12 col-md-2 col-lg-2 text-left garantie_item">
								<div class="garantie_item_container">
									<div class="etape-container mx-auto">
										<div class="data-container">
											<span class="numbers counter"><?php echo $k; ?></span>
											<small><?php $after = ($k == 1) ? 'ère' : 'ème';
													echo $after; ?></small>
											<p class="datacontainer"> étape</p>
										</div>
									</div>
									<p class="datacontainer text-center"><?php the_sub_field('nom_etape'); ?></p>
								</div>
							</div>
					<?php $k = $k + 1;
						endwhile;
					endif; ?>
					<div class="col-12 title text-center">
						<button><a href="<?php the_field('lien_bouton_team') ?>"><?php the_field('titre_bouton_team') ?></a></button>

					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!--<script>
	jQuery(document).ready(function() {
		jQuery('.counter').counterUp({
			delay: 100,
			time: 1000
		});
	});
</script> -->
<?php get_footer();
