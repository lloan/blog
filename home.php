<?php get_header(); ?>

<div class="c-preloader  js-preloader">
    <div class="c-preloader__spinner  t-preloader__spinner"></div>
</div>

<div class="c-main-container  js-main-container">
	<?php get_template_part('template/header'); ?>

	<?php get_template_part('template/intro'); ?>

	<?php
	if ( has_published_posts() ) {
		get_template_part( 'template/news' );
	}
	?>

	<?php get_template_part('template/education'); ?>

	<?php get_template_part('template/experience'); ?>
</div>

<?php get_footer(); ?>