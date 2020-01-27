<?php

class Session {

    private static $expire = 5;

    public static function set_session( $session_name, $data=[] ) {
        if( isset( $data ) ) {
            return $_SESSION[$session_name] = $data;
        }
    }

    public static function session_unset( $session_name ) {
        $session_life = time() - $_SESSION['timeout'];

        if( $session_life > self::$expire ) {
            unset( $_SESSION[$session_name] );
        }
        $_SESSION['timeout'] = time();
    }
}