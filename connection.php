<?php

    $database= new mysqli("localhost","root","","agronomist");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>