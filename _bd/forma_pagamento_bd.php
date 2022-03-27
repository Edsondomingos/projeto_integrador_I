<?php 
include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){
	

	$forma = $_POST['forma'];
	$inscricao = $_POST['inscricao'];
	$titulo = $_POST['titulo'];
	$valor = $_POST['valor'];
	$id_evento = $_POST['id_evento'];
	$cpf_atleta = $_POST['cpf_atleta'];

	include '../_bd/conexao.php';

	$conn = conectar();

	$sql = "INSERT INTO pagamento (id, forma_de_pagamento, data_hora_pagamento, titulo, valor, cpf_atleta, id_evento, numeroinscricao_inscricao) VALUES ('id','$forma', NOW(), '$titulo', '$valor', '$cpf_atleta', '$id_evento', '$inscricao');";

	if($conn->query($sql)){
		header("Location: ../_pages/pagamento.php");
	} else {
		echo $conn->error;
	}
} else {
  header("Location: ".URL());
}

?>