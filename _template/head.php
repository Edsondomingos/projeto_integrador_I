<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de corridas</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}

		body {
			font-family: Arial;
		}

		header {
			background-image: linear-gradient(to top, #eee, rgba(220, 100, 0, 0.7));
		}

		h1 {
			text-align: center;
			font-size: 50px;
			color: orange;
			text-shadow: 2px 2px 2px black;
			height: 50px;
		}

		nav {
			margin: 0px 0 20px 0;
		}

		nav ul {
			display: flex;
			justify-content: flex-end;
			background-image: linear-gradient(to top, rgba(220, 100, 0, 0.7), #eee);
			border-bottom: 1px solid black;
			font-size: 30px;
			height: 40px;
			position: sticky;
		}

		nav ul li {
			list-style: none;
			border: 2px solid black;
			border-radius: 10% 10% 0 0;
			border-bottom: 0px;
			padding: 10px;
			box-sizing: border-box;
			color: #444;	
		}

		nav ul li:hover {
			background-color: #f80;
			border-color: white;
		}

		main {
			height: 75vh;
		}

		a {
			text-decoration: none;
			color: #000;
		}

		a:hover {
			color: white;
		}

		section {
			display: flex;
			padding: 10px;
		}

		article {
			border: 1px solid black;
			padding: 10px;
			margin: 10px;
			text-align: center;
		}

		article p {
			margin: 10px;
		}

		.bt-inscricao {
			background-color: red;
			padding: 5px;
			border-radius: 10px;
			color: white;
			font-weight: bold;
			margin: auto;
		}

		form {
			text-align: center;
			width: 250px;
			margin: auto;
			padding: 10px;
			/*margin: 20px;*/
			border: 1px solid black;
		}

		form input {
			padding: 5px;
			margin: 5px;
		}

		#corredor {
			display: flex;
			justify-content: space-around;
			margin-top: 30px;
			border-bottom: 1px dotted black;
		}

		footer {
			margin-top: 20px;
			text-align: center;
		}

		footer p {
			padding: 20px;
			background-image: linear-gradient(to top, rgba(220, 100, 0, 0.7), #fff);
		}

		/*footer figure {
			display: flex;
			justify-content: space-around;
		}
		.img-rodape {
			 width: 50px;
			 height: 50px;
			 background: url('corredor.gif');
		}*/
	</style>
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
					echo "<li><a href=''>Pagamentos</a></li>";
					echo "<li><a href=''>Sair</a></li>";
				} else {
					echo "<li><a href='./_pages/login.php'>Entrar</a></li>";
				}
			?>
			
		</ul>
	</nav>
<main>