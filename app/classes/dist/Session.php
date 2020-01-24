<?php

class Session {

    public static function set_session( $session_name, $data=[] ) {
        if( isset( $data ) ) {
            return $_SESSION[$session_name] = $data;
        }
    }
}