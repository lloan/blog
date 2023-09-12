<?php
/**
 *
 * Template Name: All Articles Template
 */

get_header();

$args = array(
	'post_type' => 'post',          // Ensure we're getting posts (not pages or custom post types)
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

	<div class="news-articles-header">
		<section>
			<h1>All Articles</h1>
			<span>Total of <?php echo $query->post_count; ?> articles ready to be read!</span>
		</section>
		<hr class="news-deco-line" aria-hidden="true">
	</div>

	<div class="c-main-container js-main-container news-articles">
		<?php include('template/articles.php'); ?>
	</div>

<?php get_footer(); ?>