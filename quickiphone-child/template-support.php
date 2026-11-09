<?php
/**
 * Template Name: QI Support
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="qi-hero">
	<div class="qi-wrap">
		<div>
			<span class="qi-eyebrow">Quickiphone support</span>
			<h1>Let’s get you <em>back online.</em></h1>
			<p class="qi-lead">Tell us what happened and our support team will help with setup, activation, coverage, or your order.</p>
			<p><a class="qi-btn" href="mailto:support@quickiphone.com">Prefer email? support@quickiphone.com</a></p>
		</div>
		<div class="qi-hero-art" style="background:linear-gradient(135deg,#e8423b,#f7a35c)"><div class="qi-badge">Support wherever you land</div></div>
	</div>
</section>

<section class="qi-section">
	<div class="qi-wrap qi-grid qi-grid--2" style="grid-template-columns:1.4fr 1fr;align-items:start">
		<div class="qi-card">
			<span class="qi-eyebrow">Contact us</span>
			<h2>Submit a ticket.</h2>
			<p>Share a few details so we can direct your request to the right person.</p>
			<?php if ( isset( $_GET['sent'] ) ) : ?><div class="qi-notice">Thanks! Your ticket was sent. We'll reply by email soon.</div><?php endif; ?>
			<form class="qi-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<input type="hidden" name="action" value="qi_support">
				<?php wp_nonce_field( 'qi_support', 'qi_nonce' ); ?>
				<label>Full name<input type="text" name="name" placeholder="Your name" required></label>
				<label>Email address<input type="email" name="email" placeholder="you@example.com" required></label>
				<label>What can we help with?
					<select name="topic">
						<?php foreach ( array( 'eSIM installation', 'Activation or connection', 'Order or payment', 'Coverage or data speed', 'Refund request', 'Something else' ) as $t ) : ?>
						<option><?php echo esc_html( $t ); ?></option>
						<?php endforeach; ?>
					</select>
				</label>
				<label>Order number (optional)<input type="text" name="order" placeholder="QI-000000"></label>
				<label>Subject<input type="text" name="subject" placeholder="A short summary of the issue" required></label>
				<label>Message<textarea name="message" placeholder="Tell us what happened, which device you use, and what you have already tried." required></textarea></label>
				<button class="qi-btn qi-btn--red" type="submit">Submit ticket</button>
			</form>
		</div>
		<aside class="qi-card" style="background:var(--qi-yellow)">
			<h3>We’re here every day.</h3>
			<p>Send your request at any time. Most tickets receive a reply within a few hours.</p>
			<p><b>24/7 support</b><br>For travelers in every time zone</p>
			<h3 style="margin-top:24px">For a faster answer</h3>
			<ul>
				<li>Include your order number if you have one.</li>
				<li>Tell us your phone model and destination.</li>
				<li>Attach the exact error message in your notes.</li>
			</ul>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
