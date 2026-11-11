<?php
/**
 * Template Name: QI About
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="qp-hero">
	<div class="qi-wrap">
		<a class="qi-back" href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; Back to home</a>
		<span class="qi-kicker">About Quickiphone</span>
		<h1>Travel data, <em>made simple.</em></h1>
		<p class="qi-lead">Quickiphone gives travelers fast, fairly priced eSIM data in 190+ destinations, with real people to help when you need it.</p>
	</div>
</section>
<section class="qi-section">
	<div class="qi-wrap">
		<div class="qi-grid qi-grid--4">
			<?php foreach ( array(
				array( 'Traveler-first choices', 'Plans designed around real trips, not complicated telecom language.' ),
				array( 'Transparent value', 'Clear allowances and honest one-time prices. No contracts, no surprise renewals.' ),
				array( 'Human support', 'Our team is available around the clock for installation, activation and connectivity.' ),
				array( 'Always improving', 'We listen to travelers and keep adding destinations and plans.' ),
			) as $v ) : ?>
			<div class="qi-card"><h3><?php echo esc_html( $v[0] ); ?></h3><p><?php echo esc_html( $v[1] ); ?></p></div>
			<?php endforeach; ?>
		</div>
		<p style="text-align:center;margin-top:36px"><a class="qi-btn qi-btn--yellow" href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">Find your plan</a></p>
	</div>
</section>
<?php get_footer(); ?>
