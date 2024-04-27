<?php

get_header();

if (is_category()) {
	$current_category = get_queried_object();
	$category_name = $current_category->name;
}

if (isset($category_name)) {
	$args = array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => - 1,
		'orderby'        => 'date',
		'order'          => 'DESC',
		'category_name'  => $category_name,
	);

	$query = new WP_Query($args);
}
?>

	<div class="c-preloader js-preloader">
		<div class="c-preloader__spinner  t-preloader__spinner"></div>
	</div>

	<div class="c-main-container js-main-container news-articles">
		<div class="news-articles-header">
			<section>
				<h1 style="text-transform: capitalize;"><?php echo $category_name; ?> <?php _e('Articles', 'lloan');?></h1>
				<span><?php _e('Total of', 'lloan');?> <?php echo $query->post_count; ?> <?php _e('articles ready to be read!', 'lloan');?></span>
			</section>
			<hr class="news-deco-line" aria-hidden="true">
		</div>
		<?php include('template/articles.php'); ?>
	</div>

<?php get_footer(); ?>