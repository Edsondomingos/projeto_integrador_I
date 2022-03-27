<?php
	include './_template/head.php';
	include './_bd/conexao.php';
	
	$conn = conectar();

	$sql = "SELECT * FROM evento";

	$result = $conn->query($sql);
	// echo $result->num_row;
	if ($result->num_rows > 0){
		echo "<section class='secao'>";
		while ($row = $result->fetch_assoc()){
			
			echo "<article class='item-secao'>";
			echo "<h2>".$row['titulo']."</h2>";
			echo "<img src='./_imgs/img_evento/".$row['imagem']."' />";
			// echo "<img src='".URL()."_imgs/corredor.gif' />";
			// echo "<img src='".URL()."_imgs/".$row['imagem']."' />";
			echo "<p>Descrição: ".$row['descricao']."</p>";
			echo "<p>Data: ".$row['data_evento']."</p>";
			echo "<p>Local: ".$row['local_evento']."</p>";
			echo "<a href='./_pages/inscricao.php?id=".$row['id']."' class='bt'>Detalhes</a>";
			echo "</article>";
			
		}
		echo "</section>";
	}
	
	include './_template/footer.php';

?>