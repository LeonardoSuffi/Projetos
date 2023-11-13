<form action="z.php" method="post">

<input type="email" id="leo1" placeholder="Seu endereço de e-mail"><br>
<button type="submit" id="leo2">Receber Ofertas</button>
</form>

<?php
    $email = $_POST["email"];

$destinatario = "leonardo.fco123@gmail.com";
$assunto = "Nova mensagem do formulário de contato";

$corpo .= "E-mail: $email\n";

$remetente = "leads@balaoessencias.com.br"; // O endereço de e-mail que você criou em sua hospedagem
$senha = "Lead0210*"; // A senha da conta de e-mail

$host_smtp = "mailbalaodasessencias.com.br"; // Nome do servidor SMTP fornecido pela sua hospedagem
$porta_smtp = 465; // A porta SMTP (pode variar dependendo das configurações do seu host)
$secure_smtp = "ssl"; // Use "tls" ou "ssl" dependendo das configurações do seu host

mail($destinatario, $assunto, $corpo, "From: $remetente", "-f$remetente");
    // Redirecionar o usuário após o envio do formulário
    header("Location: obrigado.html");
    exit;
?>