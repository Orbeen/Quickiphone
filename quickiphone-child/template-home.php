<?php
/**
 * Template Name: QI Home
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$dest = home_url( '/destinations/' );
?>
<section class="qi-hero">
	<div class="qi-wrap">
		<div>
			<span class="qi-eyebrow">Instant data in 190+ countries</span>
			<h1>See the world. <em>Stay connected with Quickiphone eSIM.</em></h1>
			<p class="qi-lead">Affordable eSIM data for every trip. No roaming fees, no plastic SIMs, no surprises.</p>
			<form class="qi-search" action="<?php echo esc_url( $dest ); ?>" method="get">
				<input type="text" name="q" list="qi-countries" autocomplete="off" placeholder="Where are you traveling?" aria-label="Search destinations">
				<button type="submit" aria-label="Search">→</button>
			</form>
			<div class="qi-checks"><span>Ready in 2 minutes</span><span>Secure checkout</span><span>24/7 support</span></div>
		</div>
		<div class="qi-hero-art" role="img" aria-label="Turquoise coastal city, ready to explore" style="background:url('<?php echo qi_asset( 'img/hero.jpg' ); ?>') center/cover">
			<div class="qi-badge">✓ You're connected</div>
			<div class="qi-esim-card">
				<small>YOUR ESIM · ACTIVE</small>
				<div><b>🇪🇺 Europe Explorer</b></div>
				<small>39 countries · 10 GB</small>
				<div class="bar"><i></i></div>
				<small>7.2 GB left · 18 days</small>
			</div>
		</div>
	</div>
</section>

<section class="qi-slider" data-qi-slider>
	<?php
	$slides = array(
		array( 'slide2', 'Traveler photographing a city', 'Arrive connected', 'Your trip starts before you land.', 'Install your Quickiphone eSIM before takeoff and step into your destination ready for maps, messages, and every next move.' ),
		array( 'slide1', 'Traveler checking her phone at the airport', 'Made for exploring', 'One signal. Every city.', 'Move through new streets with fast travel data, local insight, and no time wasted searching for airport Wi-Fi.' ),
		array( 'slide3', 'Traveler walking with luggage', 'No roaming fees', 'Go further for less.', 'Clear allowances and honest pricing across 190+ destinations.' ),
		array( 'slide4', 'Traveler using a smartphone', 'Always on', 'Stay connected across borders.', 'Regional plans keep you online on every leg of the journey.' ),
	);
	foreach ( $slides as $i => $s ) : ?>
	<div class="qi-slide<?php echo 0 === $i ? ' on' : ''; ?>" style="background-image:url('<?php echo qi_asset( 'img/' . $s[0] . '.jpg' ); ?>')" role="img" aria-label="<?php echo esc_attr( $s[1] ); ?>">
		<div class="qi-wrap">
			<span class="qi-eyebrow qi-eyebrow--yellow"><?php echo esc_html( $s[2] ); ?></span>
			<h2><?php echo esc_html( $s[3] ); ?></h2>
			<p><?php echo esc_html( $s[4] ); ?></p>
			<a class="qi-btn qi-btn--yellow" href="<?php echo esc_url( $dest ); ?>">Find your eSIM &rarr;</a>
		</div>
	</div>
	<?php endforeach; ?>
	<div class="qi-slider-ui qi-wrap">
		<div class="qi-dots"><?php foreach ( $slides as $i => $s ) : ?><button type="button" class="<?php echo 0 === $i ? 'on' : ''; ?>" aria-label="Slide <?php echo (int) $i + 1; ?>"></button><?php endforeach; ?></div>
		<div class="qi-arrows"><button type="button" data-dir="-1" aria-label="Previous">&larr;</button><button type="button" data-dir="1" aria-label="Next">&rarr;</button></div>
	</div>
</section>

<section class="qi-trust">
	<div class="qi-wrap">
		<span>Trusted by 1M+ travelers</span>
		<span><span class="qi-stars">★★★★★</span> 4.8 on Trustpilot</span>
		<span>Fast 4G / 5G networks</span>
		<span>Money-back guarantee</span>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<div class="qi-head">
			<div><span class="qi-eyebrow">Popular right now</span><h2>Go further for less.</h2></div>
			<a class="qi-btn qi-btn--light" href="<?php echo esc_url( $dest ); ?>">View all 190+ destinations</a>
		</div>
		<div class="qi-grid qi-grid--4">
			<?php
			$photos = array( 'Japan' => array( 'japan', 'JP' ), 'United States' => array( 'usa', 'US' ), 'Türkiye' => array( 'turkiye', 'TR' ), 'Thailand' => array( 'thailand', 'TH' ) );
			foreach ( qi_destinations() as $d ) :
				$p = $photos[ $d[1] ] ?? array( '', '' ); ?>
			<a class="qi-card qi-dest" href="<?php echo esc_url( $dest ); ?>" aria-label="See plans for <?php echo esc_attr( $d[1] ); ?>">
				<div class="img" style="background-image:url('<?php echo qi_asset( 'img/' . $p[0] . '.jpg' ); ?>')"><span class="code"><?php echo esc_html( $p[1] ); ?></span></div>
				<div class="body">
					<h3><?php echo esc_html( $d[1] ); ?></h3>
					<small><?php echo esc_html( $d[2] ); ?></small>
					<div class="foot"><span><small>FROM</small><b class="price"><?php echo esc_html( $d[3] ); ?></b></span><i class="go">&rarr;</i></div>
				</div>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section qi-dark">
	<div class="qi-wrap qi-how">
		<div>
			<span class="qi-kicker">How it works</span>
			<h2>Connected before you finish packing.</h2>
			<p class="qi-lead">Choose your destination, install in a few taps, and switch on your data when you land.</p>
			<a class="qi-btn qi-btn--yellow" href="<?php echo esc_url( $dest ); ?>">Find your plan</a>
		</div>
		<?php foreach ( array(
			array( '01', 'Choose a plan', 'Pick a country or regional package that fits your trip.' ),
			array( '02', 'Install your eSIM', 'Scan your QR code and follow the simple setup guide.' ),
			array( '03', 'Land & connect', "Turn on your eSIM at your destination. You're online." ),
		) as $s ) : ?>
		<div class="qi-dcard"><span class="n"><?php echo esc_html( $s[0] ); ?></span><h3><?php echo esc_html( $s[1] ); ?></h3><p><?php echo esc_html( $s[2] ); ?></p></div>
		<?php endforeach; ?>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<span class="qi-kicker">Multi-country plans</span>
		<h2>One eSIM. Many borders.</h2>
		<div class="qi-regions">
			<?php foreach ( array( array( 'EU', 'Europe', '39 countries', '$4.90' ), array( '🌏', 'Asia Pacific', '18 countries', '$5.50' ), array( '🌎', 'North America', '3 countries', '$6.00' ) ) as $r ) : ?>
			<a href="<?php echo esc_url( $dest ); ?>"><i class="ic"><?php echo esc_html( $r[0] ); ?></i><span><b><?php echo esc_html( $r[1] ); ?></b><small><?php echo esc_html( $r[2] ); ?></small></span><em class="from"><small>From</small><b><?php echo esc_html( $r[3] ); ?></b></em></a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section qi-white">
	<div class="qi-wrap">
		<div class="qi-center">
			<span class="qi-kicker">eSIM, explained</span>
			<h2>From checkout to connected.</h2>
			<p class="qi-lead" style="margin-inline:auto">A simple digital setup designed around the way real people travel.</p>
		</div>
		<div class="qi-grid qi-grid--3 qi-pcards">
			<?php foreach ( array(
				array( 'step1', '01', 'Choose your plan', 'Pick a country, regional, or full-service eSIM that fits your journey.' ),
				array( 'step2', '02', 'Scan your QR code', 'Install your eSIM over Wi-Fi in just a few guided steps before departure.' ),
				array( 'step3', '03', 'Land and connect', 'Switch on your Quickiphone line when you arrive and start exploring.' ),
			) as $s ) : ?>
			<article class="qi-pcard"><div class="ph" style="background-image:url('<?php echo qi_asset( 'img/' . $s[0] . '.jpg' ); ?>')"><i><?php echo esc_html( $s[1] ); ?></i></div><div class="b"><h3><?php echo esc_html( $s[2] ); ?></h3><p><?php echo esc_html( $s[3] ); ?></p></div></article>
			<?php endforeach; ?>
		</div>
		<?php
		$faq = array(
			array( 'Can I keep my regular number?', 'Yes. Keep your primary SIM active for calls and messages while Quickiphone handles affordable travel data.' ),
			array( 'When does the plan start?', 'Most plans begin when the eSIM first connects to a supported network at your destination.' ),
			array( 'Do I need to enable data roaming?', 'Yes, enable Data Roaming only on the Quickiphone line so it can connect through partner networks.' ),
			array( 'What if I need help?', 'Our support team is available around the clock to help with installation, activation, and connectivity.' ),
		); ?>
		<div class="qi-faqwrap">
			<?php foreach ( $faq as $f ) : ?>
			<div class="qi-faq-item"><button type="button"><span><?php echo esc_html( $f[0] ); ?></span><span>+</span></button><div class="a"><?php echo esc_html( $f[1] ); ?></div></div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap qi-center">
		<span class="qi-kicker">Trusted travel ecosystem</span>
		<h2>Our partners at a glance.</h2>
		<p class="qi-lead" style="margin-inline:auto">Built for travelers moving through the world’s busiest airports and airline networks.</p>
		<div class="qi-partners" style="justify-content:center;margin-top:28px">
			<?php foreach ( array( 'Emirates', 'Qatar Airways', 'British Airways', 'Lufthansa', 'Turkish Airlines', 'Singapore Airlines', 'Air France', 'Delta' ) as $p ) : ?>
			<span><?php echo esc_html( $p ); ?></span>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section qi-black">
	<div class="qi-wrap">
		<div class="qi-head">
			<div><span class="qi-kicker">Read our latest</span><h2>Travel better with the right signal.</h2></div>
			<a class="qi-link" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">Explore travel guides →</a>
		</div>
		<div class="qi-grid qi-grid--4">
			<?php foreach ( array(
				array( 'blog1', 'eSIM guide', 'Your complete 10-minute eSIM setup guide', 'From checking compatibility to switching on data roaming when you land.' ),
				array( 'blog2', 'Travel smarter', 'How much mobile data does your next trip need?', 'A practical breakdown for maps, messaging, social media, streaming, and work.' ),
				array( 'blog3', 'Airport tips', 'Airport Wi-Fi or travel eSIM: which is safer?', 'What every traveler should know before connecting in a busy terminal.' ),
				array( 'blog4', 'Multi-country travel', 'One eSIM, five borders, zero SIM swaps', 'Why regional plans make connected rail trips and multi-stop holidays easier.' ),
			) as $b ) : ?>
			<a class="qi-bcard" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><div class="ph" style="background-image:url('<?php echo qi_asset( 'img/' . $b[0] . '.jpg' ); ?>')"></div><div class="b"><small><?php echo esc_html( $b[1] ); ?></small><h3><?php echo esc_html( $b[2] ); ?></h3><p><?php echo esc_html( $b[3] ); ?></p><span>Read article →</span></div></a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section qi-reviews">
	<div class="qi-wrap qi-rev">
		<div>
			<span class="qi-kicker">See what happy customers are saying</span>
			<p class="rate"><b>4.5/5</b> <span class="qi-stars">★★★★★</span> <small>Google customer rating</small></p>
			<h2>Real trips. Real connections.</h2>
		</div>
		<div class="qi-revcard">
			<div class="ph" style="background-image:url('<?php echo qi_asset( 'img/reviewer.jpg' ); ?>')" role="img" aria-label="Daniel and Sofia, Quickiphone customers"></div>
			<div class="b"><div class="qi-stars">★★★★★</div><p>“My maps worked the moment I landed in Tokyo. Setup took less time than collecting my luggage.”</p><b>Maya R.</b><small>Verified traveler · Japan</small></div>
		</div>
	</div>
</section>

<section class="qi-section qi-white">
	<div class="qi-wrap qi-why">
		<div class="ph" style="background-image:url('<?php echo qi_asset( 'img/why.jpg' ); ?>')" role="img" aria-label="Traveler using a phone while exploring"><span>Built around where you want to go next.</span></div>
		<div>
			<span class="qi-kicker">Why Quickiphone</span>
			<h2>Your journey shapes our company.</h2>
			<p class="qi-lead">We listen to what travelers need, value the way you want to stay connected, and build our products around those wishes. Clear plans, honest pricing, responsive support, and practical choices guide every decision we make.</p>
			<div class="qi-why-grid">
				<?php foreach ( array(
					array( 'Traveler-first choices', 'Plans designed around real trips, not complicated telecom language.' ),
					array( 'Transparent value', 'Clear allowances, validity, coverage, and pricing before you buy.' ),
					array( 'Human support', 'Help when setup feels unfamiliar or a journey changes unexpectedly.' ),
					array( 'Always improving', 'Customer feedback directly influences the experience we build next.' ),
				) as $w ) : ?>
				<div><i>✓</i><h3><?php echo esc_html( $w[0] ); ?></h3><p><?php echo esc_html( $w[1] ); ?></p></div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
