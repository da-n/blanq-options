<?php
/*
Plugin Name: Blanq Options
Plugin URI: https://github.com/da-n/blanq-options
Description: Plug-in component for the <a href="https://github.com/da-n/blanq">Blanq</a> WordPress theme. Extends site and theme options.
Version: 0.1
Author: Daniel Davidson
Author URI: http://github.com/da-n
*/

require dirname(__FILE__) . '/scb/load.php';

function _blanq_options_init() {

  // Creating an options object
  $options = new scbOptions( 'blanq_options', __FILE__, array(
    'blanq_options_a' => 'foo',
    'blanq_options_b' => 'bar',
  ) );

  // Creating settings page objects
  if ( is_admin() ) {
    require_once( dirname( __FILE__ ) . '/admin.php' );
    new Blanq_Options_Page( __FILE__, $options );
  }
}
scb_init( '_blanq_options_init' );