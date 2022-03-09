<?php

$codigo = $_GET["id"];

include "conexao2.php";

$conn = conectar();

$sql = "DELETE FROM evento WHERE id=".$codigo;

if($conn->query($sql)){
    header ('location: listagem.php');
}else{
    echo "Deu erro!";
    echo $conn->error;
}

desconectar($conn);

?>