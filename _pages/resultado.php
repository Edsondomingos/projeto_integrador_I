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
		if(isset($_GET['pdf'])){
			echo "<p id='msg' style='text-align:center;color:red;height: 30px;font-weight: bold'>".$_GET['pdf']."</p>";
		}
		if ($result->num_rows > 0){
			echo "<h1>Resultado</h1>";

			
			echo "<section class='secao'>";
			while ($row = $result->fetch_assoc()){
				echo "<article class='item-secao'>";
				echo "<h2>".$row['titulo_evento']."<h2>";
				echo "<img src='../_imgs/img_evento/".$row['imagem_evento']."' />";
				
				$nincricao = $row['numeroinscricao'];
				$titulo = $row['titulo_evento'];
				$imagem = $row['imagem_evento'];
				$valor = $row['valor_evento'];
				$id_evento = $row['id_evento'];
				$cpf_atleta = $row['cpf_atleta'];
				?>
				<form action="../_bd/resultado_bd.php?id=<?php echo $nincricao?>" method="post" enctype="multipart/form-data">
					<input type="hidden" name="titulo" value="<?php echo $titulo?>">
					<input type="hidden" name="id" value="<?php echo $id_evento?>">
					<p>
						<label for="pdf">PDF do resultado</label>
						<input type="file" name="resultado" id="pdf">
					</p>
					<input type="submit" class="bt button-inputs" value="Enviar reultado">
					
					
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