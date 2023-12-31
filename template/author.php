<hr />
<div class="news-author">
	<section>
		<img class="news-author-image" src="<?php echo get_template_directory_uri() . '/public/images/me-256.jpg'?>" alt="<?php _e('Author Image'); ?>" />
		<section class="news-author-bio">
			<?php
			$author_id = get_the_author_meta('ID');

			// Get the author's bio (description)
			$author_bio = get_the_author_meta('description', $author_id);

			if (!empty($author_bio)) {
				// Display the author's bio
				echo esc_html($author_bio);
			}
			?>
			<p class="news-footer-social"><?php _e('Find me on'); ?>:
				<a href="https://github.com/lloan" aria-label="<?php _e('GitHub Profile', 'lloan');?>">
					<i class="fab fa-lg fa-github-alt" aria-hidden="true"></i>
				</a>
				<a href="https://www.linkedin.com/in/lloan" aria-label="<?php _e('LinkedIn Profile', 'lloan'); ?>">
					<i class="fab fa-lg fa-linkedin-in" aria-hidden="true"></i>
				</a>
				<a href="mailto:blog@lloan.mozmail.com" aria-label="<?php _e('Email', 'lloan'); ?>">
					<i class="fa-regular fa-envelope" aria-hidden="true"></i>
				</a>
			</p>
		</section>
	</section>
</div>