<?php

$id = $_GET["id"];
$local_evento = $_POST["local_evento"];
$data_evento = $_POST["data_evento"];
$imagem = $_POST["imagem"];
$descricao = $_POST["descricao"];
$titulo = $_POST["titulo"];
$valor = $_POST["valor"];


include "conexao.php";

$conn = conectar();

$sql = " UPDATE evento SET titulo='".$titulo."', local_evento='".$local_evento."' , data_evento='".$data_evento."', imagem='".$imagem."', descricao='".$descricao."', valor='".$valor."'  WHERE id=$id ";

if($conn->query($sql)){
    header ('location: ../_pages/criar_evento.php');
    echo "Projeto cadastrado com sucesso!";
}else{
    echo "Ocorreu um erro";
    echo $conn->error;
};

desconectar($conn);
?>