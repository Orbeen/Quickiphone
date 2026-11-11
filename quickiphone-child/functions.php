<?php
/**
 * Quickiphone Child theme functions.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'qi-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&display=swap', array(), null );
	wp_enqueue_style( 'divi-parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'qi-child', get_stylesheet_uri(), array( 'divi-parent', 'qi-fonts' ), filemtime( get_stylesheet_directory() . '/style.css' ) );
	wp_enqueue_script( 'qi-app', get_stylesheet_directory_uri() . '/app.js', array(), filemtime( get_stylesheet_directory() . '/app.js' ), true );
	if ( is_page_template( 'template-destinations.php' ) ) {
		$dir = get_stylesheet_directory();
		wp_enqueue_style( 'qi-dest', get_stylesheet_directory_uri() . '/assets/dest.css', array( 'qi-child' ), filemtime( $dir . '/assets/dest.css' ) );
		wp_enqueue_script( 'qi-dest', get_stylesheet_directory_uri() . '/assets/dest.js', array(), filemtime( $dir . '/assets/dest.js' ), true );
	}
	if ( is_page_template( 'template-quickcomplete.php' ) ) {
		wp_enqueue_style( 'qi-qc', get_stylesheet_directory_uri() . '/assets/qc.css', array( 'qi-child' ), filemtime( get_stylesheet_directory() . '/assets/qc.css' ) );
	}
	if ( is_page_template( 'template-faq.php' ) ) {
		wp_enqueue_style( 'qi-faq', get_stylesheet_directory_uri() . '/assets/faq.css', array( 'qi-child' ), filemtime( get_stylesheet_directory() . '/assets/faq.css' ) );
	}
	if ( is_page_template( 'template-support.php' ) ) {
		wp_enqueue_style( 'qi-support', get_stylesheet_directory_uri() . '/assets/support.css', array( 'qi-child' ), filemtime( get_stylesheet_directory() . '/assets/support.css' ) );
	}
	if ( is_page_template( array( 'template-legal.php', 'template-cart.php', 'template-account.php' ) ) ) {
		wp_enqueue_style( 'qi-pages', get_stylesheet_directory_uri() . '/assets/pages.css', array( 'qi-child' ), filemtime( get_stylesheet_directory() . '/assets/pages.css' ) );
	}
}, 20 );

add_filter( 'body_class', function ( $c ) {
	$c[] = 'qi';
	return $c;
} );

/* Handle the support form (no plugin needed). */
add_action( 'admin_post_nopriv_qi_support', 'qi_handle_support' );
add_action( 'admin_post_qi_support', 'qi_handle_support' );
function qi_handle_support() {
	if ( ! isset( $_POST['qi_nonce'] ) || ! wp_verify_nonce( $_POST['qi_nonce'], 'qi_support' ) ) {
		wp_die( 'Invalid request.' );
	}
	$name    = sanitize_text_field( $_POST['name'] ?? '' );
	$email   = sanitize_email( $_POST['email'] ?? '' );
	$topic   = sanitize_text_field( $_POST['topic'] ?? '' );
	$order   = sanitize_text_field( $_POST['order'] ?? '' );
	$subject = sanitize_text_field( $_POST['subject'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );
	if ( $name && is_email( $email ) && $message ) {
		$body = "Name: $name\nEmail: $email\nTopic: $topic\nOrder: $order\n\n$message";
		wp_mail( 'support@quickiphone.com', '[Ticket] ' . $subject, $body, array( 'Reply-To: ' . $email ) );
	}
	wp_safe_redirect( add_query_arg( 'sent', '1', wp_get_referer() ?: home_url( '/support/' ) ) );
	exit;
}

/* URL of a file in this theme's assets folder. */
function qi_asset( $path ) {
	return esc_url( get_stylesheet_directory_uri() . '/assets/' . ltrim( $path, '/' ) );
}

/* Shared data used by several templates. */
function qi_destinations() {
	return array(
		array( '🇯🇵', 'Japan', '1 GB – 20 GB · 4G/5G', '$4.50' ),
		array( '🇺🇸', 'United States', '1 GB – Unlimited · 4G/5G', '$3.90' ),
		array( '🇹🇷', 'Türkiye', '1 GB – 20 GB · 4G/5G', '$3.50' ),
		array( '🇹🇭', 'Thailand', '1 GB – Unlimited · 4G/5G', '$3.90' ),
	);
}
