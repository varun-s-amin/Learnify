<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "lify_db";

    $conn = new mysqli($hostname,$username,$password,$databasename);
    if ($conn->connect_error){
        die("connection error");
    }

?>
