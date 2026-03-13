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
    wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
add_action( 'init', 'lmc_search_plugin_register_block' );