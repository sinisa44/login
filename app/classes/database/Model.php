<?php

class Model {

    public $conn;
    protected static $salt = 'ThI5I5@NS@LT';


    public function __construct(){
        $this->conn = Connection::connect()->conn;
    }
    
    public function select( $search = [] ) {
 
        try{
            $stmt = $this->conn( 'SELECT '.self::search( $search ).' FROM '.$this->database.'.'.$this->table );
            $stmt->execute();

            $res = array();
            while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
                $res[] = $row;
            }

            return $res;
        }catch( PDOException $e) {
            echo $e->getMesssage();
        }
    }

    public function save( $data=[] ) {
        $columns  = implode( ',', array_keys( $data ) );
        $values   = implode( '","', array_values( $data ) );
        $prep_val = implode( ',:', array_keys( $data ) );

        try{
            $stmt = $this->conn->prepare( 'INSERT INTO '.$this->database.'.'.$this->table.' ('.$columns.') VALUES ("'.$values.'") ');
            $stmt->execute();

            return true;
        }catch( PDOException $e ) {
            echo $e->getMessage();
        }
    }

    public function where( $first, $operator=null, $second, $search ){
        if( $operator == null) {
            $operator = '=';
        }

        try {
            $stmt = $this->conn->prepare( 'SELECT '.self::search( $search ).' FROM ' . $this->database.'.'.$this->table.' WHERE '.$first.$operator.'"'.$second.'"' );
            
            $stmt->execute();

            $res = $stmt->fetch( PDO::FETCH_ASSOC );

            return $res;
            
        }catch( PDOException $e) {
            echo $e->getMessage();
        }
    }

    private static function search( $search ) {
        if( empty( $search ) ) {
            $column_search = '*';
        }else {
            $columns_search = implode( ',', $search );
        }

        return $column_search;
    }


    protected static function generate_password( $password ) {
       
        $new_password = md5( $password.self::$salt );
        
        return $new_password;
    }

}