<?php
    function connect()
    {        
        $mysqli = new mysqli("localhost","jbravo","alejoy","mysql");
        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        } else {
            echo "Conexion exitosa con base";}
    }
?>