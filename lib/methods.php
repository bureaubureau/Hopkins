<?php 

function url( $string ) { 
  global $global;

  print $global['base_path'] . 'index.php/' . $string;
}

function is_request() {
  return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']);
}
