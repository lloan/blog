<!doctype html>
<html <?php language_attributes(); ?> <?php echo is_rtl() ? 'dir="rtl"' : 'dir="ltr"'; ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<button class="menu-toggle hide-desktop">
	<i class="fa-solid fa-bars" ></i>
	<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="Home Page">
		<img class="news-header-logo" src="<?php echo get_template_directory_uri() . '/public/images/lloan.svg'; ?>" alt="Logo" />
	</a>
</button>

<script>
const logo = document.querySelector('.menu-toggle a.menu-item');

logo.addEventListener("click", function(e){
  e.stopPropagation();
  window.location.href = ("<?php echo get_home_url(); ?>");
}, true)
</script>

<nav class="news-header-logo-container hide-mobile">
	<ul>
		<li>
			<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="Home">
				Blog
			</a>
		</li>
		<li>
			<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="Test Page 1">
				Education
			</a>
		</li>
		<li class="hide-mobile">
			<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="Home Page">
				<img class="news-header-logo" src="<?php echo get_template_directory_uri() . '/public/images/lloan.svg'; ?>" alt="Logo" />
			</a>
		</li>
		<li>
			<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="Test Page 2">
				Experience
			</a>
		</li>
		<li>
			<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="Test Page 3">
				Code
			</a>
		</li>
	</ul>
</nav>

<script>
	const toggler = document.querySelector('button.menu-toggle');

	toggler.addEventListener('click', function(e){
	  e.preventDefault();

	  const menuContainer = document.querySelector('nav.news-header-logo-container');

	  menuContainer.classList.toggle('hide-mobile');

	  console.log(e);

	})
</script>

<body class="lloan-blog">
