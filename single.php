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

	<div class="news-useful-links hidden">
		<hr />
		<h2>Useful Links</h2>
		<ul class="news-links">

		</ul>
	</div>

	<script>
      // get all anchor links within the article
      const footnotes = document.querySelectorAll('.news-single-container p a');
      const anchorTexts = [];
      const anchorLabels = [];

      // Iterate through anchor tags
      footnotes.forEach((anchor, index) => {
        // Create a superscript element for the index
        const superscript = document.createElement('sup');
        superscript.textContent = `[${index + 1}] `;

        // Store the label for the current anchor
        anchorLabels.push(anchor.textContent);

        // Append the superscript element after the anchor text
        anchor.appendChild(superscript);

        // Store the modified text
        anchorTexts.push(anchor);
      });

      // Create a compilation element (e.g., a div)
      const newsLinksList = document.querySelector('.news-links');
      const newsLinksContainer = document.querySelector('.news-useful-links');

      if (anchorLabels.length !== 0) {
        newsLinksContainer.classList.remove('hidden');
      }

      // Iterate through the modified anchor texts and create a list
      anchorTexts.forEach((anchor, index) => {
        const listItem = document.createElement('span');
        listItem.innerHTML = `[${index + 1}] <strong>${anchorLabels[index]}</strong> - `;
        listItem.setAttribute('aria-hidden', 'true'); // Hide it from screen readers

        const link = document.createElement('a');
        link.href = footnotes[index].href;
        link.textContent = footnotes[index].textContent;
        link.setAttribute('aria-label', `${anchorLabels[index]} - ${footnotes[index].textContent}`); // Provide an accessible label
        link.tabIndex = 0; // Make it keyboard accessible

        listItem.appendChild(link);

        // Append the list item to the compilation element
        newsLinksList.appendChild(listItem);
      });
	</script>

<?php get_template_part('template/author'); ?>

<?php get_template_part('template/recent'); ?>

<?php get_footer(); ?>