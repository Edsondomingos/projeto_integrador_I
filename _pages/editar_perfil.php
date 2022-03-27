    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">

        $("#cpf").mask("000.000.000-00");
        $("#telefone").mask("(00)00000-0000");

    </script>

    <?php

    include "../_template/head.php";

    if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

    $cpf_sessao = $_SESSION["cpf"];


    include "../_bd/conexao.php";

    $conn = conectar();

    $sql = "SELECT * FROM atleta WHERE cpf='".$cpf_sessao."';";

    $result = $conn->query($sql);

    $nome ="";
    $cpf ="";
    $data_de_nascimento ="";
    $telefone ="";
    $email ="";
    $senha ="";
    $usuario ="";

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $nome = $row["nome"];
            $cpf = $row["cpf"];
            $data_de_nascimento = $row["data_de_nascimento"];
            $telefone = $row["telefone"];
            $email = $row["email"];
            $senha = $row["senha"];
            $usuario = $row["usuario"];

        }
    }

    desconectar($conn);

    ?>

    <h1>Editar Perfil</h1>
    <form action="../_bd/editar_bd.php" method="post" class="formulario">
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>"/>
    </p>
    <p>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" maxlength="14" value="<?php echo $cpf; ?>"/>
    </p>
    <p>
        <label for="data_de_nascimento">Data de Nasciemto</label>
        <input type="date" name="data_de_nascimento" id="data_de_nascimento" value="<?php echo $data_de_nascimento; ?>" />
    </p>
    <p>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" maxlength="14" value="<?php echo $telefone; ?>"/>
    </p>

    <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>" />
    </p>

    <p>
        <label for="email">Senha</label>
        <input type="password" name="senha" id="senha" value="<?php echo $senha; ?>" />
    </p>

    <p>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" />
    </p>
    <input type="hidden" name="cpf_atual" value="<?php echo $cpf; ?>" />
    <p>
        <input type="submit" value="Editar" class="bt">
    </p>
    </form>

    <?php include "../_template/footer.php"; 

        } else {
          header("Location: ".URL());
        }

    ?>