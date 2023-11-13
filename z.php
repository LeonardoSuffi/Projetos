<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$marca = $_POST['marca'];
$segmento = $_POST['segmento'];
$logo = $_POST['logo'];
$atividade = $_POST['atividade'];
$titular = $_POST['titular'];
$servername = "srv1084.hstgr.io";
$username = "u400829374_leodev";
$password = "Lu7leo8846*";
$database = "u400829374_leodev";
$tabela = "contatos";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
$sql = "INSERT INTO $tabela (Nome, Telefone, Email, Marca, Segmento, Logo, Atividade, Titular) VALUES ('$nome', '$tel', '$email', '$marca', '$segmento', '$logo', '$atividade', '$titular')";
if (mysqli_query($conn, $sql)) {
    echo "Cliente cadastrado com sucesso! O ID do cliente é:";
} else {
    echo "Erro ao cadastrar cliente: " . mysqli_error($conn);
}
?>