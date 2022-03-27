

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">

  $("#cpf").mask("000.000.000-00");
  $("#telefone").mask("(00)00000-0000");

</script>
    <?php include "../_template/head.php"; 
    if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){
      header("Location: ".URL()."index.php");
    } else {


    ?>
   
      <h1>Cadastre-se</h1>

        <form  method="post" action="../_bd/cadastro_bd.php" class="formulario">
          
          
          <p>
            <label for="cpf"> 
                 <span>CPF</span>    
                 <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="Digite seu CPF" required autofocus />             

            </label>
          </p>    
            
          
          <p>
            <label for="name">
                <span>Nome</span>          
                <input type="text" id="name" name="nome" placeholder="Digite seu Nome Completo" required/>
            </label>
          </p>
            
            
          <p>
            <label for="nascimento">
                <span>Data de Nascimento</span>
                <input type="date" id="data" name="nascimento" required>
            </label>
          </p>    
            
          
          <p>  
            <label for="telefone">
                <span>Telefone</span>
                <input type="text" id="telefone" name="telefone" maxlength="14" placeholder="Digite seu Telefone" required/>
            </label>
          </p>    
            
         
          <p>
            <label for="email">
                <span>E-Mail</span> 
                <input type="text" id="email" name="email" placeholder="Digite seu E-Mail" required/>
            </label>
          </p>  
            
            
          <p>
            <label for="usuario">             
                <span>Usuário</span> 
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu ID de Usuário" required/>
            </label> 
          </p>    
            
            
          <p>
            <label for="password"> 
                <span>Senha</span> 
              <input type="password" id="senha" name="senha" placeholder="Digite sua Senha" required/>
            </label> 
          </p>      
            

          <p>
            <input type="submit" value="Cadastrar" id="button" class="bt button-inputs">
          </p>  
        </form>

    <?php include "../_template/footer.php"; 
      
      }

    ?>
