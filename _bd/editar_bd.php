<?php

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_de_nascimento = $_POST["data_de_nascimento"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = $_POST["usuario"];

include "";

$conn = conectar();

$sql = "UPDATE projeto1 SET nome='".$nome."' , telefone='".$telefone."' , cpf='".$cpf."' , data_de_nascimento='".$data_de_nascimento."' , email='".$email."' , senha='".$senha."' , usuario='".$usuario."' WHERE codigo=$codigo";

if($conn->query($sql)){
    header ('location:');
}else{
    echo "Ocorreu algum erro";
}

desconectar($conn);
?>