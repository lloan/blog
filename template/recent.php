<?php
$previous_post = get_previous_post();
$next_post = get_next_post();
$is_single = empty($previous_post) ||  empty($next_post);

if (!(empty($previous_post)) || !empty($next_post)) { ?>
	<hr />
	<div class="news-recent-articles <?php echo $is_single ? "single-recent-article" : ""; ?>">
	<?php
	if (!empty($previous_post)) {
		$image = get_the_post_thumbnail_url($previous_post->ID, 'full');
		$attachment_id = get_post_thumbnail_id($previous_post->ID);
		$alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
		?>
		<div class="news-article-previous o-grid__col-sm-12">
			<div class="news-card  " role="article" aria-label="News Card">
				<div role="contentinfo" aria-label="Publication Date">
					<div class="c-number news-card-day"><?php echo get_the_date( "d", $previous_post); ?></div>
					<div class="news-card-month"><?php echo get_the_date( "M", $previous_post ); ?></div>
				</div>

				<a class="news-article-card-title" href="<?php echo get_the_permalink($previous_post); ?>" role="link" tabindex="0">
					<h3 id="news-title-<?php echo $previous_post->ID; ?>"> <?php echo get_the_title($previous_post); ?> </h3>
				</a>
				<hr class="news-deco-line t-primary-color-line" aria-hidden="true">

				<div class="news-card-container" aria-labelledby="news-title-<?php echo $previous_post->ID; ?>">
					<p> <?php
						$excerpt = get_the_excerpt($previous_post);

						if (strlen($excerpt) > 150) {
							$excerpt = substr($excerpt, 0, 150);
							$excerpt .= '...';
						}

						echo $excerpt;
						?>
					</p>
				</div>
				<img class="news-article-image" src="<?php echo $image; ?>" alt="<?php echo $alt_text; ?>" role="img" aria-label="<?php echo $alt_text; ?>">
				<div class="news-card-read-article" role="contentinfo" aria-label="Additional Information">
					<a href="<?php echo get_the_permalink($previous_post); ?>" class="news-read-article" role="link" tabindex="0">
						<i class="fa-solid fa-arrow-left" aria-hidden="true"></i> Read Previous Article
					</a>
				</div>
			</div>
		</div>
		<?php
	}

	if (!empty($next_post)) {
		$image = get_the_post_thumbnail_url($next_post->ID, 'full');
		$attachment_id = get_post_thumbnail_id($next_post->ID);
		$alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
		?>
		<div class="news-article-next o-grid__col-sm-12">
			<div class="news-card" role="article" aria-label="News Card">
				<div role="contentinfo" aria-label="Publication Date">
					<div class="c-number news-card-day"><?php echo get_the_date( "d", $next_post ); ?></div>
					<div class="news-card-month"><?php echo get_the_date( "M", $next_post ); ?></div>
				</div>

				<a class="news-article-card-title" href="<?php echo get_the_permalink($next_post); ?>" role="link" tabindex="0">
					<h3 id="news-title-<?php echo $next_post->ID; ?>"> <?php echo get_the_title($next_post); ?> </h3>
				</a>
				<hr class="news-deco-line t-primary-color-line" aria-hidden="true">

				<div class="news-card-container" aria-labelledby="news-title-<?php echo $next_post->ID; ?>">
					<p> <?php
						$excerpt = get_the_excerpt($next_post);

						if (strlen($excerpt) > 150) {
							$excerpt = substr($excerpt, 0, 150);
							$excerpt .= '...';
						}

						echo $excerpt;
						?>
					</p>
				</div>
				<img class="news-article-image" src="<?php echo $image; ?>" alt="<?php echo $alt_text; ?>" role="img" aria-label="<?php echo $alt_text; ?>">
				<div class="news-card-read-article" role="contentinfo" aria-label="Additional Information">
					<a href="<?php echo get_the_permalink($next_post); ?>" class="news-read-article" role="link" tabindex="0">
						Read Next Article <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
		<?php
	}
	?>
</div>
<?php
}
?>
