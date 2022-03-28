<?php
	include "conexao.php";
	$conn = conectar();

	$titulo = $_POST['titulo'];
	$id = $_POST['id'];

	$resultado = $_FILES['resultado'];
	$resultExt = explode('.', $resultado['name']);
	$extensao = $resultExt[sizeof($resultExt)-1];
	if(
		$extensao != 'pdf'
	){
		header('Location: ../_pages/resultado.php?id='.$id.'&pdf=Apenas+pdf');
	} else {
		$novoNome = $titulo.'_'.$id.'.pdf';
		move_uploaded_file($resultado['tmp_name'], '../_imgs/pdfs/'.$novoNome);
		$salvapdf = "UPDATE inscricao SET resultado='$novoNome' WHERE id_evento='$id'";
		if($conn->query($salvapdf)){
			header("Location: ../_pages/inscricao.php?id=".$id);
		}
	}




?>