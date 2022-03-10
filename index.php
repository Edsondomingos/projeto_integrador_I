<?php
	include './_template/head.php';
	include './_bd/conexao.php';

	$conn = conectar();

	$sql = "SELECT * FROM evento";

	$result = $conn->query($sql);
	// echo $result->num_row;
	if ($result->num_rows > 0){
		echo "<section>";
		while ($row = $result->fetch_assoc()){
			
			echo "<article>";
			echo "<h2>".$row['titulo']."</h2>";
			echo "<p>".$row['descricao']."</p>";
			echo "<p>".$row['data_evento']."</p>";
			echo "<p>".$row['local_evento']."</p>";
			echo "<a href='evento.php?id=".$row['id']."' class='bt-inscricao'>Detalhes</a>";
			echo "</article>";
			
		}
		echo "</section>";
	}
	include './_template/footer.php';

?>