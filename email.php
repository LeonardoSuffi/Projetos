<?php
$email = $_POST["email"];
$nome = $_POST["nome"];
$tel = $_POST["tel"];
$cidade = $_POST["cidade"];
$atividade = $_POST["atividade"];

$destinatario = "contato@moovcont.com.br";
$assunto = "Nova mensagem do formulário de contato";


$corpo = "Nome: $nome\n";
$corpo .= "WhatsApp: $tel\n";
$corpo .= "E-mail: $email\n";
$corpo .= "Cidade: $cidade\n";
$corpo .= "Atividade: $atividade\n";

$remetente = "contato@moovcont.com.br"; // O endereço de e-mail que você criou em sua hospedagem
$senha = "Moov1610*"; // A senha da conta de e-mail

$host_smtp = "mail.moovcont.com.br"; // Nome do servidor SMTP fornecido pela sua hospedagem
$porta_smtp = 465; // A porta SMTP (pode variar dependendo das configurações do seu host)
$secure_smtp = "ssl"; // Use "tls" ou "ssl" dependendo das configurações do seu host

mail($destinatario, $assunto, $corpo, "From: $remetente", "-f$remetente");
    // Redirecionar o usuário após o envio do formulário
    header("Location: obrigado");
    exit;
?>