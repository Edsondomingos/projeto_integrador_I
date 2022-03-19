
  <?php  include "../_template/head.php"; ?>

  <h1>Login</h1>

  <form action="../_bd/autenticar.php" method="POST">
      <?php
        if (isset($_GET["autenticar"])) {
          echo "<strong style='color:red;'>" .$_GET["autenticar"]. "</strong>";
        };
      ?>
      <p> <label for="usuario">Usuário:</label><br/>
      <input type="text" id="usuario" name="usuario" /></p>
      
          
      
      <p> <label for="senha">Senha:</label><br/>
      <input type="password" id="senha" name="senha" /></p>
          
      <input type="submit" value="Autenticar" name="autenticar" >       
     
  </form>

  <?php  include "../_template/footer.php"; ?>
