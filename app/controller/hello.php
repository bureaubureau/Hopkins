<?php

class Hello extends Contr {
  
  // index.php
  function index() {
    $this->render( array( 'txt' => 'Hello World.' ), 'hello' );
  }
  
  // index.php/hello/func/parameter
  function func( $parameter = '' ) {
    $this->render( array( 'txt' => $parameter ), 'hello' );
  }
  
}