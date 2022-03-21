<?php 
	function conectar(){
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "corrida";

		$conn = new mysqli($servidor, $usuario, $senha, $banco);

		if ($conn->connect_error){
			die("Erro".$conn->connect_error);
		}

		return $conn;
	}

	function desconectar($conn){
		$conn->close();
	}

?>