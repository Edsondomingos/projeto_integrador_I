
  <?php  include "../_template/head.php"; 

  if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){
      header("Location: ".URL()."index.php");
    } else {
  ?>

  <h1>Login</h1>

  <form action="../_bd/autenticar.php" method="POST" class="formulario">
      <?php
        if (isset($_GET["autenticar"])) {
          echo "<strong style='color:red;'>" .$_GET["autenticar"]. "</strong>";
        };
      ?>
      <p> <label for="usuario">Usuário:</label><br/>
      <input type="text" id="usuario" name="usuario" autofocus /></p>
      
          
      
      <p> <label for="senha">Senha:</label><br/>
      <input type="password" id="senha" name="senha" /></p>
          
      <input type="submit" value="Autenticar" name="autenticar" class="bt button-inputs">       
     
  </form>

  <?php  include "../_template/footer.php"; 
    }
  ?>
