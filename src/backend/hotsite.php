<?php

    $email = $_POST["email"];
    $produto = $_POST["produto"];

    //SGBD
    require_once "dbhandler.php";

    $sql = "insert into lead(email, produto) values (?,?);";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        exit("Não foi possível conectar ao banco de dados. Erro: " . mysqli_stmt_error($statement));
    }
    mysqli_stmt_bind_param($statement, "ss", $email, $produto);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    
    header("location: https://drive.google.com/uc?export=download&id=1YCQ96sD9a2GOX9EcX84fgwri0BBeH6IJ");

     exit();
    
 
