<?php

/**
 * The template for displaying search forms
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
	<div class="input-group">
		<input class="field form-control " id="s" name="s" type="text" placeholder="<?php esc_attr_e('Search &hellip;', 'understrap'); ?>" value="<?php the_search_query(); ?>">
		<span class="input-group-append">
			<button id="searchsubmit" name="submit" type="submit"><i class="fas fa-search"></i></button>

		</span>
	</div>
</form>
