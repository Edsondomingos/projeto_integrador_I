<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reaproveitar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<h1>Eventos de Corrida</h1>
	</header>

	<nav>
		<ul>
			
			<?php
				session_start();
				if(isset($_SESSION['usuario'])){
					echo "<li><a href='./pagina.php'>Página inicial</a></li>";
					echo "<li><a href=''>Perfil</a></li>";
					echo "<li><a href=''>Criar evento</a></li>";
					echo "<li><a href=''>Sair</a></li>";
				} else {
					echo "<li id='criar'><a href=''>Entrar</a></li>";
					echo "<li id='teste'>Teste</li>";
				}
			?>
			
		</ul>
	</nav>
<main>