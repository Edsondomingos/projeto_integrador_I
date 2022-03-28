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
	<link rel="stylesheet" type="text/css" href="<?php echo URL() ?>_css/styleMobile.css">
</head>
<body>
	<div>
	<header>
		<h1 title="Site de ">Eventos de Corrida</h1>
	</header>

	<nav role="menubar">
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
				echo "<a href='".URL()."_pages/login.php'><li>Entrar</li></a>";
				echo "<a href='".URL()."_pages/cadastro.php'><li>Criar Conta</li></a>";
			}
		?>
			
		</ul>
	</nav>
<main role="main">

