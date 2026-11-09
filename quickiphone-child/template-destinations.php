<?php
/**
 * Template Name: QI Destinations
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$q = isset( $_GET['q'] ) ? sanitize_text_field( wp_unslash( $_GET['q'] ) ) : '';
$all = array_merge(
	qi_destinations(),
	array(
		array( '🇪🇺', 'Europe (39 countries)', '1 GB – 20 GB · 4G/5G', '$4.90' ),
		array( '🌏', 'Asia Pacific (18 countries)', '1 GB – 20 GB · 4G/5G', '$5.50' ),
		array( '🌎', 'North America (3 countries)', '1 GB – 20 GB · 4G/5G', '$6.00' ),
	)
);
?>
<section class="qi-hero">
	<div class="qi-wrap" style="grid-template-columns:1fr">
		<div>
			<span class="qi-eyebrow">190+ destinations</span>
			<h1>Where to <em>next?</em></h1>
			<form class="qi-search" method="get">
				<input type="text" name="q" value="<?php echo esc_attr( $q ); ?>" placeholder="Where are you traveling?" aria-label="Search destinations">
				<button type="submit" aria-label="Search">→</button>
			</form>
		</div>
	</div>
</section>
<section class="qi-section">
	<div class="qi-wrap">
		<div class="qi-grid qi-grid--4">
			<?php foreach ( $all as $d ) :
				if ( $q && false === stripos( $d[1], $q ) ) { continue; } ?>
			<article class="qi-card qi-dest">
				<div class="img"></div>
				<h3><?php echo esc_html( $d[0] . ' ' . $d[1] ); ?></h3>
				<small><?php echo esc_html( $d[2] ); ?></small>
				<p><small>FROM</small><br><span class="price"><?php echo esc_html( $d[3] ); ?></span></p>
				<a class="qi-btn" href="<?php echo esc_url( home_url( '/cart/' ) ); ?>">See plans</a>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
