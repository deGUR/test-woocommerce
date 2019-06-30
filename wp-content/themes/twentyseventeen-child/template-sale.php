<?php
/*
 * Template Name: Товары со скидкой
 */
get_header(); ?>

<div class="woo-site__box">
	<a href="<?php echo home_url()?>">
		<?php _e('Домашняя страница', 'twentyseventeen-child'); ?>
	</a>
</div>

<?php echo do_shortcode('[sale_products columns="1" per_page="-1"]'); ?>

<?php get_footer(); ?>
