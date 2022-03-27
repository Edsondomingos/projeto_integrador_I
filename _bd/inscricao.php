<?php
include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

    session_start();

    $img = $_GET['imagem'];
    $titulo = $_GET['titulo'];
    $valor = $_GET['valor'];
    // $data_hora_inscricao = $_GET[ "datetime" ];
    // $numero_inscricao = $_GET[ "numero" ];
    // $resultado = $_GET[ "resultado" ];
    // $cpf = $_GET[ "cpf" ];
   // $numeroinscricao = 'N Inscrição';
    $resultado = 'vazio';
    
    $id = $_GET['id'];
   // echo $numeroinscricao;
    // echo $resultado;
    // echo "id-evento".$id_evento;

    include "conexao.php";

    $conn = conectar();

    // $cpf = "(SELECT cpf FROM atleta WHERE usuario='".$_SESSION['usuario']."' and cpf='".$_SESSION['cpf']."')";
    // $buscaCpf = $conn->query($cpf)->num_rows;
    $cpf = $_SESSION['cpf'];

    // $sql = "INSERT INTO inscricao (data_hora_inscricao, numero_inscricao, resultado, cpf) VALORES (NOW(), '$numero_inscricao', '$resultado', '$cpf_atleta');" ;
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