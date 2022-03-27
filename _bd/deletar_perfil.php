<?php

include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

// $cpf = $_GET['cpf'];

//     include "conexao.php";

//     $conn = conectar();

//     $sql = "DELETE FROM atleta WHERE cpf=".$cpf;

//     if($conn->query($sql)){
//         echo "Perfil Deletado com sucesso!";
//         //header ('location: index.php');
//     }else{
//         echo "Deu erro!";
//         echo $conn->error;
//     }

//     desconectar($conn);

} else {
  header("Location: ".URL());
}

?>