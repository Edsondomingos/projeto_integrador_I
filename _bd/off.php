<?php

	$test1 = "asasa";
	$test2 = "dsfdfdfdf";
	echo $test1.$test2;
	include "conexao.php";
	$cpf = 1;
	$conn = conectar();
	$inscricao = "SELECT * FROM inscricao WHERE cpf_atleta='$cpf'";

	$result = $conn->query($inscricao);

	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){			
			$numeroinscricao = $row['numeroinscricao'];
			$cpf_atleta = $row['cpf_atleta'];
			$id_evento = $row['id_evento'];
		}
	};
	
	echo "<h2>Evento ".$numeroinscricao."<h2>";
	echo "<p>Inscricao: ".$cpf_atleta."</p>";
	echo "<p>Inscricao: ".$id_evento."</p>";

	$evento = "SELECT * FROM inscricao WHERE id='$id_evento'";

	$result = $conn->query($evento);

	if ($result->num_rows > 0){
		echo "<h1>Pagamento</h1>";
		echo "<section class='secao'>";
		while ($row = $result->fetch_assoc()){			
			$incricao = $row['numeroinscricao'];
			$incricao = $row['cpf_atleta'];
			$incricao = $row['id_evento'];
		}
	}

?>