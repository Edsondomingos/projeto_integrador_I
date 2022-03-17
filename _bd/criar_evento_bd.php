<?php

$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$data_evento = $_POST["data_evento"];
$local_evento = $_POST["local_evento"];
$imagem = $_POST["imagem"];


include "conexao.php";

$conn = conectar();

$sql = "INSERT INTO evento (titulo, descricao, data_evento, local_evento, imagem) VALUES ('$titulo', '$descricao', '$data_evento', '$local_evento', '$imagem')";

if($conn->query($sql)){
    header ('location: ../projeto_integrador/index.php');
}

desconectar($conn);


?>