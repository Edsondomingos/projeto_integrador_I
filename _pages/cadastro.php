
    <?php include "../_template/head.php"; ?>
   
      <h1>Cadastre-se</h1>

        <form  method="post" action="../_bd/cadastro_bd.php">
          
          
          <p>
            <label for="cpf"> 
                 <span>CPF</span>    
                 <input type="number" id="cpf" name="cpf" placeholder="Apenas números" required/>             
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
                <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone" required/>
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
            <input type="submit" value="Cadastrar" id="button">
          </p>  
        </form>
</body>
  </html>
    <?php include "../_template/footer.php"; ?>
