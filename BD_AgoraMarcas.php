CREATE DATABASE Cadastros
default character set utf8mb4
default collate utf8mb4_general_ci


CREATE TABLE contatos(
    id int not null auto_increment,
    Nome varchar(255),
    Telefone int,
    Email varchar(255),
    Marca varchar(255),
    Segmento varchar(255),
    primary key (id)
) default charset = utf8mb4

<?php
    $nome = $_POST["nome"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $marca = $_POST['marca'];
    $segmento = $_POST['segmento'];

    // Conexão com o banco de dados (substitua essas informações pelas suas configurações)
    $servername = "cpl03";
    $username = "acelera10x_leo";
    $password = "Lu7leo8846*";
    $database = "Cadastros";
    $tabela = "contatos";

    // Crie uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifique a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "INSERT INTO $tabela (Nome, Telefone, Email, Marca, Segmento) VALUES ('$nome', '$tel', '$email', '$marca', '$segmento')";

    if (mysqli_query($conn, $sql)) {
        $cCodInt = mysqli_insert_id($conn); // Obtenha o último ID inserido
        echo "Cliente cadastrado com sucesso! O ID do cliente é: " . $cCodInt;
    } else {
        echo "Erro ao cadastrar cliente: " . mysqli_error($conn);
    }
    ?>