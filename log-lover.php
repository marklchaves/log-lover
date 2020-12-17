<?php
/*
Plugin Name: 	Log Lover
Plugin URI:		
Description: 	Simplifies writing to debug.log.
Version: 		1.0
Author: 		caught my eye
Author URI: https://caughtmyeye.dev/about/
License: 		GPLv2 or later
License URI:	http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function logit_lover($log)
{
   if (is_array($log) || is_object($log)) {
      error_log(print_r($log, true));
   } else {
      error_log($log);
   }
}
