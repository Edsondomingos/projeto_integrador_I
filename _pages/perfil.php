
	<?php  include "../_template/head.php"; 

	if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){
	?>
	<?php
	if(isset($_GET['c'])){
		echo "<p style='text-align:center;background-color:aqua;height: 30px' id='msg'>".$_GET['c']."</p>";			
			}
	?>
	<h1>Perfil</h1>

	<section class="secao">
	<article class="">
	
	</article>	
	</section>
	

	<section class="secao">
	<article class="item-secao">
	<h2>Dados Cadastrados</h2>
	
		<?php

			

			include "../_bd/conexao.php";

			$usuario = $_SESSION['usuario'];
			$conn = conectar();

			$sql = "SELECT * FROM atleta WHERE usuario='$usuario';";

			$result = $conn->query($sql);
			echo "<ul>";
			if($result->num_rows > 0){
				
			while($row= $result->fetch_assoc()){
                
                    $cpf = $row['cpf'];
                    $nome = $row['nome'];
                    $user = $row['usuario'];
                    $telefone = $row['telefone'];
                    $email = $row['email'];
                    $data = $row['data_de_nascimento'];
                    $img = $row['imagem'];
                }

			};

			if(isset($_POST['enviaFoto'])){
				$foto = $_FILES['file'];
				$fotoExt = explode('.', $foto['name']);
				$extensao = $fotoExt[sizeof($fotoExt)-1];
				if(
					$extensao != 'jpg' &&
					$extensao != 'jpeg' &&
					$extensao != 'png'
					//ver extensões em maiusculo
				){
					header('Location: ../_pages/perfil.php');
				} else {
					$novoNome = $_SESSION['cpf'].'.png';
					move_uploaded_file($foto['tmp_name'], '../_imgs/img_perfil/'.$novoNome);
					$salvaImg = "UPDATE atleta SET imagem='$novoNome' WHERE cpf='".$_SESSION['cpf']."'";
					$conn->query($salvaImg);
				}
			}

			?>
			<form id="form" action="" method="post" enctype="multipart/form-data">
				<label for="fotoPerfil"><img src="../_imgs/img_perfil/<?php echo $img; ?>" style="border-radius: 10px">Click e escolha uma foto de perfil</label>
				<input type="file" name="file" id="fotoPerfil" style="display: none;" />
				<input type="submit" name="enviaFoto" value="Confirmar foto" class="bt button-inputs" id="mdfoto" style="visibility: hidden;: ">
				<br/><br/><a href="editar_perfil.php" class="bt">Alterar Dados
		          <!-- <button></button> -->
				</a>
			</form>
			<p></p>
			<p>Cpf: <?php echo $cpf; ?>.</p>
  			<p>Nome: <?php echo $nome; ?></p>
  			<p>Usuário: <?php echo $user; ?></p>
  			<p>Data de Nascimento: <?php echo $data; ?></p>
            <p>Telefone: <?php echo $telefone; ?></p>
            <p>E-Mail: <?php echo $email; ?></p>
	</article>
	</section>
	<script type="text/javascript" src="script.js"></script>
	<?php  include "../_template/footer.php"; ?>
<?php
	} else {
      header("Location: ".URL());
    }
?>