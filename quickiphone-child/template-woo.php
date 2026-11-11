<?php
/**
 * Template Name: QI Shop Page
 * Wraps WooCommerce pages (cart, checkout, my account) in the theme design.
 * The page content holds the WooCommerce shortcode.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$slug  = get_post_field( 'post_name', get_queried_object_id() );
$intro = array(
	'cart'     => array( 'Your selection', 'Review your plans before checkout.' ),
	'checkout' => array( 'Secure checkout', 'Confirm your details and pay. Your QR code is emailed straight after.' ),
	'account'  => array( 'My account', 'Manage your eSIMs, view orders, and top up in one place.' ),
);
$i = isset( $intro[ $slug ] ) ? $intro[ $slug ] : array( '', '' );
?>
<section class="qp-hero">
	<div class="qi-wrap">
		<a class="qi-back" href="<?php echo esc_url( home_url( '/destinations/' ) ); ?>">&larr; Continue shopping</a>
		<?php if ( $i[0] ) : ?><span class="qi-kicker"><?php echo esc_html( $i[0] ); ?></span><?php endif; ?>
		<h1><?php echo esc_html( get_the_title() ); ?></h1>
		<?php if ( $i[1] ) : ?><p class="qi-lead"><?php echo esc_html( $i[1] ); ?></p><?php endif; ?>
	</div>
</section>
<section class="qi-section">
	<div class="qi-wrap qp-shop">
		<?php
		while ( have_posts() ) {
			the_post();
			the_content();
		}
		?>
	</div>
</section>
<?php get_footer(); ?>
