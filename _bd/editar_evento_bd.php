<?php

$correr = $_POST["correr"];
$titulo = $_POST["titulo"];
$local_evento = $_POST["local_evento"];
$data_evento = $_POST["data_evento"];
$imagem = $_POST["imagem"];
$descricao = $_POST["descricao"];

include "conexao.php";

$conn = conectar();

$sql = "UPDATE evento SET titulo='".$titulo."' , local_evento='".$local_evento."' , data_evento='".$data_evento."' , imagem='".$imagem."' , descricao='".$descricao."' WHERE correr=$correr";

if($conn->query($sql)){
    header ('location: ../_pages/criar_evento.php');
}else{
    echo "Ocorreu um erro";
}

desconectar($conn);
?>