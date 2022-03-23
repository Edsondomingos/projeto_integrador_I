<?php

    include "conexao.php";

    $conn = conectar();

    $sql = "DELETE FROM atleta WHERE usuario='".$_SESSION['usuario']."' and senha='".$_SESSION['senha']."';";

    if($conn->query($sql)){
        header ('location: sair_sessao.php');
    }else{
        echo "Deu erro!";
        echo $conn->error;
    }

    desconectar($conn);

?>