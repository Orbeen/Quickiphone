<?php
/**
 * Template Name: QI Account
 * Uses the real WordPress sign-in (wp_login_form), not a demo form.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$user = wp_get_current_user();
?>
<section class="qi-section qp-account">
	<div class="qi-wrap">
		<div class="qp-login">
			<div class="l">
				<span class="qi-kicker">My account</span>
				<h1>Everything connected.</h1>
				<p>Manage your eSIMs, monitor usage, view orders, and top up in one place.</p>
			</div>
			<div class="r">
				<?php if ( is_user_logged_in() ) : ?>
				<h2>Welcome back, <?php echo esc_html( $user->display_name ); ?>.</h2>
				<p>You are signed in. Order history and usage will appear here once checkout is available.</p>
				<a class="qi-btn" href="<?php echo esc_url( wp_logout_url( home_url( '/account/' ) ) ); ?>">Sign out</a>
				<?php else : ?>
				<h2>Sign in</h2>
				<?php
				wp_login_form( array(
					'redirect'       => home_url( '/account/' ),
					'label_username' => 'Email address or username',
					'label_log_in'   => 'Continue',
					'remember'       => false,
				) );
				?>
				<p class="note"><a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">Forgot your password?</a></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
