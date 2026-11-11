<?php
/**
 * Creates one WooCommerce simple product per eSIM plan and stores a lookup
 * map in the option `qi_product_map` (key => product ID) for the theme.
 *
 * Run on the server:  wp eval-file create-products.php /path/to/destinations.json
 * Safe to re-run: products are matched by SKU and updated, never duplicated.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! class_exists( 'WC_Product_Simple' ) ) { WP_CLI::error( 'WooCommerce is not active.' ); }

$file = isset( $args[0] ) ? $args[0] : '';
$data = json_decode( (string) @file_get_contents( $file ), true );
if ( ! is_array( $data ) ) { WP_CLI::error( 'Cannot read destinations JSON: ' . $file ); }

function qi_term( $name ) {
	$t = term_exists( $name, 'product_cat' );
	if ( ! $t ) { $t = wp_insert_term( $name, 'product_cat' ); }
	return is_wp_error( $t ) ? 0 : (int) ( is_array( $t ) ? $t['term_id'] : $t );
}

function qi_upsert( $sku, $name, $price, $cat_id, $short ) {
	$id = wc_get_product_id_by_sku( $sku );
	$p  = $id ? wc_get_product( $id ) : new WC_Product_Simple();
	$p->set_name( $name );
	$p->set_sku( $sku );
	$p->set_status( 'publish' );
	$p->set_catalog_visibility( 'hidden' );
	$p->set_virtual( true );
	$p->set_sold_individually( false );
	$p->set_regular_price( number_format( (float) $price, 2, '.', '' ) );
	$p->set_short_description( $short );
	$p->set_category_ids( array( $cat_id ) );
	return $p->save();
}

$map  = array();
$made = 0;
$cat_c = qi_term( 'Country eSIMs' );
$cat_r = qi_term( 'Regional eSIMs' );
$cat_q = qi_term( 'QuickComplete' );

foreach ( array( 'countries' => array( 'c', $cat_c ), 'regions' => array( 'r', $cat_r ) ) as $group => $cfg ) {
	foreach ( $data[ $group ] as $row ) {
		foreach ( $data['plans'] as $i => $plan ) {
			$gb   = $plan[1];
			$days = $plan[2];
			$sku  = strtoupper( $cfg[0] . '-' . $row['code'] . '-' . $gb . 'GB-' . $days . 'D-' . ( $i + 1 ) );
			$name = $row['name'] . ' eSIM - ' . $gb . ' GB / ' . $days . ' days';
			$id   = qi_upsert( $sku, $name, $row['prices'][ $i ], $cfg[1], $row['net'] . ' - 4G/5G where available.' );
			$map[ $cfg[0] . '|' . $row['name'] . '|' . $i ] = $id;
			$made++;
		}
	}
}

$qc = array(
	array( 'UK', 'United Kingdom', 'Essential', 5, 19.90, 100, 100 ),
	array( 'UK', 'United Kingdom', 'Complete', 20, 34.90, 500, 500 ),
	array( 'USA', 'United States', 'Essential', 10, 24.90, 200, 200 ),
	array( 'USA', 'United States', 'Complete', 25, 39.90, 500, 500 ),
	array( 'GL', 'Global', 'Voyager', 5, 39.90, 60, 60 ),
	array( 'GL', 'Global', 'Complete', 10, 59.90, 120, 120 ),
);
foreach ( $qc as $q ) {
	$sku  = 'QC-' . $q[0] . '-' . strtoupper( $q[2] );
	$name = 'QuickComplete ' . $q[1] . ' ' . $q[2] . ' - ' . $q[3] . ' GB, ' . $q[5] . ' min, ' . $q[6] . ' SMS (30 days)';
	$id   = qi_upsert( $sku, $name, $q[4], $cat_q, 'Voice + data + SMS with a mobile number included. 30-day plan.' );
	$map[ 'qc|' . $q[0] . '|' . $q[2] ] = $id;
	$made++;
}

update_option( 'qi_product_map', $map, false );
WP_CLI::success( "$made products created or updated; map has " . count( $map ) . ' entries.' );
