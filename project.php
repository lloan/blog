<?php
/**
 *
 * Template Name: All Projects Template
 */

get_header();

$args = array(
	'post_type' => 'project',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'orderby' => 'date',
	'order' => 'DESC'
);

$query = new WP_Query($args);
?>

	<div class="c-preloader js-preloader">
		<div class="c-preloader__spinner  t-preloader__spinner"></div>
	</div>

	<div class="c-main-container js-main-container news-articles">
		<div class="news-articles-header">
			<section>
				<h1><?php _e('Projects', 'lloan');?></h1>
			</section>
			<hr class="news-deco-line" aria-hidden="true">
		</div>

		<?php include('template/projects.php'); ?>
	</div>

<?php get_footer(); ?>