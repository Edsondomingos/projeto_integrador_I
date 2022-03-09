<?php

$codigo = $_GET["id"];

include "conexao.php";

$conn = conectar();

$sql = "DELETE FROM evento WHERE id=".$codigo;

if($conn->query($sql)){
    header ('location: evento.php');
}else{
    echo "Deu erro!";
    echo $conn->error;
}

desconectar($conn);

?>