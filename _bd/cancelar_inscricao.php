<?php
	session_start();
	
		$id_evento = $_GET['id'];

		include "conexao.php";

		$conn = conectar();

		$sql = "DELETE FROM inscricao WHERE cpf_atleta='".$_SESSION['cpf']."' and id_evento='".$id_evento."';";

		if ($conn->query($sql)){
			header('Location: ../_pages/inscricao.php?id='.$id_evento);
		} else {
			header('Location: ../_pages/inscricao.php?id='.$id_evento.'&nao=inscriçao+ja+foi+paga');
		}

		desconectar($conn);
	

?>