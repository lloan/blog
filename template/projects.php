<?php

if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
		$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
		$attachment_id = get_post_thumbnail_id(get_the_ID());
		$alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
		$website = get_field('website');
		$repo = get_field('github_repository');
		?>

		<div class="o-grid__col-sm-6 o-grid__col-lg-6 news-card" role="article" aria-label="News Card">

			<a class="news-article-card-title" href="<?php echo get_the_permalink(); ?>" role="link" tabindex="0">
				<h3 id="news-title-<?php echo get_the_ID(); ?>"> <?php echo get_the_title(); ?> </h3>
			</a>
			<hr class="news-deco-line projects-deco-line t-primary-color-line" aria-hidden="true">
			<p> <?php echo get_the_excerpt(); ?></p>
			<p class="projects-links">
				<?php
				if (!empty($website)) {
					?>
					<a href="<?php echo $website; ?>" class="news-read-article" role="link" tabindex="0">
						<i class="fa-solid fa-globe" aria-hidden="true"></i>
					</a>
					<?php
				}
				?>

				<?php
				if (!empty($repo)) {
					?>
					<a href="<?php echo $repo; ?>" class="news-read-article" role="link" tabindex="0">
						<i class="fa-brands fa-github" aria-hidden="true"></i>
					</a>
					<?php
				}
				?>
			</p>
			<div class="news-card-container" aria-labelledby="news-title-<?php echo get_the_ID(); ?>">
				<div class="projects-tech-tags">
					<ul aria-label="Technologies Used">
						<?php
						$tech = get_field('technology');

						foreach ($tech as $t) {
							?>
							<li>
								<?php echo $t['name'] ?>
							</li>
							<?php
						}
						?>
					</ul>
				</div>
			</div>
			<a href="<?php echo get_the_permalink(); ?>" class="news-read-article" role="link" tabindex="0">
				<img class="news-article-image" src="<?php echo $image; ?>" alt="<?php echo $alt_text; ?>" role="img" aria-label="<?php echo $alt_text; ?>">
				<div class="news-card-read-article projects-view" role="contentinfo" aria-label="<?php _e('Additional Information', 'lloan'); ?>">
					<?php _e('View Project', 'lloan'); ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</div>
			</a>
		</div>
		<?php
	}
	wp_reset_postdata();  // Restore original post data
}
?>