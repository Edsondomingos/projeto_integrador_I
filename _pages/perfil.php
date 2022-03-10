<?php 
	session_start();
	if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){

		<a href="index.php">
		</a>
		<h1>Perfil</h1>
		<?php
	
		if(isset($_GET['bv'])){
			echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['bv']."</p>";
		};

		?>
		<section>
		<button><a href="cadastro.php">Alterar Dados</a></button>
		<button><a href='apagar.php'>Excluir Perfil</a></button>		
		</section>

		<section>
		<h2>Dados Cadastrados</h2>
		
			<?php

				if(isset($_GET['c'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['c']."</p>";
				
				}else if(isset($_GET['e'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['e']."</p>";
				}else if(isset($_GET['r'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['r']."</p>";
				};

				include "conexao.php";

				$conn = conectar();

				$sql = "SELECT * FROM atleta;";

				$result = $conn->query($sql);
				echo "<ul>";
				if($result->num_rows > 0){
					
				while($row= $result->fetch_assoc()){
            
						echo "Cpf".$row['cpf'];
						echo "Nome".$row['nome'];
						echo "Data de Nascimento".$row["data_de_nascimento"];
            echo "Telefone".$row["telefone"];
            echo "E-Mail".$row["email"];
            echo "Usuário".$row["usuario"];
            echo "Senha".$row["senha"];

					};
}
			?>
		
	</section>
	<script type="text/javascript" src="script.js"></script>

<?php
	}else{
		header('Location: index.php');
	};
?>