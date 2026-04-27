<?php
    require '../config.php';

    class Database{
        private $dbh;

        public function __construct(){
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
            try{
                //Creates the single connection object
                $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e){
                die("Connection Failed: " . $e->getMessage());
            }
        }

        public function getConnection(){
            return $this->dbh;
        }
    }
?>