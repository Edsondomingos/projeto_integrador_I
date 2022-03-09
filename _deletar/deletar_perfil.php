<?php

$perfil = $_GET["id"];

include "conexao.php";

$conn = conectar();

$sql = "DELETE FROM evento WHERE cpf=".$perfil;

if($conn->query($sql)){
    header ('location: perfil.php');
}else{
    echo "Deu erro!";
    echo $conn->error;
}

desconectar($conn);

?>