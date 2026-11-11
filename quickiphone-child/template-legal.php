<?php
/**
 * Template Name: QI Legal
 * Content comes from data/legal.json, keyed by the page slug (privacy, terms, cookies).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$all  = json_decode( (string) file_get_contents( get_stylesheet_directory() . '/data/legal.json' ), true );
$slug = get_post_field( 'post_name', get_queried_object_id() );
$doc  = is_array( $all ) && isset( $all[ $slug ] ) ? $all[ $slug ] : null;
if ( ! $doc ) { $doc = array( 'k' => get_the_title(), 'h' => get_the_title(), 'i' => '', 'u' => '', 's' => array() ); }
?>
<section class="qp-hero">
	<div class="qi-wrap">
		<a class="qi-back" href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; Back to home</a>
		<span class="qi-kicker"><?php echo esc_html( $doc['k'] ); ?></span>
		<h1><?php echo esc_html( $doc['h'] ); ?></h1>
		<p class="qi-lead"><?php echo esc_html( $doc['i'] ); ?></p>
		<p class="qp-upd"><?php echo esc_html( $doc['u'] ); ?></p>
	</div>
</section>
<section class="qi-section">
	<div class="qi-wrap qp-legal">
		<aside class="qp-toc qi-card">
			<span class="qi-kicker">On this page</span>
			<?php foreach ( $doc['s'] as $i => $s ) : ?>
			<a href="#s<?php echo (int) $i + 1; ?>"><?php echo (int) $i + 1 . '. ' . esc_html( $s[0] ); ?></a>
			<?php endforeach; ?>
		</aside>
		<article class="qp-body qi-card">
			<?php foreach ( $doc['s'] as $i => $s ) : ?>
			<h2 id="s<?php echo (int) $i + 1; ?>"><?php echo (int) $i + 1 . '. ' . esc_html( $s[0] ); ?></h2>
			<?php foreach ( $s[1] as $b ) :
				if ( is_array( $b ) ) : ?>
			<ul><?php foreach ( $b as $li ) : ?><li><?php echo esc_html( $li ); ?></li><?php endforeach; ?></ul>
			<?php else : ?>
			<p><?php echo esc_html( $b ); ?></p>
			<?php endif; endforeach; endforeach; ?>
		</article>
	</div>
</section>
<?php get_footer(); ?>
