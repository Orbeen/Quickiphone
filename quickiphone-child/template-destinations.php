<?php
/**
 * Template Name: QI Destinations
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

$data = json_decode( (string) file_get_contents( get_stylesheet_directory() . '/data/destinations.json' ), true );
if ( ! is_array( $data ) ) { $data = array( 'plans' => array(), 'countries' => array(), 'regions' => array() ); }
foreach ( array( 'countries', 'regions' ) as $k ) {
	foreach ( $data[ $k ] as &$row ) { $row['imgUrl'] = qi_asset( 'dest/' . $row['img'] . '.jpg' ); }
	unset( $row );
}
$popular = array( 'Japan', 'United States', 'Türkiye', 'Saudi Arabia', 'UAE', 'United Kingdom', 'France', 'Spain' );
$q = isset( $_GET['q'] ) ? sanitize_text_field( wp_unslash( $_GET['q'] ) ) : '';
$data['popular'] = $popular;
$data['cart']    = home_url( '/cart/' );
$data['ids']     = get_option( 'qi_product_map', array() );
$data['start']   = $q;
?>
<div class="qi-dband">
<div class="qi-wrap qi-dest-top">
	<a class="qi-back" href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; Back to home</a>
	<div class="qi-seg" role="tablist"><button type="button" class="on" data-mode="countries">Popular Countries</button><button type="button" data-mode="regions">Multiple Countries</button></div>
	<div class="qi-tiles" data-tiles></div>
</div>

<section class="qi-dhero" data-hero>
	<div class="qi-wrap qi-dhero-in">
		<div>
			<span class="qi-eyebrow qi-eyebrow--yellow" data-kicker>Local eSIM plans</span>
			<h1 data-title>Explore Japan.</h1>
			<p class="tag" data-tag></p>
			<p class="sub">Reliable prepaid travel data with transparent pricing, instant QR delivery, and no roaming surprises.</p>
		</div>
		<div class="qi-pick">
			<label for="qi-country" data-pick-label>Select your country</label>
			<div><span class="code" data-code>JP</span><select id="qi-country" data-select></select></div>
		</div>
	</div>
</section>
</div>

<section class="qi-section qi-plans">
	<div class="qi-wrap">
		<p class="qi-kicker" data-avail>Available packages for</p>
		<h2 data-name>Japan</h2>
		<p class="qi-lead" data-net></p>
		<div class="qi-chipsbar" data-filters>
			<button type="button" class="on" data-f="">All plans</button><button type="button" data-f="Short trip">Short trip</button><button type="button" data-f="Light use">Light use</button><button type="button" data-f="Best value">Best value</button><button type="button" data-f="Heavy use">Heavy use</button>
		</div>
		<div class="qi-plangrid" data-plans></div>
	</div>
</section>

<section class="qi-section qi-white">
	<div class="qi-wrap">
		<div class="qi-center">
			<span class="qi-kicker">Every plan includes</span>
			<h2>Wholesale-grade coverage, made simple for travel.</h2>
		</div>
		<div class="qi-grid qi-grid--4 qi-incl">
			<?php foreach ( array(
				array( 'Fast activation', 'Your QR code arrives by email immediately after checkout.' ),
				array( 'No contract', 'Prepaid data with no subscription or surprise renewal.' ),
				array( 'Keep your number', 'Use Quickiphone for data while your primary SIM stays active.' ),
				array( 'Real support', 'Get setup help whenever you need it, wherever you land.' ),
			) as $i ) : ?>
			<div><i>✓</i><h3><?php echo esc_html( $i[0] ); ?></h3><p><?php echo esc_html( $i[1] ); ?></p></div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<div class="qi-center"><span class="qi-kicker">Before you choose</span><h2>A few useful details.</h2></div>
		<div class="qi-faqwrap">
			<?php foreach ( array(
				array( 'When does my plan start?', 'Most plans begin when the eSIM first connects to a supported network at your destination.' ),
				array( 'Can I top up later?', 'Yes. You can add a new plan to your eSIM at any time from your account.' ),
				array( 'Does the eSIM include calls or texts?', 'These plans are data-only. For data, calls and SMS together, see QuickComplete.' ),
			) as $f ) : ?>
			<div class="qi-faq-item"><button type="button"><span><?php echo esc_html( $f[0] ); ?></span><span>+</span></button><div class="a"><?php echo esc_html( $f[1] ); ?></div></div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<script type="application/json" id="qi-dest-data"><?php echo wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP ); ?></script>
<?php get_footer(); ?>
