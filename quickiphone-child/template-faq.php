<?php
/**
 * Template Name: QI FAQ
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$faqs = array(
	'Basics' => array(
		array( 'What is an eSIM?', 'An eSIM is a digital SIM built into a compatible phone, tablet, or wearable. It lets you download a mobile plan without a physical card.' ),
		array( 'How does a travel eSIM work?', 'After purchase, you install an eSIM profile using a QR code or manual activation details. When you arrive, switch it on and connect to a local partner network.' ),
		array( 'What is the difference between an eSIM and a physical SIM?', 'Both connect your device to a mobile network. A physical SIM is a removable card, while an eSIM is built into the device and installed digitally.' ),
		array( 'Are Quickiphone plans data-only?', 'QuickConnect plans provide mobile data. You can use internet-based calling and messaging apps. QuickComplete plans add voice minutes and SMS.' ),
		array( 'Can I keep my normal phone number?', 'Yes. Keep your primary SIM enabled for calls and texts, then select Quickiphone as the line for mobile data.' ),
	),
	'Compatibility' => array(
		array( 'Is my phone compatible with eSIM?', 'Most flagship phones released since 2019 support eSIM, including many newer iPhone, Samsung Galaxy and Google Pixel models. Use the compatibility checker in the header to confirm.' ),
		array( 'How can I check whether my iPhone supports eSIM?', 'Open Settings, select Cellular or Mobile Data, and look for Add eSIM or Add Cellular Plan.' ),
		array( 'How can I check whether my Android phone supports eSIM?', 'Open Settings and search for eSIM, SIM manager, or Add mobile plan. On many devices, dialing *#06# shows an EID if eSIM is supported.' ),
		array( 'Does my phone need to be unlocked?', 'Yes. A carrier-locked phone may reject travel eSIM profiles from another provider. Contact your home carrier to unlock it.' ),
		array( 'Can I use an eSIM on a tablet or laptop?', 'Some cellular iPads, tablets, and laptops support eSIM. Compatibility depends on the exact model and software version.' ),
	),
	'Installation' => array(
		array( 'When should I install my eSIM?', 'Install it before departure while you have a stable Wi-Fi connection. Leave the travel line turned off until you arrive.' ),
		array( 'How do I install an eSIM with a QR code?', 'Connect to Wi-Fi, open your device\'s mobile or cellular settings, choose Add eSIM, and scan the QR code.' ),
		array( 'Can I install the eSIM manually?', 'Yes. If scanning is unavailable, choose the manual entry option and enter the SM-DP+ address and activation code from your order.' ),
		array( 'Can I scan the QR code from the same phone?', 'Some newer devices can recognize a QR code saved in Photos. Otherwise, open the code on another phone, tablet or computer.' ),
		array( 'Can I install the same eSIM more than once?', 'Usually not. Most eSIM profiles can only be installed on one device and may not reinstall after deletion.' ),
		array( 'When does my plan validity begin?', 'Most plans begin when the eSIM first connects to a supported network at the destination.' ),
	),
	'Using your eSIM' => array(
		array( 'What should I do when I arrive?', 'Turn on the Quickiphone line, select it for mobile data, enable Data Roaming for that line, and temporarily keep your home line off for data.' ),
		array( 'Why do I need to enable Data Roaming?', 'Travel eSIMs often connect through partner networks, so Data Roaming must be enabled on the Quickiphone line.' ),
		array( 'Can I use my phone as a hotspot?', 'Hotspot and tethering are supported on most plans and devices. Availability can depend on the destination network.' ),
		array( 'Can I switch between my regular SIM and eSIM?', 'Yes. Dual-SIM devices let you choose which line handles mobile data, calls, and messages.' ),
		array( 'Will my messaging apps keep working?', 'Yes. Apps tied to your normal number usually continue working when mobile data comes from the travel eSIM.' ),
		array( 'How can I reduce data usage?', 'Disable automatic app updates, cloud photo backup, video autoplay, and background refresh. Download maps offline.' ),
	),
	'Plans & coverage' => array(
		array( 'How do I choose the right data package?', 'Light messaging and maps often use 1–3 GB per week. Regular social media and browsing may need 5–10 GB.' ),
		array( 'What is a regional eSIM?', 'A regional eSIM covers several countries under one plan. It is useful for multi-country trips because you do not need to swap SIMs.' ),
		array( 'Will I get 5G?', '5G is available where the selected plan, local partner network, device, and location all support it.' ),
		array( 'Can I top up my plan?', 'Many plans support top-ups. If a top-up is unavailable, you can purchase and install another package.' ),
		array( 'What happens when my data runs out?', 'Mobile data stops when the allowance is exhausted. There are no automatic overage charges. Add a top-up to continue.' ),
		array( 'Can I use one eSIM in several countries?', 'Only if you purchased a regional or global plan covering those destinations. A local country plan works only in that country.' ),
	),
	'Troubleshooting' => array(
		array( 'My eSIM is installed but has no signal. What should I check?', 'Confirm the travel line is enabled, Data Roaming is on, Quickiphone is selected for mobile data, and you are in a covered area.' ),
		array( 'What should I do if mobile data is not working?', 'Turn Airplane Mode on for 30 seconds, restart the phone, verify the APN from your plan instructions, then contact Support.' ),
		array( 'Why is my connection slow?', 'Speed varies with local coverage, congestion, building materials, terrain, and network technology. Try moving or restarting the connection.' ),
		array( 'The QR code says it is invalid or already used. What now?', 'Confirm the eSIM is not already listed in your device settings. QR codes are generally single-use. If not listed, contact Support.' ),
		array( 'Should I delete the eSIM if it is not working?', 'No. Deleting an eSIM can make it impossible to reinstall. Contact Support first and keep the profile.' ),
	),
	'Orders & refunds' => array(
		array( 'Where will I receive my eSIM?', 'Your QR code and setup details are delivered electronically after checkout. Check your inbox and spam folder.' ),
		array( 'Can I cancel or refund an eSIM?', 'Eligibility depends on whether the eSIM has been installed, activated, or used. Contact Support with your order number.' ),
		array( 'Are there any contracts or automatic renewals?', 'Quickiphone travel plans are prepaid and do not require a contract. A plan does not automatically renew.' ),
		array( 'Is my payment information secure?', 'Checkout uses encrypted payment processing. Quickiphone does not display or store full card details.' ),
	),
);
$total = 0;
foreach ( $faqs as $list ) { $total += count( $list ); }
?>
<section class="qi-hero">
	<div class="qi-wrap">
		<div>
			<span class="qi-eyebrow">eSIM help center</span>
			<h1>Questions, answered. <em>Travel with confidence.</em></h1>
			<p class="qi-lead">Everything you need to choose, install, activate, and troubleshoot your Quickiphone travel eSIM.</p>
			<div class="qi-search"><input type="text" data-qi-faq-search placeholder="Search eSIM questions" aria-label="Search frequently asked questions"></div>
		</div>
		<div class="qi-hero-art" style="background:linear-gradient(135deg,#111,#e8423b)"><div class="qi-badge">Check · Install · Connect</div></div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap qi-faq-layout">
		<aside>
			<div class="qi-card qi-topics">
				<b>Browse by topic</b>
				<button class="on" type="button">All topics</button>
				<?php foreach ( array_keys( $faqs ) as $t ) : ?><button type="button"><?php echo esc_html( $t ); ?></button><?php endforeach; ?>
			</div>
			<div class="qi-card" style="margin-top:16px;background:var(--qi-yellow)">
				<b>Still stuck?</b>
				<p>Our support team is available around the clock.</p>
				<a class="qi-btn" href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Contact Support</a>
			</div>
		</aside>
		<div>
			<p><b><?php echo esc_html( $total ); ?> answers</b></p>
			<?php foreach ( $faqs as $topic => $list ) : foreach ( $list as $f ) : ?>
			<div class="qi-faq-item" data-topic="<?php echo esc_attr( $topic ); ?>">
				<button type="button"><span><?php echo esc_html( $f[0] ); ?> <small style="color:#888;font-weight:600">· <?php echo esc_html( $topic ); ?></small></span><span>+</span></button>
				<div class="a"><?php echo esc_html( $f[1] ); ?></div>
			</div>
			<?php endforeach; endforeach; ?>
		</div>
	</div>
</section>

<section class="qi-section qi-dark">
	<div class="qi-wrap">
		<span class="qi-eyebrow" style="background:#fff2">Need a human?</span>
		<h2>We’ll help you get connected.</h2>
		<p class="qi-lead" style="color:#cfcfc5">Email support@quickiphone.com or submit a support ticket.</p>
		<a class="qi-btn qi-btn--red" href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Contact Support</a>
	</div>
</section>
<?php get_footer(); ?>
