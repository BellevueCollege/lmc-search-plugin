<?php
/*
Plugin Name:       Library Search Box Plugin
Plugin URI:        https://github.com/BellevueCollege/lmc-search-plugin
Description:       Custom implementation of library search functionality
Version:           2 #{versionStamp}#
Author:            Bellevue College ITS
Author URI:        https://www.bellevuecollege.edu
Text Domain:       lmc-search-plugin
GitHub Plugin URI: BellevueCollege/lmc-search-plugin
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class Lmc_Search_Shortcode {
	function __construct() {
		add_shortcode( 'lmcsearchbox', array( $this, 'handle_shortcode' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_script' ) );
	}
	static function handle_shortcode( $atts ) {
		// actual shortcode handling here
		
		$searchbox = file_get_contents( plugin_dir_path( __FILE__ ) . 'search-template.html' );
		return $searchbox;
	}
	static function enqueue_script() {
		global $post;
		if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'lmcsearchbox' ) ) {
			wp_register_script(
				'lmc_search_script',
				plugins_url().'/lmc-search-plugin/lmc.js',
				array( 'jquery' ),
				'1.2.2'
			);
			wp_enqueue_script( 'lmc_search_script');
		}
	}
}
$lmc_search = new Lmc_Search_Shortcode;
$lmc_search->__construct();
