<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
</main>
<footer class="qi-footer">
	<div class="qi-wrap">
		<div class="qi-footer-grid">
			<div>
				<div class="qi-logo">Quickiphone<small style="color:#fff">SCAN.ACTIVATE.GO</small></div>
				<p>Travel data, calls, and messages made simple for every journey.</p>
				<p>190+ destinations · 24/7 assistance</p>
			</div>
			<div>
				<h4>Shop online</h4>
				<a href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">Travel SIM</a>
				<a href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">Data SIM Card</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Portable WiFi</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Smartwatches</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Travel Accessories</a>
				<a href="<?php echo esc_url( home_url( '/account/' ) ); ?>">Existing customers</a>
			</div>
			<div>
				<h4>Get Help</h4>
				<a href="<?php echo esc_url( home_url( '/account/' ) ); ?>">My account</a>
				<a href="<?php echo esc_url( home_url( '/account/' ) ); ?>">Register</a>
				<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">User Guides</a>
				<a href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">Top Up</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Contact Us</a>
			</div>
			<div>
				<h4>Extras</h4>
				<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">Travel Blog</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Business Travel</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Our Awards</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Partner With Us</a>
				<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ's</a>
			</div>
			<div>
				<h4>Get Special Offers to your inbox</h4>
				<p>Travel deals, destination tips, and new plan alerts.</p>
				<form class="qi-sub" onsubmit="return false"><input type="email" placeholder="Email address" aria-label="Email address for special offers"><button class="qi-btn qi-btn--red" type="submit">Join</button></form>
				<p style="margin-top:16px"><a style="display:inline;margin-right:12px" href="https://www.instagram.com/">Instagram</a><a style="display:inline;margin-right:12px" href="https://www.facebook.com/">Facebook</a><a style="display:inline;margin-right:12px" href="https://x.com/">X</a><a style="display:inline" href="https://www.linkedin.com/">LinkedIn</a></p>
			</div>
		</div>
		<div class="qi-legal">
			<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Quickiphone. All rights reserved.</span>
			<nav><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a><a href="<?php echo esc_url( home_url( '/cookies/' ) ); ?>">Cookies</a></nav>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
