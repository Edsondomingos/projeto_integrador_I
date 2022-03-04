<?php 
	include '../_template/head.php';

	// $id_evento = $_GET['id'];
	// $cpf = $_SESSION['cpf'];

	include '../_bd/conexao.php';

	$conn = conectar();

	// $sql = "SELECT * FROM inscricao WHERE cpf_atleta=$cpf";
	$sql = "SELECT * FROM inscricao WHERE cpf_atleta=3";

	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		echo "<h1>Pagamento</h1>";
		echo "<section>";
		while ($row = $result->fetch_assoc()){
			echo "<article>";
			echo "<h2>Evento ".$row['id_evento']."<h2>";
			echo "<p>N° inscricao:".$row['numero_inscricao']."</p>";
			echo "<a href='forma_pagamento.php?id=".$row['id_evento']."' class='bt-inscricao'>Pagar</a>";
			echo "</article>";
		}
		echo "</section>";
	} else {
		echo "<h1>Você não está em nenhum evento</h1>";
	}

	include '../_template/footer.php';
?>