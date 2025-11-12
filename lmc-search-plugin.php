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


// Register Block that Renders the Shortcode
function lmc_search_plugin_register_block() {
    register_block_type( __DIR__ . '/build/lmc-search-block' );
}
add_action( 'init', 'lmc_search_plugin_register_block' );