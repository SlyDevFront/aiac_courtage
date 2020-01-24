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
			<button id="searchsubmit" name="submit" type="submit">OK</button>

		</span>
	</div>
</form>
