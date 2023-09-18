<hr />
<footer role="contentinfo">
	<p>
		<?php _e('Copyright', 'lloan');?> © lloan alas <?php echo date("Y"); ?>
	</p>
	<p class="news-footer-social">
		<a href="https://github.com/lloan" aria-label="<?php _e('GitHub Profile', 'lloan');?>">
			<i class="fab fa-lg fa-github-alt" aria-hidden="true"></i>
		</a>
		<a href="https://www.linkedin.com/in/lloan" aria-label="<?php _e('LinkedIn Profile', 'lloan');?>">
			<i class="fab fa-lg fa-linkedin-in" aria-hidden="true"></i>
		</a>
		<a href="mailto:blog@lloan.mozmail.com" aria-label="<?php _e('Email', 'lloan');?>">
			<i class="fa-regular fa-envelope" aria-hidden="true"></i>
		</a>
	</p>
	<?php wp_footer(); ?>

	<?php
	if (strpos($_SERVER['HTTP_HOST'], 'local') === false) {
	?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EL23GNF0Z7"></script>
	<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-EL23GNF0Z7');
	</script>
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
            link.textContent = footnotes[index].href;
            link.setAttribute('aria-label', `${anchorLabels[index]} - ${footnotes[index].textContent}`); // Provide an accessible label
            link.tabIndex = 0; // Make it keyboard accessible

            listItem.appendChild(link);

            // Append the list item to the compilation element
            newsLinksList.appendChild(listItem);
          });

          const usefulLinksButton = document.querySelector('.news-useful-links button');

          usefulLinksButton.addEventListener('click', function(){
            const state = usefulLinksButton.getAttribute('aria-expanded');
          })

          // Get the button element by its id
          const toggleButton = document.getElementById('toggleButton');

          // Add a click event listener to the button
          toggleButton.addEventListener('click', () => {
            // Toggle the aria-expanded attribute
            const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
            toggleButton.setAttribute('aria-expanded', !isExpanded);

            // Toggle the button text
            toggleButton.textContent = isExpanded ? '[+]' : '[-]';

            // Toggle the visibility of the links section
            newsLinksList.classList.toggle('hidden');
          });
</script>
	<?php
	}
	?>
</footer>

</body>
</html>
