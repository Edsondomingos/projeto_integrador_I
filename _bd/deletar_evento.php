<?php
include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

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

} else {
  header("Location: ".URL());
}

?>