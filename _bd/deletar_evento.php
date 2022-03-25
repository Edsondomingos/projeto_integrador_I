<?php

$id = $_GET["id"];

include "../_bd/conexao.php";

$conn = conectar();

$sql = "DELETE FROM evento WHERE id=".$id;

if($conn->query($sql)){
    header ('location: ../index.php');
}else{
    echo "Deu erro!";
    echo $conn->error;
}

desconectar($conn);

?>