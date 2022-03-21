<?php
    session_start();
    // $data_hora_inscricao = $_POST[ "datetime" ];
    // $numero_inscricao = $_POST[ "numero" ];
    // $resultado = $_POST[ "resultado" ];
    // $cpf = $_POST[ "cpf" ];
   // $numeroinscricao = 'N Inscrição';
    $resultado = 'vazio';
    $cpf = $_SESSION['cpf'];
    $id_evento = $_GET['id_evento'];
    echo $numeroinscricao;
    echo $resultado;
    echo $cpf;
    echo $id_evento;

    include "conexao.php";

    $conn = conectar();

    // $sql = "INSERT INTO inscricao (data_hora_inscricao, numero_inscricao, resultado, cpf) VALORES (NOW(), '$numero_inscricao', '$resultado', '$cpf_atleta');" ;
    $sql = "INSERT INTO inscricao (data_hora_inscricao, numeroinscricao, resultado, cpf_atleta, id_evento) VALUES (NOW(), '$resultado', '$cpf','$id_evento');";

    if ($conn->query($sql)) {
        header('Location: ../inscricao.php?c=Inscrição+realizada+com+sucesso');
     } //else {
    //     header('Location: ../_pages/inscricao.php?id='.$id_evento);
    // }

    desconectar($conn);


?>