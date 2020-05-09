<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $bdName = "livros";

    $conn = new mysqli($serverName, $userName, $password, $bdName);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }else{
        header("Location: ../index.php?conection=sucess");
    }