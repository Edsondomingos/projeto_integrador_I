<?php 
	include '../_template/head.php';

	$id_evento = $_GET['id'];

	include '../_bd/conexao.php';

	$conn = conectar();

	// $sql = "SELECT * FROM inscricao WHERE cpf_atleta=$id_evento";
	$sql = "SELECT * FROM inscricao WHERE cpf_atleta=3 and id_evento=$id_evento";

	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		echo "<h1>Forma de Pagamento</h1>";
		echo "<section>";
		while ($row = $result->fetch_assoc()){
			echo "<article>";
			echo "<h2>Evento ".$row['id_evento']."<h2>";
			echo "<p>N° inscricao:".$row['numero_inscricao']."</p>";
			// echo "<form>";
			// echo
			// echo "</form>";
			include 'forma_pagamento.html';
			echo "</article>";
		}
		echo "</section>";
	}

	include '../_template/footer.php';
?>