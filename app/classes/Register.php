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
                $this->save( [
                    'email'    =>  $email,
                    'password' =>  self::generate_password( $password_1 ),
                    'name'     =>  $name
                ] );

                header( 'Location:index.php?page=login' );
            }else{
             Session::error( 'paswords are not matched' );
            }
        }else{
            Session::error( 'email or name is required' );
        }
    }

   
    
}