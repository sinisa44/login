<?php

class Login extends Model {

    protected $database = 'users';
    protected $table = 'users';

   public function login_user( $data ) {

        $email     = $data['email'];
        $password  = md5( $data['password'].self::$salt);

        $usr = $this->where( 'email', '=', $email, null );
        
        if( $usr['password'] == $password && $usr['email'] == $email ) {
            header( 'Location:index.php?page=main' );
        } 
   }
}