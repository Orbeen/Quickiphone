<?php
/**
 * Template Name: QI Cart
 * Placeholder: the site has no checkout yet, so the cart is always empty.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="qp-hero">
	<div class="qi-wrap">
		<a class="qi-back" href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">&larr; Continue shopping</a>
		<span class="qi-kicker">Your selection</span>
		<h1>Shopping cart.</h1>
		<p class="qi-lead">0 eSIMs ready for checkout.</p>
	</div>
</section>
<section class="qi-section">
	<div class="qi-wrap">
		<div class="qp-empty">
			<i>&#128722;</i>
			<h2>Your cart is empty.</h2>
			<p>Choose a QuickConnect data plan or a QuickComplete voice, data, and SMS package.</p>
			<div class="btns">
				<a class="qi-btn" href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">Shop QuickConnect</a>
				<a class="qi-btn qi-btn--yellow" href="<?php echo esc_url( home_url( '/quickcomplete/' ) ); ?>">Shop QuickComplete</a>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
