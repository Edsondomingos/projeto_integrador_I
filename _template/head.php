<?php

	function URL(){
		$_SERVER['REQUEST_URI'] = '/projeto_integrador_i/';
		return $_SERVER['REQUEST_URI'];
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de corridas</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL() ?>_css/style.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<div>
	<header>
		<h1>Eventos de Corrida</h1>
	</header>

	<nav>
		<ul>
		
		<?php 
			
			session_start();
			echo "<li><a href='".URL()."'>Página inicial</a></li>";			
			if (isset($_SESSION['usuario'])){
				echo "<li><a href='".URL()."_pages/perfil.php'>Perfil</a></li>";
				echo "<li><a href='".URL()."_pages/criar_evento.php'>Criar evento</a></li>";
				echo "<li><a href='".URL()."_pages/pagamento.php'>Pagamentos</a></li>";
				echo "<li><a href='".URL()."/_bd/sair_sessao.php'>Sair</a></li>";
			} else {
				echo "<li><a href='".URL()."_pages/login.php'>Entrar</a></li>";
				echo "<li><a href='".URL()."_pages/cadastro.php'>Criar Conta</a></li>";
			}
		?>
			
		</ul>
	</nav>
<main>