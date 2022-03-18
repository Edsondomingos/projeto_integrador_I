<?php 
	include '../_template/head.php';

	// $id_evento = $_GET['id'];

	include '../_bd/conexao.php';

	$conn = conectar();

	// $sql = "SELECT * FROM inscricao WHERE cpf_atleta=$id_evento";
	$sql = "SELECT * FROM inscricao WHERE cpf_atleta=1 and id_evento=1";//$id_evento";

	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		echo "<h1>Pagamento</h1>";
		echo "<section>";
		while ($row = $result->fetch_assoc()){
			echo "<article>";
			echo "<h2>Evento ".$row['id_evento']."<h2>";
			echo "<p>N° inscricao:".$row['numero_inscricao']."</p>";
			?>
			<form action="../_bd/forma_pagamento_bd.php" method="post">
				<p>
					<label for="boleto">Boleto</label>
					<input type="radio" name="forma" value="boleto" id="boleto" required>
				</p>
				<p>
					<label for="pix">Pix</label>
					<input type="radio" name="forma" value="pix" id="pix" required>
				</p>
				<input type="submit" value="Pagar" class='bt-inscricao'>
			</form>
			<?php 
			// include 'forma_pagamento.html';
			echo "</article>";
		}
		echo "</section>";
	}

	include '../_template/footer.php';
?>