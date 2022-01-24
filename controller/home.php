<?php

class ControllerHome{

    public function ctrHome(){
        include "views/index.php";
    }

    public function login(){
        include "views/login.php";
    }

    public function connect_db(){
        $server = 'localhost';
        $username = 'jbravo';
        $password = 'alejoy';
        $database = 'users';

        try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
        } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
        }

    }
}
?>