<?php
    $serverName = "localhost";
    $userName = "watchers";
    $password = "@Watchers2019db";
    $bdName = "watchers_livros";

    $conn = new mysqli($serverName, $userName, $password, $bdName);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }else{
        header("Location: ../index.php?conection=sucess");
    }