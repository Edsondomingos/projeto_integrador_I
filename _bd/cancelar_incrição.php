<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		$id_evento = $_GET['id'];

		include "conexao.php";

		$conn = conectar();

		$sql = "DELETE FROM inscricao WHERE cpf_atleta=".$_SESSION['cpf']." and id_evento=".$id_evento";";

		if ($conn->query($sql)){
			header('Location: ../index.php');
		}

		desconectar($conn);
	} else {
		header('Location: ../index.php')
	}
	

?>