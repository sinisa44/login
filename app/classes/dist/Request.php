<?php

class Request {
    public static function load_view( $url ) {
      require( 'views/'. $url. '/index.php' );
    }
}