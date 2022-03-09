<?php

$perfil = $_GET["cpf"];

include "conexao.php";

$conn = conectar();

$sql = "DELETE FROM atleta WHERE cpf=".$perfil;

if($conn->query($sql)){
    header ('location: perfil.php');
}else{
    echo "Deu erro!";
    echo $conn->error;
}

desconectar($conn);

?>