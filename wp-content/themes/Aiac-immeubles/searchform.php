<?php

/**
 * The template for displaying search forms
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<?php if (wp_is_mobile()) { ?>
	<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
		<div class="input-group">
			<input class="field form-control " id="s" name="s" type="text" placeholder="<?php esc_attr_e('Search &hellip;', 'understrap'); ?>" value="<?php the_search_query(); ?>">
			<span class="input-group-append">
				<button id="searchsubmit" name="submit" type="submit">OK</button>

			</span>
		</div>
	</form>
<?php
} else { ?>
	<div class="search-form-wrapper">
		<form class="search-form" method="get" id="searchformDesk" action="<?php echo esc_url(home_url('/')); ?>" role="search">
			<div class="input-group">
				<input class="field form-control " id="s" name="s" type="text" placeholder="Rechercher.." value="<?php the_search_query(); ?>">
				<button id="searchHeader" name="submit" type="submit"><span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
				</span>
			</div>
		</form>
	</div>
<?php } ?>
