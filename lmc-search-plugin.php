<?php
/*
Plugin Name:       Library Search Box Plugin
Plugin URI:        https://github.com/BellevueCollege/lmc-search-plugin
Description:       Custom implimentation of library search functionality
Version:           1.1
Author:            Bellevue College ITS
Author URI:        http://www.bellevuecollege.edu
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
		
		$searchbox = file_get_contents( plugins_url().'/lmc-search-plugin/search-template.html' );
		return $searchbox;
	}
	static function enqueue_script() {
		global $post;
		if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'lmcsearchbox' ) ) {
			wp_register_script(
				'lmc_search_script',
				plugins_url().'/lmc-search-plugin/lmc.js',
				array( 'jquery' )
			);
			wp_enqueue_script( 'lmc_search_script');
		}
	}
}
$lmc_search = new Lmc_Search_Shortcode;
$lmc_search->__construct();
