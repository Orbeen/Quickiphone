<?php
/**
 * Template Name: QI QuickComplete
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$plans = array(
	array( 'UK', 'United Kingdom', 'England, Scotland, Wales & Northern Ireland', 'O2 / Vodafone / Three', 'qc-uk', array( array( 'Essential', '5 GB', '$19.90', '100 min', '100 SMS' ), array( 'Complete', '20 GB', '$34.90', '500 min', '500 SMS' ) ) ),
	array( 'USA', 'United States', 'Nationwide coverage across the United States', 'T-Mobile / AT&T', 'qc-usa', array( array( 'Essential', '10 GB', '$24.90', '200 min', '200 SMS' ), array( 'Complete', '25 GB', '$39.90', '500 min', '500 SMS' ) ) ),
	array( 'GL', 'Global', 'One eSIM across 50+ supported countries', 'Multiple premium partner networks', 'qc-global', array( array( 'Voyager', '5 GB', '$39.90', '60 min', '60 SMS' ), array( 'Complete', '10 GB', '$59.90', '120 min', '120 SMS' ) ) ),
);
$cart = home_url( '/cart/' );
$ids  = get_option( 'qi_product_map', array() );
?>
<section class="qc-hero">
	<div class="qi-wrap qc-hero-in">
		<div>
			<a class="qi-back qi-back--light" href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; Back to home</a>
			<span class="qi-kicker" style="color:var(--qi-yellow)">QuickComplete eSIM</span>
			<h1>More than data. <em>Your full mobile experience.</em></h1>
			<p class="lead">Stay reachable with one travel eSIM that includes high-speed data, voice minutes, and SMS.</p>
		</div>
		<div class="qc-glass">
			<div class="top"><div><small>QuickComplete</small><b>Everything in one eSIM</b></div><i>Q</i></div>
			<div class="tri">
				<div><span>Data</span><small>4G/5G</small></div>
				<div><span>Calls</span><small>Voice</small></div>
				<div><span>SMS</span><small>Texts</small></div>
			</div>
			<div class="now"><small>Available now</small><b>UK · USA · Global</b></div>
		</div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<span class="qi-kicker">Full-service plans</span>
		<h2>Choose where you want to connect.</h2>
		<p class="qi-lead">QuickComplete is currently available for the UK, USA, and selected global destinations.</p>
		<div class="qi-grid qi-grid--3 qc-cards">
			<?php foreach ( $plans as $p ) : ?>
			<article class="qc-card">
				<div class="ph" style="background-image:url('<?php echo qi_asset( 'dest/' . $p[4] . '.jpg' ); ?>')">
					<i><?php echo esc_html( $p[0] ); ?></i>
					<div><h3><?php echo esc_html( $p[1] ); ?></h3><small><?php echo esc_html( $p[2] ); ?></small></div>
				</div>
				<div class="b">
					<div class="meta"><span>Voice + Data + SMS</span><small>30-day plans</small></div>
					<?php foreach ( $p[5] as $k => $pl ) : ?>
					<div class="plan<?php echo 1 === $k ? ' hot' : ''; ?>">
						<div class="row"><small><?php echo esc_html( $pl[0] ); ?></small><small>From</small></div>
						<div class="row"><b class="gb"><?php echo esc_html( $pl[1] ); ?></b><b class="price"><?php echo esc_html( $pl[2] ); ?></b></div>
						<div class="row det"><span><?php echo esc_html( $pl[3] ); ?></span><span><?php echo esc_html( $pl[4] ); ?></span><span>30 days</span></div>
						<?php $pid = isset( $ids[ 'qc|' . $p[0] . '|' . $pl[0] ] ) ? (int) $ids[ 'qc|' . $p[0] . '|' . $pl[0] ] : 0; ?>
						<a class="qi-btn qi-btn--yellow" href="<?php echo esc_url( $pid ? add_query_arg( 'add-to-cart', $pid, $cart ) : $cart ); ?>">Buy now &rarr;</a>
					</div>
					<?php endforeach; ?>
					<p class="foot">Mobile number included<br><small><?php echo esc_html( $p[3] ); ?></small></p>
				</div>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qc-setup">
	<div class="qi-wrap">
		<span class="qi-kicker">One simple setup</span>
		<h2>Install once. Use it all.</h2>
		<div class="qi-grid qi-grid--3">
			<?php foreach ( array( array( '01', 'Choose', 'Pick a UK, USA, or Global plan.' ), array( '02', 'Install', 'Scan the QR code over Wi-Fi.' ), array( '03', 'Connect', 'Use data, calls, and SMS abroad.' ) ) as $s ) : ?>
			<div><span class="n"><?php echo esc_html( $s[0] ); ?></span><h3><?php echo esc_html( $s[1] ); ?></h3><p><?php echo esc_html( $s[2] ); ?></p></div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
