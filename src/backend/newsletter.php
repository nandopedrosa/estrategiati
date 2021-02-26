<?php

if (isset($_POST["addtonewsletter"]) && isset($_POST['recaptcha_response'])) {
    #Checagem do recaptcha
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LevWmcaAAAAAOBWbCw-t6hTU5JvSgBQoADoueUb';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score < 0.5) {
        if ($origem == 'materiais') {
            header("location: ../materiais.php?erro=captcha");
            exit();
        }

        if($origem == 'footer') {
            header("location: ../index.php?erro=captcha");
            exit();
        }      
        
    }

    $email = $_POST["email"];
    $origem = $_POST["origem"];

    //Validação
    require_once "util.php";
    if (temAlgumInputVazio($email)) {

        if ($origem == 'materiais') {
            header("location: ../materiais.php?erro=camposvazios");
            exit();
        }

        if($origem == 'footer') {
            header("location: ../index.php?erro=camposvazios");
            exit();
        }
    }

    //SGBD
    require_once "dbhandler.php";

    $sql = "insert into newsletter(email) values (?);";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        exit("Não foi possível conectar ao banco de dados. Erro: " . mysqli_stmt_error($statement));
    }
    mysqli_stmt_bind_param($statement, "s", $email);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    if ($origem == 'materiais') {
        header("location: ../materiais.php?sucesso=adicionadocomsucesso");
        exit();
    }

    if($origem == 'footer') {
        header("location: ../index.php?sucesso=adicionadocomsucesso");
        exit();
    }
 
}