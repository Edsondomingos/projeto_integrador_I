<?php
	session_start();
	// if (isset($_SESSION['usuario'])){
		$id_evento = $_GET['id'];

		include "conexao.php";

		$conn = conectar();

		// $verificar = "(SELECT cpf FROM atleta WHERE usuario='".$_SESSION['usuario']."' and senha='".$_SESSION['senha']."')";
		// echo $conn->query($verificar);

		$sql = "DELETE FROM inscricao WHERE cpf_atleta='".$_SESSION['cpf']."' and id_evento='".$id_evento."';";

		if ($conn->query($sql)){
			header('Location: ../_pages/inscricao.php?id='.$id_evento);
		} else {
			echo $conn->error;
		}

		desconectar($conn);
	// } else {
	// 	header('Location: ../index.php')
	// }
	

?>