<?php

class Register extends Model {

    protected $database = 'users';
    protected $table    = "users";


    public  function register_user( $form_data ) {
        
        $email      = $form_data['email'];
        $name       = $form_data['name'];
        $password_1 = $form_data['password_1'];
        $password_2 = $form_data['password_2'];

        if( ! empty( $email )  &&  ! empty( $name ) ) {

            if( $password_1 == $password_2 ) {
               $ins =  $this->save( [
                    'email'    =>  $email,
                    'password' =>  self::generate_password( $password_1 ),
                    'name'     =>  $name
                ] );
                if( $ins ) {
                    header( 'Location:index.php?page=login' );
                }
            }else{
             Session::set_session( 'password', 'passwords not matched' );
            }
        }else{    
            Session::set_session( 'email', 'email or name is required' );
        }
    }

   
    
}