<!doctype html>
<html <?php language_attributes(); ?> <?php echo is_rtl() ? 'dir="rtl"' : 'dir="ltr"'; ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<div class="news-header-logo-container">
	<a class="news-go-home-icon" href="<?php echo get_home_url(); ?>" title="go home">
		<img class="news-header-logo" src="<?php echo get_template_directory_uri() . '/public/images/lloan.svg'; ?>" />
	</a>
</div>

<body class="lloan-blog">
