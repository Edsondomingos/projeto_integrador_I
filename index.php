<?php
	include './_template/head.php';
	include './_bd/conexao.php';
	
	$conn = conectar();

	$sql = "SELECT * FROM evento";

	$result = $conn->query($sql);
	
	if ($result->num_rows > 0){
		echo "<section class='secao'>";
		while ($row = $result->fetch_assoc()){
			
			echo "<article class='item-secao'>";
			echo "<h2 title='O evento se chama ".$row['titulo']."'>".$row['titulo']."</h2>";
			echo "<img src='./_imgs/img_evento/".$row['imagem']."' alt='Imagem do evento' alt='anime'/>";
			echo "<p title='Descricao: ".$row['descricao']."'>Descrição: ".$row['descricao']."</p>";
			echo "<p title='Data: ".$row['data_evento']."'>Data: ".$row['data_evento']."</p>";
			echo "<p title='Local: ".$row['local_evento']."'>Local: ".$row['local_evento']."</p>";
			echo "<br/><br/><a href='./_pages/inscricao.php?id=".$row['id']."' class='bt button-inputs'  title='Link que te leva a pagina de detalhes do evento clicado'>Detalhes do evento</a>";
			echo "</article>";
			
		}
		echo "</section>";
	}
	
	include './_template/footer.php';

?>