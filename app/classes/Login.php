<?php

use Rakit\Validation\Validator;

class Login extends Model {

    protected $database = 'users';
    protected $table = 'users'; 

   public function login_user( $data ) {

        $validator = new Validator;

        $validation = $validator->validate( $data + $_FILES, 
            [
                'email'    => 'required|email',
                'password' => 'required|min:6'
            ]
        );

        if( $validation->fails() ) {
            $errors = $validation->errors();
            echo "<pre>";
            print_r( $errors->all() );
            echo "</pre>";
            exit;
        }else {

            $email     = $data['email'];
            $password  = md5( $data['password'].self::$salt);

            $usr = $this->where( 'email', '=', $email, null );
            
            if( $usr['password'] == $password && $usr['email'] == $email ) {

                Session::set_session('user' , [
                    'email' => $usr['email'],
                    'name'  => $usr['name']
                ]);

                header( 'Location:index.php?page=main' );
            }else {
                Session::set_session( 'login_error', 'wrong email or password' );
            } 
        }
   }

   public static function logout() {

   }


}