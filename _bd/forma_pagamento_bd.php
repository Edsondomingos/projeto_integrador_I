<?php 

	$id_evento = $_GET['id'];

	include '../_bd/conexao.php';

	$conn = conectar();

	$sql = "INSERT INT pagamento (id, forma_pagamento, hora_pagamento, data_pagamento, valor, id_inscricao) VALUES ()"



?>