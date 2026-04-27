<?php

    class User{
        private $db;

        public function __construct($dbConnection){
            $this->db = $dbConnection;
        }

        public function find($id){
            $stmt = $this->db->prepare("SELECT * FROM tblUsers WHERE id = :id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetch();
        }
    }
?>