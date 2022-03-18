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
		echo "<section class='pagamento'>";
		while ($row = $result->fetch_assoc()){
			echo "<article>";
			echo "<h2>Evento ".$row['id_evento']."<h2>";
			echo "<p>N° inscricao:".$row['numero_inscricao']."</p>";
			?>
			<form action="../_bd/forma_pagamento_bd.php" method="post">
				<p>
					<input type="radio" name="forma" value="boleto" id="boleto" required>
					<label for="boleto">Boleto</label>
				</p>
				<p>
					<input type="radio" name="forma" value="pix" id="pix" required>
					<label for="pix">Pix</label>					
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