<?php get_header(); ?>
	<div class="c-preloader  js-preloader">
		<div class="c-preloader__spinner  t-preloader__spinner"></div>
	</div>

	<div class="news-single-container">
		<article>
		 <?php
		 if ( have_posts() ) {
			 while ( have_posts() ) {
				 the_post();
				 ?>
<!--				 <a class="news-go-home-icon" href="--><?php //echo get_home_url(); ?><!--" title="Go back home">-->
<!--					 <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>-->
<!--				 </a>-->
				 <span><?php the_date(); ?></span>

				 <?php the_title( '<h1>', '</h1>' ); ?>

				 <hr class="news-deco-line t-primary-color-line" aria-hidden="true">

				 <?php
				 the_content();
				 $categories = get_the_category(get_queried_object_id());
				 $tags = get_the_tags(get_queried_object_id());

				 ?>
				 <ul class="news-taxonomy-bubbles">
				 <?php
				 if (!empty($categories)) {
					 foreach ($categories as $category) {
						 echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
					 }
				 }

				 if (!empty($tags)) {
					 foreach ($tags as $tag) {
						 echo '<li><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a></li>';
					 }
				 }
				 ?>
				 </ul>
				 <?php
			 }
		 }
		 ?>
		</article>
	</div>
<?php get_template_part('template/share'); ?>

<?php get_template_part('template/author'); ?>

<?php get_template_part('template/recent'); ?>

<?php get_footer(); ?>