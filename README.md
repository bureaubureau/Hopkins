# Hopkins

Hopkins doesn't do much. It gives you a nice VC Pattern. Nothing more.

## Quick Intro

Let us look at the default controller.

    <?php

    class Hello extends Contr {
  
      // Every Controller has an index function.
      // url: index.php/hello
      
      function index() {
        // the render Function takes an array with data and an view file name.
        // the array gets deconstructed. So in the view you access it like $txt.
        $this->render( array( 'txt' => 'Hello World.' ), 'hello' );
      }
  
      // Parameters are optional.
      // url: index.php/hello/func/parameter

      function func( $parameter = '' ) {
        $this->render( array( 'txt' => $parameter ), 'hello' );
      }
  
    }

If Hopkins doesn't find the controller or the function a simple 404 site is rendered.