<?php

if(isset($_POST["enviarmsg"]) && isset($_POST['recaptcha_response'])) {        
    #Checagem do recaptcha
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LevWmcaAAAAAOBWbCw-t6hTU5JvSgBQoADoueUb';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score < 0.5) {
        header("location: ../index.php?erro=captcha#contato");
        exit();
    } 
    
    #Biblioteca para mandar via GMail
    require_once('../assets/vendor/PHPMailer/PHPMailerAutoload.php');
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];        
    $assunto = $_POST["assunto"];        
    $mensagem = $_POST["mensagem"];        

    require_once 'util.php';

    if (temAlgumInputVazio($nome, $email, $assunto, $mensagem)) {
        header("location: index.php?erro=camposvazios");
        exit();
    }

    # Configurações de envio (utilizamos o gmail para enviar)
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();    
    $mail->Username = 'contato.estrategiaconcursosti@gmail.com';
    $senha = $_SERVER['SECRET_KEY'];
    $mail->Password = $senha;
        
    #From, To, Assunto e Corpo
    $mail->setFrom($email, $nome);
    $mail->Subject = $assunto;
    $mail->Body = $mensagem;
    $mail->addAddress('contato.estrategiaconcursosti@gmail.com'); #recipiente

    $mail->send();    

    header("location: ../index.php?sucesso=msgenviadacomsucesso");
    
} else {
    header("location: ../index.php");
}