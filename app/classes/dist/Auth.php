<?php


//Factory Class
class Auth {
    public static function process( $data ) {
        if( isset( $data['login'] ) ) {
             
            switch ($data['login']) {
                case 'login':
                    $login = new Login();
                    $login->login_user( $data );
                    break;
                
                case 'register':
                    $register = new Register(); 
                    $register->register_user( $data );
                    break;
            
            }
        }
    }
}