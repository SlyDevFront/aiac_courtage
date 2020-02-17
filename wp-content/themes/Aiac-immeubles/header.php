<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://kit.fontawesome.com/c991911575.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="container-fluid entete d-none d-sm-block">
		<div class="mx-15 ">
			<div class="row">
				<div class="col-12 col-sm-8 text-left">
					<p class="baseline ">
						<?php echo get_option('blogdescription'); ?>
					</p>
				</div>
				<div class="col-12 col-sm-4 text-right">
					<p class="link">
						<a href="http://prepaiacim.eanet.fr/" target="_blank" rel="noopener noreferrer">Immeubles /
							Syndic</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid header">
		<div class="mx-15">
			<div class="row" id="header_menu">
				<div class="col-6 col-lg-2 col-xl-3 my-auto text-md-right text-lg-left order-2 order-lg-1" id="logo">
					<?php if (has_custom_logo()) {
						the_custom_logo();
					} ?>
				</div>
				<div class="col-6 col-lg-8 col-xl-7 order-1 order-lg-2" id="menu">
					<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
				</div>
				<div class="col-2 text-lg-right my-auto d-none d-lg-block order-md-3" id="search">

					<ul class="icon">
						<li><a href="#searchBar" class="" data-toggle="search-form"><i class="searchIcon fa fa-search" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/company/aiac" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fas fa-bars"></i></a></li>
					</ul>
				</div>

			</div>
			<div class="col-12" id="searchformdesktop">
				<?php get_search_form();
				?>
			</div>
		</div>
	</div>
	<?php if (is_front_page()) {
		include 'inc/slider.php';
	} elseif (is_page_template('page-templates/domain-page.php')) { ?>
		<section class="container-fluid header-page header-page-domain my-auto">
			<div class="header-overlay">
				<div class="mx-15">
					<?php
					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<p class="unite" id="breadcrumbs">', '</p>');
					}
					?>
					<div class="row justify-content-center">
						<div class="col-12 col-lg-4">
							<div id="title_container">
								<img src="<?php the_field('icone_titre'); ?>" alt="">
								<h1 class="page-title text-center text-lg-left"><?php the_title(); ?></h1>
								<h5><?php the_field('baseline_titre'); ?></h5>
							</div>
						</div>
						<div class="col-12 col-lg-8" style="background: url('<?php the_field('background_header'); ?>">

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } else { ?>
		<section class="container-fluid header-page my-auto" style="background: url('<?php the_field('background_titre'); ?>">
			<div class="header-overlay">
				<div class="mx-15">
					<?php
					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<p class="unite" id="breadcrumbs">', '</p>');
					}
					?>
					<div class="row justify-content-center">
						<div class="col-12 ">
							<h1 class="page-title text-center text-lg-left"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
