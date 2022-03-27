<?php
include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

    session_start();

    $img = $_GET['imagem'];
    $titulo = $_GET['titulo'];
    $valor = $_GET['valor'];
    
    $resultado = 'vazio';
    
    $id = $_GET['id'];
   

    include "conexao.php";

    $conn = conectar();

    $cpf = $_SESSION['cpf'];

    $sql = "INSERT INTO inscricao (data_hora_inscricao, resultado, imagem_evento, titulo_evento, valor_evento, cpf_atleta, id_evento) VALUES ( NOW(), '$resultado', '$img', '$titulo', '$valor', '$cpf','$id');";

    if ($conn->query($sql)) {
        header('Location: ../_pages/inscricao.php?id='.$id.'&c=Inscrição+realizada+com+sucesso');
     } else {
        echo $conn->error;
    }

    desconectar($conn);

} else {
  header("Location: ".URL());
}
?>