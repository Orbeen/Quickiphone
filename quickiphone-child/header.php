<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="qi-header">
	<div class="qi-wrap">
		<a class="qi-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Quickiphone"><img class="sym" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/quickiphone-symbol.png' ); ?>" alt=""><img class="word" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/quickiphone-wordmark.png' ); ?>" alt="Quickiphone"></a>
		<button class="qi-burger" aria-label="Toggle navigation" data-qi-burger>☰</button>
		<nav class="qi-nav" data-qi-nav>
			<a href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">Destinations</a>
			<div class="qi-drop">
				<a href="#" onclick="return false">eSIM ▾</a>
				<div class="qi-drop-menu">
					<a href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>"><b>QuickConnect</b><span>Travel data for maps, apps, and browsing.</span></a>
					<a href="<?php echo esc_url( home_url( '/quickcomplete/' ) ); ?>"><b>QuickComplete</b><span>Data, calls, and SMS in one eSIM.</span></a>
				</div>
			</div>
			<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a>
			<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Support</a>
		</nav>
		<div class="qi-actions">
			<a class="qi-pill qi-pill--red" href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">Top up</a>
			<a class="qi-pill qi-ico" href="<?php echo esc_url( home_url( '/cart/' ) ); ?>" aria-label="Cart">&#128722;</a>
			<a class="qi-pill" href="<?php echo esc_url( home_url( '/account/' ) ); ?>">&#128100; My account</a>
				<span class="qi-pill qi-lang"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/flags/us.svg' ); ?>" alt="" width="22" height="16"> &#8964;</span>
		</div>
	</div>
</header>
<main>
