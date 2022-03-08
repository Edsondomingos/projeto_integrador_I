<html>
  <head>
    <title>Autenticar Usuário</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Login</h1>  

    <form action="autenticar.php" method="POST">
        <?php
          if (isset($_GET["autenticar"])) {
            echo "<strong style='color:red;'>" .$_GET["autenticar"]. "</strong>";
          };
        ?>
        <p> <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" /></p>
        
            
        
        <p> <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" /></p>
            
        <input type="submit" value="Autenticar" name="autenticar" >       
       
    </form>

</body>
</html>