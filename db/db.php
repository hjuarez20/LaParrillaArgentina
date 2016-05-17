<?php
  include("medoo.php");

class database {
     
    private $dbName = null, $dbHost = null, $dbPass = null, $dbUser = null;
    private static $instance = null;
     
    private function __construct() {
         
        // Please note that this is Private Constructor
         
        $this->dbName = 'laparrilla';
        $this->dbHost = 'localhost';
        $this->dbUser = 'root';
        $this->dbPass = '';
 
        // Your Code here to connect to database //
        $this->dbh = new medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => $this->dbName,
            'server' => $this->dbHost,
            'username' => $this->dbUser,
            'password' => $this->dbPass,
            'charset' => 'utf8'
        ]);
    }
     
    public static function connect() {
         
        // Check if instance is already exists      
        if(self::$instance == null) {
            self::$instance = new database();
        }
         
        return self::$instance;
         
    }
     
    private function __clone() {
        // Stopping Clonning of Object
    }
     
    private function __wakeup() {
        // Stopping unserialize of object
    }
    
    public static function allUser($username, $password) {
        return self::$instance->dbh->select("tbusers",
                                            ["AND" =>[
                                             "login" => $username,
                                             "password" => $password 
                          ]]); 
    }
     
}

?>