<?php

/*
 * Plugin Name: Papi: Property ContactForm 7 Select
 * Description: Papi select control for available ContactForm 7 forms
 * Version: 1.0.0
 * Author: Zlatko Zlatev
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Include Property ContactForm 7 Select.
 */

add_action( 'papi/loaded', function () {
  require_once 'class-papi-property-CF7-select.php';
} );
