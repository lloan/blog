<?php

get_header();

if (is_tag()) {
	$current_tag = get_queried_object();
	$tag_name = $current_tag->name;
}

if ( isset( $tag_name ) ) {
	$args = array(
		'post_type'      => 'post',          // Ensure we're getting posts (not pages or custom post types)
		'post_status'    => 'publish',     // Only retrieve published posts
		'posts_per_page' => - 1,          // Limit to 6 posts
		'orderby'        => 'date',            // Order by post date
		'order'          => 'DESC',               // Latest posts first
		'tag'            => $tag_name,
	);

	$query = new WP_Query( $args );
}
?>

	<div class="c-preloader js-preloader">
		<div class="c-preloader__spinner  t-preloader__spinner"></div>
	</div>

	<div class="c-main-container js-main-container news-articles">
		<div class="news-articles-header">
			<section>
				<h1 style="text-transform: capitalize;"><?php echo $tag_name; ?> <?php _e('Articles', 'lloan');?></h1>
				<span><?php _e('Total of');?> <?php echo $query->post_count; ?> <?php _e('articles ready to be read!', 'lloan');?></span>
			</section>
			<hr class="news-deco-line" aria-hidden="true">
		</div>
		<?php include('template/articles.php'); ?>
	</div>

<?php get_footer(); ?>