<?php 



class Connection {
    
    public $conn;
    private static $inst;


    public function __construct() {

        try{
            $this->conn = new PDO( 'mysql:host=localhost;port:3306;dbname=users','root', '' );
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }catch( PDOException $e ) {
            echo $e->getMessage();
        }

    }

    public static function connect() {
        if( ! self::$inst) {
            self::$inst = new Connection();
        }

        return self::$inst;
    }
}