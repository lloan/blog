<?php

function theme_setup() {
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'theme_setup');

// resources
function enqueue_styles_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/public/styles/main.css' );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/public/styles/light.css' );
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext');
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/4558c47446.js', [], null, null);

}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts' );

function enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );

// Remove the admin bar from the front-end for all users
add_filter('show_admin_bar', '__return_false');

function formatDateDifference($startDate, $endDate = null, $tense = 'present') {
	$start = new DateTime($startDate);

	if ($tense === 'future') {
		return $start->format('M Y');
	}

	$end = $endDate ? new DateTime($endDate) : new DateTime();  // If no end date is provided, use the current date

	$interval = $start->diff($end);

	$endFormat = $endDate ? $end->format('M Y') : 'Present';

	// If the difference is less than a year
	if ($interval->y === 0) {
		$months = $interval->m;
		// If there are any days beyond the full months, round the months up
		if ($interval->d > 0) {
			$months++;
		}
		return $start->format('M Y') . ' - ' . $endFormat . ' · ' . $months . ' mos';
	}

	return $start->format('M Y') . ' - ' . $endFormat . ' · ' . $interval->y . ' yrs ' . $interval->m . ' mos';
}

function minsToRead($content, $wordsPerMinute = 200) {
	$wordCount = str_word_count(strip_tags($content));
	$mins = ceil($wordCount / $wordsPerMinute);

	// Ensure a minimum of 1 minute
	if ($mins <= 1) {
		return '1 minute to read';
	}

	return $mins . ' min' . ($mins === 1 ? '' : 's') . ' to read';
}

function get_random_string() {
	return substr( str_shuffle( MD5( microtime() ) ), 0, 10 );
}

/**
 * Trimming a sentence by a maximum number of characters without slicing words
 *
 * @param $text
 * @param $max
 * @param string $marker
 *
 * @return string
 */

function trim_sentence_by_max_chars( $text, $max, $marker = '...' ) {
	$text       = trim( $text );
	$text_array = explode( ' ', $text );

	if ( count( $text_array ) > 1 && strlen( $marker ) + strlen( implode( ' ', $text_array ) ) > $max ) {
		while ( count( $text_array ) > 1 && strlen( $marker ) + strlen( implode( ' ', $text_array ) ) > $max ) {
			array_pop( $text_array );
		}

		$text = implode( ' ', $text_array ) . $marker;
	}

	return $text;
}

function get_facebook_share_url( $ID = null ) {
	$obj         = get_queried_object();
	$current_url = get_permalink( $obj->ID );

	$url = 'https://www.facebook.com/sharer/sharer.php?u=${url}&cache=' . get_random_string();

	return strtr( $url, [
		'${url}' => $current_url,
	] );
}

function the_facebook_share_url( $ID = null ) {
	echo get_facebook_share_url( $ID );
}

function get_twitter_share_url( $ID = null ) {
	$obj         = get_queried_object();
	$current_url = get_permalink( $obj->ID );

	$url = 'https://twitter.com/intent/tweet?url=${url}&text=${text}&cache=' . get_random_string();

	if ( ! $title = urlencode( trim_sentence_by_max_chars( get_post_meta( $obj->ID, '_yoast_wpseo_opengraph-title', true ), 116 ) ) ) {
		$title = trim_sentence_by_max_chars( get_the_title( $obj->ID ), 116 );
	}

	return strtr( $url, [
		'${url}'  => $current_url,
		'${text}' => $title
	] );
}

function the_twitter_share_url( $ID = null ) {
	echo get_twitter_share_url( $ID );
}

function get_linkedin_share_url( $ID = null ) {
	$obj         = get_queried_object();
	$current_url = get_permalink( $obj->ID );

	$url = 'https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}&summary=${summary}&cache=' . get_random_string();

	if ( ! $title = urlencode( get_post_meta( $obj->ID, '_yoast_wpseo_opengraph-title', true ) ) ) {
		$title = get_the_title( $obj );
	}

	if ( ! $summary = urlencode( get_post_meta( $obj->ID, '_yoast_wpseo_opengraph-description', true ) ) ) {
		$summary = get_the_excerpt( $obj );
	}

	return strtr( $url, [
		'${url}'     => $current_url,
		'${title}'   => $title,
		'${summary}' => $summary,
	] );
}

function the_linkedin_share_url( $ID = null ) {
	echo get_linkedin_share_url( $ID );
}

// Check if there are published posts
function has_published_posts() {
	$args = array(
		'post_type'      => 'post', // Change to your custom post type if needed
		'post_status'    => 'publish',
		'posts_per_page' => 1, // You can adjust the number of posts to check
	);

	return ( new WP_Query( $args ) )->have_posts();
}
