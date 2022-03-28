<?php
	session_start();
	if(isset($_SESSION['usuario']) && isset($_SESSION['cpf'])) {
        session_abort();
	include '../_template/head.php';

	include '../_bd/conexao.php';

	$conn = conectar();

	$cpf = $_SESSION['cpf'];

	$sql = "SELECT * FROM inscricao WHERE cpf_atleta='$cpf'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		echo "<h1>Pagamento</h1>";
		echo "<section class='secao'>";
		while ($row = $result->fetch_assoc()){
			echo "<article class='item-secao'>";
			echo "<h2>".$row['titulo_evento']."<h2>";
			echo "<img src='../_imgs/img_evento/".$row['imagem_evento']."' />";
			echo "<p>Valor: ".$row['valor_evento']."</p>";
			echo "<p>Inscricao: ".$row['numeroinscricao']."</p>";
			$nincricao = $row['numeroinscricao'];
			$titulo = $row['titulo_evento'];
			$imagem = $row['imagem_evento'];
			$valor = $row['valor_evento'];
			$id_evento = $row['id_evento'];
			$cpf_atleta = $row['cpf_atleta'];
			?>
			<form action="../_bd/forma_pagamento_bd.php" method="post">
				
				<input type="hidden" name="inscricao" value="<?php echo $nincricao; ?>">
				<input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
				<input type="hidden" name="valor" value="<?php echo $valor; ?>">
				<input type="hidden" name="cpf_atleta" value="<?php echo $cpf_atleta; ?>">
				<input type="hidden" name="id_evento" value="<?php echo $id_evento; ?>">

				<?php
				$verificar = "SELECT * FROM pagamento WHERE num_evento='$id_evento' and pagador='".$_SESSION['cpf']."';";
				if ($conn->query($verificar)->num_rows > 0){
					echo '<p style="background: #2f2;text-align: center">PAGO<p>';				
				} else {
				?> 
					<p>
					<input type="radio" name="forma" value="boleto" id="boleto" required>
					<label for="boleto">Boleto</label>
					</p>
					<p>
						<input type="radio" name="forma" value="pix" id="pix" required>
						<label for="pix">Pix</label>					
					</p>

				<?php
					echo '<input type="submit" value="Pagar" class="bt button-inputs">';
					
				}

				?>
				
			</form>
			<?php 
			
			echo "</article>";
		}
		echo "</section>";
	}

	include '../_template/footer.php';
	} else {
		function URL(){
			$_SERVER['REQUEST_URI'] = '/projeto_integrador_i/';
			return $_SERVER['REQUEST_URI'];
		}
		header('Location: '.URL());
	}
?>