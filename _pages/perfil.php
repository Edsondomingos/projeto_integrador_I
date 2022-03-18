<?php 
	// session_start();
	// if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){
?>
		<?php  include "../_template/head.php"; ?>
		<a href="index.php">
		</a>
		<h1>Perfil</h1>
		<?php
	
		if(isset($_GET['bv'])){
			echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['bv']."</p>";
		};

		?>
		<section class="bt-perfil">
		<a href="./editar_perfil.php">
			<button class="bt-inscricao">Alterar Dados</button></a>

		<a href='../_bd/deletar_perfil.php'>
			<button class="bt-inscricao">Excluir Perfil</button></a>		
		</section>

		<section class="perfil">
		<article>
		<h2>Dados Cadastrados</h2>
		
			<?php

				if(isset($_GET['c'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['c']."</p>";
				
				}else if(isset($_GET['e'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['e']."</p>";
				}else if(isset($_GET['r'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['r']."</p>";
				};

				include "../_bd/conexao.php";

				$conn = conectar();

				$sql = "SELECT * FROM atleta;";

				$result = $conn->query($sql);
				echo "<ul>";
				if($result->num_rows > 0){
					
				while($row= $result->fetch_assoc()){
                    
                            echo "<p>Cpf: ".$row['cpf']."</p>";
      						echo "<p>Nome: ".$row['nome']."</p>";
      						echo "<p>Data de Nascimento: ".$row['data_de_nascimento']."</p>";
                            echo "<p>Telefone: ".$row['telefone']."</p>";
                            echo "<p>E-Mail: ".$row['email']."</p>";
                            echo "<p>Usuário: ".$row['usuario']."</p>";
          			        echo "<p>Senha: ".$row['senha']."</p>";

					};
}
			?>
	</article>
	</section>
	<script type="text/javascript" src="script.js"></script>
	<?php  include "../_template/footer.php"; ?>
<?php
	// }else{
	// 	header('Location: index.php');
	// };
?>