<?php 
    class Database {
        private $host = "accelomrtj.online";
        private $database_name = "n1658805_absensi";
        private $username = "n1658805_rfid";
        private $password = "umatlucu1880@";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>