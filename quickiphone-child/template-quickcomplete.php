<?php
/**
 * Template Name: QI QuickComplete
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$plans = array(
	array( 'United Kingdom', 'England, Scotland, Wales & Northern Ireland', 'O2 / Vodafone / Three', array( array( 'Essential', '5 GB', '$19.90', '100 min', '100 SMS' ), array( 'Complete', '20 GB', '$34.90', '500 min', '500 SMS' ) ) ),
	array( 'United States', 'Nationwide coverage across the United States', 'T-Mobile / AT&T', array( array( 'Essential', '10 GB', '$24.90', '200 min', '200 SMS' ), array( 'Complete', '25 GB', '$39.90', '500 min', '500 SMS' ) ) ),
	array( 'Global', 'One eSIM across 50+ supported countries', 'Multiple premium partner networks', array( array( 'Voyager', '5 GB', '$39.90', '60 min', '60 SMS' ), array( 'Complete', '10 GB', '$59.90', '120 min', '120 SMS' ) ) ),
);
?>
<section class="qi-hero">
	<div class="qi-wrap">
		<div>
			<span class="qi-eyebrow">QuickComplete eSIM</span>
			<h1>More than data. <em>Your full mobile experience.</em></h1>
			<p class="qi-lead">Stay reachable with one travel eSIM that includes high-speed data, voice minutes, and SMS.</p>
			<div class="qi-checks"><span>Data 4G/5G</span><span>Calls</span><span>SMS</span></div>
			<p style="margin-top:18px"><b>Available now:</b> UK · USA · Global</p>
		</div>
		<div class="qi-hero-art" style="background:linear-gradient(135deg,#111,#444)"><div class="qi-badge">Everything in one eSIM</div></div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<span class="qi-eyebrow">Full-service plans</span>
		<h2>Choose where you want to connect.</h2>
		<p class="qi-lead">QuickComplete is currently available for the UK, USA, and selected global destinations.</p>
		<div class="qi-grid qi-grid--3" style="margin-top:28px">
			<?php foreach ( $plans as $p ) : ?>
			<article class="qi-card">
				<h3><?php echo esc_html( $p[0] ); ?></h3>
				<p><?php echo esc_html( $p[1] ); ?><br><small>Voice + Data + SMS · 30-day plans</small></p>
				<?php foreach ( $p[3] as $pl ) : ?>
				<div class="qi-plan">
					<small><?php echo esc_html( $pl[0] ); ?></small><br>
					<b><?php echo esc_html( $pl[1] ); ?></b> · From <b><?php echo esc_html( $pl[2] ); ?></b><br>
					<small><?php echo esc_html( $pl[3] . ' · ' . $pl[4] . ' · 30 days' ); ?></small><br><br>
					<a class="qi-btn" href="<?php echo esc_url( home_url( '/cart/' ) ); ?>">Buy now</a>
				</div>
				<?php endforeach; ?>
				<p style="margin-top:14px"><small>Mobile number included · <?php echo esc_html( $p[2] ); ?></small></p>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section qi-dark">
	<div class="qi-wrap">
		<span class="qi-eyebrow" style="background:#fff2">One simple setup</span>
		<h2>Install once. Use it all.</h2>
		<div class="qi-grid qi-grid--3" style="margin-top:24px">
			<div><h3>Choose</h3><p>Pick a UK, USA, or Global plan.</p></div>
			<div><h3>Install</h3><p>Scan the QR code over Wi-Fi.</p></div>
			<div><h3>Connect</h3><p>Use data, calls, and SMS abroad.</p></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
