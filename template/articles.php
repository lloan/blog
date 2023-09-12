<?php

if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
		$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
		$attachment_id = get_post_thumbnail_id(get_the_ID());
		$alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
		?>

		<div class="o-grid__col-sm-6 o-grid__col-lg-4 news-card" role="article" aria-label="News Card">
			<div role="contentinfo" aria-label="Publication Date">
				<div class="c-number news-card-day"><?php echo get_the_date( "d" ); ?></div>
				<div class="news-card-month"><?php echo get_the_date( "M" ); ?></div>
			</div>

			<a class="news-article-card-title" href="<?php echo get_the_permalink(); ?>" role="link" tabindex="0">
				<h3 id="news-title-<?php echo get_the_ID(); ?>"> <?php echo get_the_title(); ?> </h3>
			</a>
			<hr class="news-deco-line t-primary-color-line" aria-hidden="true">

			<div class="news-card-container" aria-labelledby="news-title-<?php echo get_the_ID(); ?>">
				<p> <?php echo get_the_excerpt(); ?></p>
			</div>
			<img class="news-article-image" src="<?php echo $image; ?>" alt="<?php echo $alt_text; ?>" role="img" aria-label="<?php echo $alt_text; ?>">
			<div class="news-card-read-article" role="contentinfo" aria-label="Additional Information">
							        <span>
							            <?php echo minsToRead( $post->post_content ); ?>
							        </span>
				<a href="<?php echo get_the_permalink(); ?>" class="news-read-article" role="link" tabindex="0">
					Read Article <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>

		<?php
	}
	wp_reset_postdata();  // Restore original post data
}
?>