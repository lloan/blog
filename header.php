<!doctype html>
<html <?php language_attributes(); ?> <?php echo is_rtl() ? 'dir="rtl"' : 'dir="ltr"'; ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<div class="mobile-menu-container hide-desktop">
	<button class="menu-toggle">
		<i class="fa-solid fa-bars" ></i>
	</button>
	<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="<?php _e('Home Page', 'lloan'); ?>">
		<img class="news-header-logo" src="<?php echo get_template_directory_uri() . '/public/images/lloan.svg'; ?>" alt="Logo" />
	</a>
</div>

<nav class="news-header-logo-container hide-mobile">
	<ul>
		<li>
			<a class="menu-item" href="<?php echo get_home_url() . '/articles/'; ?>" aria-label="<?php _e('Articles', 'lloan');?>">
				<?php _e('Articles', 'lloan');?>
			</a>
		</li>
		<li>
			<a class="menu-item" href="<?php echo get_home_url() . '/#education'; ?>" aria-label="<?php _e('Education', 'lloan');?>">
				<?php _e('Education', 'lloan');?>
			</a>
		</li>
		<li class="hide-mobile">
			<a class="menu-item" href="<?php echo get_home_url(); ?>" aria-label="Home Page">
				<img class="news-header-logo" src="<?php echo get_template_directory_uri() . '/public/images/lloan.svg'; ?>" alt="<?php _e('Logo', 'lloan');?>" />
			</a>
		</li>
		<li>
			<a class="menu-item" href="<?php echo get_home_url() . '/#experience'; ?>" aria-label="<?php _e('Experience', 'lloan');?>">
				<?php _e('Experience', 'lloan');?>
			</a>
		</li>
		<li>
			<a class="menu-item" href="<?php echo get_home_url() . '/projects'; ?>" aria-label="<?php _e('Projects', 'lloan');?>">
				<?php _e('Projects', 'lloan');?>
			</a>
		</li>
	</ul>
</nav>

<script>
  const toggler = document.querySelector('button.menu-toggle');
  const closeButton = document.querySelector('button.close-button');

  function toggleMenu() {
    const menuContainer = document.querySelector('nav.news-header-logo-container');

    menuContainer.classList.toggle('hide-mobile');
  }

  toggler.addEventListener('click', function(){
    toggleMenu();
  })
</script>

<body class="<?php echo body_class(); ?>">
