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
				<input type="text" name="q" placeholder="Where are you traveling?" aria-label="Search destinations">
				<button type="submit" aria-label="Search">→</button>
			</form>
			<div class="qi-checks"><span>Ready in 2 minutes</span><span>Secure checkout</span><span>24/7 support</span></div>
		</div>
		<div class="qi-hero-art" role="img" aria-label="Turquoise coastal city, ready to explore">
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

<section class="qi-section">
	<div class="qi-wrap">
		<span class="qi-eyebrow">Made for exploring</span>
		<h2>One signal. Every city.</h2>
		<p class="qi-lead">Move through new streets with fast travel data, local insight, and no time wasted searching for airport Wi-Fi.</p>
		<p><a class="qi-btn" href="<?php echo esc_url( $dest ); ?>">Find your eSIM</a></p>
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
			<?php foreach ( qi_destinations() as $d ) : ?>
			<article class="qi-card qi-dest">
				<div class="img"></div>
				<h3><?php echo esc_html( $d[0] . ' ' . $d[1] ); ?></h3>
				<small><?php echo esc_html( $d[2] ); ?></small>
				<p><small>FROM</small><br><span class="price"><?php echo esc_html( $d[3] ); ?></span></p>
				<a class="qi-btn" href="<?php echo esc_url( $dest ); ?>">See plans for <?php echo esc_html( $d[1] ); ?></a>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section qi-dark">
	<div class="qi-wrap">
		<span class="qi-eyebrow" style="background:#fff2">How it works</span>
		<h2>Connected before you finish packing.</h2>
		<p class="qi-lead" style="color:#cfcfc5">Choose your destination, install in a few taps, and switch on your data when you land.</p>
		<div class="qi-grid qi-grid--3 qi-steps" style="margin:32px 0">
			<div class="qi-card" style="background:#222"><div class="num" style="color:#111">1</div><h3>Choose a plan</h3><p>Pick a country or regional package that fits your trip.</p></div>
			<div class="qi-card" style="background:#222"><div class="num" style="color:#111">2</div><h3>Install your eSIM</h3><p>Scan your QR code and follow the simple setup guide.</p></div>
			<div class="qi-card" style="background:#222"><div class="num" style="color:#111">3</div><h3>Land &amp; connect</h3><p>Turn on your eSIM at your destination. You're online.</p></div>
		</div>
		<a class="qi-btn qi-btn--red" href="<?php echo esc_url( $dest ); ?>">Find your plan</a>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<span class="qi-eyebrow">Multi-country plans</span>
		<h2>One eSIM. Many borders.</h2>
		<div class="qi-grid qi-grid--3" style="margin-top:28px">
			<a class="qi-card qi-region" href="<?php echo esc_url( $dest ); ?>"><b>🇪🇺 Europe</b>39 countries<br><small>From</small> <b>$4.90</b></a>
			<a class="qi-card qi-region" href="<?php echo esc_url( $dest ); ?>"><b>Asia Pacific</b>18 countries<br><small>From</small> <b>$5.50</b></a>
			<a class="qi-card qi-region" href="<?php echo esc_url( $dest ); ?>"><b>North America</b>3 countries<br><small>From</small> <b>$6.00</b></a>
		</div>
	</div>
</section>

<section class="qi-section" style="background:#fff">
	<div class="qi-wrap qi-grid qi-grid--2" style="align-items:center">
		<div>
			<div class="qi-stars">★★★★★</div>
			<p class="serif" style="font-size:26px">“Installed it at the airport, landed in Tokyo, and my maps were working before I reached baggage claim.”</p>
			<b>Maya R.</b><br><small>Verified traveler · Japan eSIM</small>
		</div>
		<div class="qi-hero-art" style="aspect-ratio:16/10;background:linear-gradient(135deg,#37a6c9,#9fd6e8)"><div class="qi-badge" style="right:20px">Less time hunting for Wi-Fi. More time out there.</div></div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<span class="qi-eyebrow">eSIM, explained</span>
		<h2>From checkout to connected.</h2>
		<p class="qi-lead">A simple digital setup designed around the way real people travel.</p>
		<div class="qi-grid qi-grid--3" style="margin:28px 0">
			<article class="qi-card"><h3>Choose your plan</h3><p>Pick a country, regional, or full-service eSIM that fits your journey.</p></article>
			<article class="qi-card"><h3>Scan your QR code</h3><p>Install your eSIM over Wi-Fi in just a few guided steps before departure.</p></article>
			<article class="qi-card"><h3>Land and connect</h3><p>Switch on your Quickiphone line when you arrive and start exploring.</p></article>
		</div>
		<?php
		$faq = array(
			array( 'Can I keep my regular number?', 'Yes. Keep your primary SIM active for calls and messages while Quickiphone handles affordable travel data.' ),
			array( 'When does the plan start?', 'Most plans begin when the eSIM first connects to a supported network at your destination.' ),
			array( 'Do I need to enable data roaming?', 'Yes, enable Data Roaming only on the Quickiphone line so it can connect through partner networks.' ),
			array( 'What if I need help?', 'Our support team is available around the clock to help with installation, activation, and connectivity.' ),
		);
		foreach ( $faq as $f ) : ?>
		<div class="qi-faq-item"><button type="button"><span><?php echo esc_html( $f[0] ); ?></span><span>+</span></button><div class="a"><?php echo esc_html( $f[1] ); ?></div></div>
		<?php endforeach; ?>
	</div>
</section>

<section class="qi-section" style="background:#fff">
	<div class="qi-wrap">
		<span class="qi-eyebrow">Trusted travel ecosystem</span>
		<h2>Our partners at a glance.</h2>
		<p class="qi-lead">Built for travelers moving through the world’s busiest airports and airline networks.</p>
		<div class="qi-partners" style="margin-top:24px">
			<?php foreach ( array( 'Emirates', 'Qatar Airways', 'British Airways', 'Lufthansa', 'Turkish Airlines', 'Singapore Airlines', 'Air France', 'Delta' ) as $p ) : ?>
			<span><?php echo esc_html( $p ); ?></span>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap">
		<div class="qi-head">
			<div><span class="qi-eyebrow">Read our latest</span><h2>Travel better with the right signal.</h2></div>
			<a class="qi-btn qi-btn--light" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">Explore travel guides</a>
		</div>
		<div class="qi-grid qi-grid--4">
			<article class="qi-card"><small>eSIM guide</small><h3>Your complete 10-minute eSIM setup guide</h3><p>From checking compatibility to switching on data roaming when you land.</p></article>
			<article class="qi-card"><small>Travel smarter</small><h3>How much mobile data does your next trip need?</h3><p>A practical breakdown for maps, messaging, social media, streaming, and work.</p></article>
			<article class="qi-card"><small>Airport tips</small><h3>Airport Wi-Fi or travel eSIM: which is safer?</h3><p>What every traveler should know before connecting in a busy terminal.</p></article>
			<article class="qi-card"><small>Multi-country travel</small><h3>One eSIM, five borders, zero SIM swaps</h3><p>Why regional plans make connected rail trips and multi-stop holidays easier.</p></article>
		</div>
	</div>
</section>

<section class="qi-section qi-dark">
	<div class="qi-wrap qi-grid qi-grid--2">
		<div>
			<span class="qi-eyebrow" style="background:#fff2">Why Quickiphone</span>
			<h2>Your journey shapes our company.</h2>
			<p class="qi-lead" style="color:#cfcfc5">We listen to what travelers need, value the way you want to stay connected, and build our products around it.</p>
		</div>
		<div class="qi-grid qi-grid--2">
			<div><h3>Traveler-first choices</h3><p>Plans designed around real trips, not complicated telecom language.</p></div>
			<div><h3>Transparent value</h3><p>Clear allowances, validity, coverage, and pricing before you buy.</p></div>
			<div><h3>Human support</h3><p>Help when setup feels unfamiliar or a journey changes unexpectedly.</p></div>
			<div><h3>Always improving</h3><p>Customer feedback directly influences the experience we build next.</p></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
