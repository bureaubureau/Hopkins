<?php
// timezone
date_default_timezone_set( 'Europe/Berlin' );

// load and set page globals
$global = array();
$global['index'] = 'hello';

// some usefull variables
$global['base_path'] = substr( $_SERVER['SCRIPT_NAME'], 0, strlen( $_SERVER['SCRIPT_NAME'] ) - 9 );
$global['server_path'] = substr( dirname(__FILE__), 0, -4 );

$global['path'] = substr( $_SERVER['REQUEST_URI'], strlen( $global['base_path'] ) );
$global['path'] = preg_replace( '/index\.php/', '', $global['path'] ); // remove index.php
$global['path'] = preg_replace( '/^\/|\/$/', '', $global['path'] ); // remove trailing slash