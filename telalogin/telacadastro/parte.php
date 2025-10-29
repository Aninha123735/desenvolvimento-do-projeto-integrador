<?php
$host = "127.0.0.1";
$usuario = "root";
$senha = "871356Vh@";
$banco = "empresa";


$conn = new mysqli($host, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senhaForm = $_POST['senha'];


$sql = "INSERT INTO funcionarios (nome, cpf, senhas) VALUES ('$nome', '$cpf', '$senhaForm')";

if ($conn->query($sql) === TRUE) {

    header("Location: index.html");
    exit();
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
