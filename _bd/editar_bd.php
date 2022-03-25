<?php

$cpf = $_GET["cpf"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_de_nascimento = $_POST["data_de_nascimento"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = $_POST["usuario"];

include "../_bd/conexao.php";

$conn = conectar();

$sql = "UPDATE atleta SET nome='".$nome."', telefone='".$telefone."', data_de_nascimento='".$data_de_nascimento."', email='".$email."', senha='".$senha."', usuario='".$usuario."' WHERE cpf=$cpf";

if($conn->query($sql)){
    header ('location: ../_pages/perfil.php');
}else{
    echo "Ocorreu algum erro";
    echo $conn->error;
}

desconectar($conn);?>