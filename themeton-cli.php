<?php
/*
Plugin Name: Themeton CLI
GitHub Plugin URI: teratic/themeton-cli
Description: A WP-CLI command that allow execute specific themeton based themes operations
Author: Marcos Lois Bermúdez
Version: 1.0
Author URI: https://www.teratic.com
Network: True
*/

function wp_themeton_cli_loaded()
{
  // register with wp-cli if it's running, and command hasn't already been defined elsewhere
  if (defined('WP_CLI') && WP_CLI && !class_exists('ThemetonCLI')) {
    require_once __DIR__ . '/class/command.php';
  }

  load_plugin_textdomain('wp-themeton-cli', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}

add_action('plugins_loaded', 'wp_themeton_cli_loaded', 20);
