<?php
/**
 *
 * Template Name: All Projects Template
 */

get_header();

$args = array(
	'post_type' => 'project',          // Ensure we're getting posts (not pages or custom post types)
	'post_status' => 'publish',     // Only retrieve published posts
	'posts_per_page' => -1,          // Limit to 6 posts
	'orderby' => 'date',            // Order by post date
	'order' => 'DESC'               // Latest posts first
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
			<?php include('template/projects.php'); ?>
		</div>

	</div>

<?php get_footer(); ?>