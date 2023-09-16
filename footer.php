<hr />
<footer role="contentinfo">
	<p>
		Copyright © lloan alas <?php echo date("Y"); ?>
	</p>
	<p class="news-footer-social">
		<a href="https://github.com/lloan" aria-label="GitHub Profile">
			<i class="fab fa-lg fa-github-alt" aria-hidden="true"></i>
		</a>
		<a href="https://www.linkedin.com/in/lloan" aria-label="LinkedIn Profile">
			<i class="fab fa-lg fa-linkedin-in" aria-hidden="true"></i>
		</a>
		<a href="mailto:blog@lloan.mozmail.com" aria-label="LinkedIn Profile">
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
	<?php
	}
	?>
</footer>

</body>
</html>
