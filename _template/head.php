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
			echo "<a href='".URL()."'><li>Página inicial</li></a>";			
			if (isset($_SESSION['usuario'])){
				echo "<a href='".URL()."_pages/perfil.php'><li>Perfil</li></a>";
				echo "<a href='".URL()."_pages/criar_evento.php'><li>Criar evento</li></a>";
				echo "<a href='".URL()."_pages/pagamento.php'><li>Pagamentos</li></a>";
				echo "<a href='".URL()."/_bd/sair_sessao.php'><li>Sair</li></a>";
			} else {
				echo "<li><a href='".URL()."_pages/login.php'>Entrar</a></li>";
				echo "<li><a href='".URL()."_pages/cadastro.php'>Criar Conta</a></li>";
			}
		?>
			
		</ul>
	</nav>
<main>