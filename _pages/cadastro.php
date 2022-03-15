<!-- <!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
   
  <body> -->
    <?php include "../_template/head.php"; ?>
    <main>
      <h1>Cadastre-se</h1>

        <form  method="POST" action="cadastro_db.sql">
          
          
            <label for="cpf">
               <p>
                <span>CPF</span>
               </p>  
              <input type="text" id="cpf" name="cpf">
            </label>
          
            <label for="name">
               <p>
                <span>Nome</span>
               </p>  
              <input type="text" id="name" name="nome">
            </label>

            <label for="nascimento">
               <p>
                <span>Data de Nascimento</span>
               </p>
              <input type="date" id="data" name="data">
            </label>
          
            <label for="telefone">
               <p>
                <span>Telefone</span>
               </p> 
              <input type="text" id="telefone" name="telefone">
            </label>
         
          <label for="email">
               <p>
                <span>E-Mail</span>
               </p>  
              <input type="text" id="email" name="email">
            </label>

            <label for="usuario">
              <p>
                <span>Usuário</span>
              </p> 
             <input type="text" id="usuario" name="usuario">
           </label>  
              
            <label for="password">
               <p> 
                <span>Senha</span>
               </p>  
              <input type="password" id="senha" name="senha">
            </label> 

          <p>
            <input type="submit" value="Cadastrar" id="button">
          </p>  
        </form>
    </main>
    <?php include "../_template/footer.php"; ?>
<!-- </body>
</html> -->