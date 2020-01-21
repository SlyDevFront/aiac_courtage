<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<section class="container-fluid footer" id="wrapper-footer">
	<div class="mx-15">
		<div class="row my-auto">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="row ">
						<div class="col-12 order-3 order-md-1 col-md-3 my-auto">
							<p class="copyright">
								© AIAC&nbsp;&nbsp;&nbsp;&nbsp; <a id="recla_footer" href="<?php the_permalink(367); ?>">Réclamation</a>
							</p>
						</div>
						<div class="col-6 order-1 order-md-2 col-md-6 my-auto text-md-center">
							<img src="<?php bloginfo('url') ?>/wp-content/themes/Aiac-immeubles/img/aiac-logo-footer.png" alt="">
						</div>
						<div class="col-6 order-2 order-md-3 col-md-3 my-auto text-right icons">
							<ul class="icon">
								<li><a href="#"><i class="fas fa-envelope"></i></a></li>
								<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>


				</footer><!-- #colophon -->

			</div>
			<!--col end -->
		</div><!-- row end -->
	</div><!-- wrapper end -->
</section>
<section class="container-fluid d-none d-md-block " id="footer_menu">
	<div class="mx-15">
		<div class="row ">
			<div class="col-md-12">
				<div class="col-12 col-md-12 my-auto text-center justify-content-center">
					<ul>
						<li><a href="#">Mentions légales</a></li>
						<li><a href="#">Politique de confidentialité</a></li>
						<li><a href="https://www.eanet.fr" target="_blank">Création: EANET</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function() {
		//alert('op');
		jQuery('.garantie_item_container ').each(function() {
			//jQuery(this).hoverdir();

		});
		jQuery('#searchsubmit').hover(function(e) {
			jQuery('#searchform input').css('visibility', "visible");
		});
		AOS.init();
	});
</script>
<?php wp_footer(); ?>
</body>

</html>
