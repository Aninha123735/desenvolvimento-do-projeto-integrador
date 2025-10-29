<?php
session_start();

// Dados de conexão
$host = "127.0.0.1";
$usuario = "root";
$senha = "871356Vh@";
$banco = "empresa";

// Conectar ao banco
$conn = new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) die("Erro na conexão: " . $conn->connect_error);

if (isset($_POST['cpf']) && isset($_POST['senha'])) {
    $cpf = str_replace(['.', '-'], '', $_POST['cpf']);
    $senhaForm = $_POST['senha'];

    $sql = "SELECT senhas FROM funcionarios WHERE cpf = '$cpf'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $senhaBanco = $row['senhas'];

        if (password_verify($senhaForm, $senhaBanco) || $senhaForm === $senhaBanco) {
            $_SESSION['logado'] = true;
            $_SESSION['cpf'] = $cpf;
            header("Location: telaprincipal/telaprincipal.php");
            exit();
        } else {
            echo "<h2>Senha incorreta!</h2>";
        }
    } else {
        echo "<h2>CPF não encontrado!</h2>";
    }
} else {
    echo "<h2>Preencha o formulário para fazer login.</h2>";
}

$conn->close();
?>
