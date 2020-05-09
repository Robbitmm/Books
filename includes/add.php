<?php
    include_once('conection.php');

    //$conn->prepare evita sql injection
    $sql = $conn->prepare("INSERT INTO books (titulo, editora, status, paginas, local, dono, capa) VALUES (?, ?, ?, ?, ?, ?, ?)");
    //Indica o tipo de dado -> String, string, string, int, string
    $sql->bind_param("sssissb", $titulo, $editora, $status, $paginas, $local, $dono, $capa);

    $titulo = $_POST['titulo'];
    $editora = $_POST['editora'];
    $status = $_POST['status'];
    $paginas = $_POST['paginas'];
    $local = $_POST['local'];
    $dono = $_POST['dono'];
    $capa = $_FILES['image_input'];
    
    $sql->execute();

    if($conn->query($sql) === TRUE){
        $insertion = "Livro adicionado com sucesso.";
        header("Location: ../index.php?insertion=sucess");
    }else{
        echo "Error: ".$sql. "<br>" . $conn->error;
    }
    $sql->close();
    $conn->close();