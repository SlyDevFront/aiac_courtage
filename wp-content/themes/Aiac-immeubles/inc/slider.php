<section class="container-fluid slider_home">
	<?php
	if (have_rows('slider')) :
		$i = 0; // Set the increment variable
		echo '<div id="home_slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators d-none d-lg-block">';
		while (have_rows('slider')) : the_row(); ?>

			<li data-target="#home_slider" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>"><?php echo $i + 1; ?></li>

		<?php $i++; // Increment the increment variable

		endwhile; //End the loop

		echo 	'</ol>
		  <div class="carousel-inner">';
		$i = 0; // Set the increment variable
		while (have_rows('slider')) : the_row();

			$image = get_sub_field('visuel');
			$text = get_sub_field('titre_1');
			$text2 = get_sub_field('titre_2');
			$link = get_sub_field('lien_bouton_cta');
		?>

			<div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
				<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
				<div class="carousel-caption d-block">
					<div class="carousel-caption-content">
						<h5><?php echo $text2; ?></h5>
						<h2><?php echo $text; ?></h2>
						<button><a href="<?php echo $link; ?>">Découvrir</a></button>
					</div>

				</div>
			</div>
	<?php $i++; // Increment the increment variable
		endwhile; //End the loop

		echo '</div>
		</div>';
	endif;
	?>
	</div>

</section>
