<?php

$data_inscricao = $_POST["data"];
$hora_inscricao = $_POST["hora"];
$numero_inscricao = $_POST["numero"];
$resultado = $_POST["resulta"];
$cpf = $_POST["cpf"];

include "Conexao.php";

$conn = conectar();

$sql = "INSERT INTO inscricao (data_inscricao, hora_inscricao, numero_inscricao, resultado, cpf) VALUES ('$data_inscricao', '$hora_inscricao', '$numero_inscricao', '$resultado', '$cpf_atleta');";

if($conn->query($sql)){
    header ('location:perfil.php?c=Produto+cadastrado+com+sucesso');
}

desconectar($conn);


?>