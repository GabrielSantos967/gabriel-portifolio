<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        $to = "biel2013as@gmail.com"; // Coloque seu email aqui
        $subject = "Novo Contato de $name";
        $body = "Nome: $name\nEmail: $email\nMensagem: $message";
        $headers = "From: $email";
    
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a mensagem.";
        }
    } else {
        echo "Método de requisição inválido.";
    }
?>