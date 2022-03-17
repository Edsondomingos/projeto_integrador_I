<?php

$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$data_evento = $_POST["data_evento"];
$local_evento = $_POST["local_evento"];
$resultado = $_POST["resultado"];
$imagem = $_POST["imagem"];


include "conexao2.php";

$conn = conectar();

$sql = "INSERT INTO evento (titulo, descricao, data_evento, local_evento, resultado, imagem) VALUES ('$titulo', '$descricao', '$data_evento', '$local_evento', '$resultado', '$imagem')";

if($conn->query($sql)){
    header ('location: listagem.php');
}

desconectar($conn);


?>