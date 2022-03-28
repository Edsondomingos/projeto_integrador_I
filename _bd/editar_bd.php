<?php
session_start();

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$cpf_atual = $_POST["cpf_atual"];
$data_de_nascimento = $_POST["data_de_nascimento"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = $_POST["usuario"];

include "../_bd/conexao.php";

$conn = conectar();

$sql = "UPDATE atleta SET nome='".$nome."', telefone='".$telefone."', data_de_nascimento='".$data_de_nascimento."', email='".$email."', senha='".$senha."', usuario='".$usuario."', cpf='".$cpf."' WHERE cpf='$cpf_atual'";
echo $sql;
if($conn->query($sql)){
    $_SESSION["cpf"] = $cpf;
    header ('location: ../_pages/perfil.php?c=Alterações+salvas');
}else{
    echo "Ocorreu algum erro";
    echo $conn->error;
}

desconectar($conn);?>