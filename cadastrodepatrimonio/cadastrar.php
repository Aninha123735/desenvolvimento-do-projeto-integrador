<?php
include("conexao.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patrimonio = $_POST["patrimonio"];
    $item = $_POST["item"];
    $marca = $_POST["marca"];
    $ano = $_POST["ano"];
    $localizacao = $_POST["localizacao"];

    $sql = "INSERT INTO patrimonio (numero_patrimonio, item, marca, ano, localizacao)
        VALUES ('$patrimonio', '$item', '$marca', '$ano', '$localizacao')";



    if ($conexao->query($sql) === TRUE) {
        echo "Bem cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
}
?>
