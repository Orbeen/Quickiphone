<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
</main>
<footer class="qi-footer">
	<div class="qi-wrap">
		<div class="qi-footer-grid">
			<div>
				<a class="qi-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Quickiphone"><img class="sym" src="<?php echo qi_asset( 'quickiphone-symbol.png' ); ?>" alt=""><img class="word" src="<?php echo qi_asset( 'quickiphone-wordmark.png' ); ?>" alt="Quickiphone"></a>
				<p>Travel data, calls, and messages made simple for every journey.</p>
				<p class="qi-chips"><span>190+ destinations</span><span>24/7 assistance</span></p>
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
				<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
			</div>
			<div>
				<h4>Get Special Offers to your inbox</h4>
				<p>Travel deals, destination tips, and new plan alerts.</p>
				<form class="qi-sub" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"><input type="hidden" name="action" value="qi_news"><?php wp_nonce_field( 'qi_news', 'qi_nonce' ); ?><input type="email" name="email" required placeholder="Email address" aria-label="Email address for special offers"><button class="qi-btn qi-btn--yellow" type="submit">Join</button></form>
				<p class="qi-social-h">Social media</p>
					<p class="qi-social"><a href="https://www.instagram.com/" aria-label="Instagram">IG</a><a href="https://www.facebook.com/" aria-label="Facebook">f</a><a href="https://x.com/" aria-label="X">X</a><a href="https://www.linkedin.com/" aria-label="LinkedIn">in</a></p>
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
