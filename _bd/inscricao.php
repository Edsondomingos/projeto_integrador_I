<?php
    session_start();
    // $data_hora_inscricao = $_POST[ "datetime" ];
    // $numero_inscricao = $_POST[ "numero" ];
    // $resultado = $_POST[ "resultado" ];
    // $cpf = $_POST[ "cpf" ];
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
    $sql = "INSERT INTO inscricao (data_hora_inscricao, resultado, cpf_atleta, id_evento) VALUES ( NOW(), '$resultado', '$cpf','$id');";

    if ($conn->query($sql)) {
        header('Location: ../_pages/inscricao.php?id='.$id.'&c=Inscrição+realizada+com+sucesso');
        
     } else {
        echo $conn->error;
    }

    desconectar($conn);


?>