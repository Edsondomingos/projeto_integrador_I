<?php

	include "conexao.php";

	$conn = conectar();

	$sql = "DELETE FROM inscricao WHERE cpf_atleta ==".$_SESSION['cpf'].";";


?>