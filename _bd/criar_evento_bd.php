<?php

$local_evento = $_POST["local_evento"];
$data_evento = $_POST["data_evento"];
$imagem = $_POST["imagem"];
$descricao = $_POST["descricao"];
$titulo = $_POST["titulo"];
//$valor = $_POST["valor"];

echo $titulo, $descricao, $data_evento, $local_evento, $imagem, $valor;

include "conexao.php";

$conn = conectar();

$sql = "INSERT INTO evento (local_evento, data_evento, imagem, descricao, titulo, valor) VALUES ('$local_evento', '$data_evento', '$imagem', '$descricao', '$titulo', '$valor');";

    if($conn->query($sql)){
        header ('location: ../index.php');
        echo "Projeto cadastrado com sucesso!";
    }else{
        echo "Ocorreu algum erro";
        echo $conn->error;
    };

desconectar($conn);

?>