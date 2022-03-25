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
		echo "<section class='secao'>";
		while ($row = $result->fetch_assoc()){
			echo "<article class='item-secao'>";
			echo "<h2>Evento ".$row['id_evento']."<h2>";
			echo "<p>Cpf:  ".$row['cpf_atleta']."<p>";
			echo "<p>Inscricao: ".$row['numeroinscricao']."</p>";
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
				<input type="submit" value="Pagar" class='bt-inscricao bt'>
			</form>
			<?php 
			// include 'forma_pagamento.html';
			echo "</article>";
		}
		echo "</section>";
	}

	include '../_template/footer.php';
?>