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
					$website = get_field('website');
					$repo = get_field('github_repository');
					$visibility = get_field('visibility');
					?> 
					<?php the_title( '<h1>', '</h1>' ); ?>

					<hr class="news-deco-line t-primary-color-line" aria-hidden="true">

					<div class="projects-tech-tags mt-10">
						<p><?php _e('Technology', 'lloan');?>:</p>
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

<?php get_footer(); ?>