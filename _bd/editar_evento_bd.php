<?php

$local_evento = $_POST["local_evento"];
$data_evento = $_POST["data_evento"];
$imagem = $_POST["imagem"];
$descricao = $_POST["descricao"];
$titulo = $_POST["titulo"];
$valor = $_POST["valor"];

echo $titulo, $descricao, $data_evento, $local_evento, $imagem;

include "conexao.php";

$conn = conectar();

$sql = "UPDATE evento SET titulo='".$titulo."' , local_evento='".$local_evento."' , data_evento='".$data_evento."' , imagem='".$imagem."' , descricao='".$descricao."' WHERE correr=$correr";

if($conn->query($sql)){
    header ('location: ../_pages/criar_evento.php');
    echo "Projeto cadastrado com sucesso!";
}else{
    echo "Ocorreu um erro";
    echo $conn->error;
};

desconectar($conn);
?>