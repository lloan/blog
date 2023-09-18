<section class="o-section  t-section  ">
	<div class="o-section__header-bg  t-section__header"></div>
	<div class="o-section__content-bg  t-section__content"></div>
	<div class="o-container">
		<div class="o-section__container">
			<header class="o-section__header t-section__header">
				<div class="o-content">
					<h2 class="o-section__heading"> <?php _e('Articles', 'lloan'); ?> </h2>
					<span><a href="/articles"><?php _e('view all', 'lloan'); ?></a></span>
				</div>
			</header>
			<div class="o-section__content  t-section__content  o-section__full-bottom-space">
				<div class="o-grid  o-grid--gallery">
					<?php
					$args = array(
						'post_type' => 'post',          // Ensure we're getting posts (not pages or custom post types)
						'post_status' => 'publish',     // Only retrieve published posts
						'posts_per_page' => 6,          // Limit to 6 posts
						'orderby' => 'date',            // Order by post date
						'order' => 'DESC'               // Latest posts first
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
							$attachment_id = get_post_thumbnail_id(get_the_ID());
							$alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
							?>

							<div class="o-grid__col-sm-6 news-card" role="article" aria-label="<?php _e('News Card', 'lloan'); ?>">
								<div role="contentinfo" aria-label="<?php _e('Publication Date', 'lloan'); ?>">
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
								<div class="news-card-read-article" role="contentinfo" aria-label="<?php _e('Additional Information', 'lloan');?>">
							        <span>
							            <?php echo minsToRead( $post->post_content ); ?>
							        </span>
									<a href="<?php echo get_the_permalink(); ?>" class="news-read-article" role="link" tabindex="0">
										<?php _e('Read Article', 'lloan'); ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>

							<?php
						}
						wp_reset_postdata();  // Restore original post data
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>