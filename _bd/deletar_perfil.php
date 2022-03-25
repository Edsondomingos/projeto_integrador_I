<?php

$cpf = $_GET['cpf'];

    include "conexao.php";

    $conn = conectar();

    $sql = "DELETE FROM atleta WHERE cpf=".$cpf;

    if($conn->query($sql)){
        echo "Perfil Deletado com sucesso!";
        //header ('location: index.php');
    }else{
        echo "Deu erro!";
        echo $conn->error;
    }

    desconectar($conn);

?>