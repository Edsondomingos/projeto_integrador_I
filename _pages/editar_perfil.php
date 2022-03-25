<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
</head>
<body>

    <?php
    
    //session_start();
    $cpf = $_GET["cpf"];


    include "../_bd/conexao.php";

    $conn = conectar();

    $sql = "SELECT * FROM atleta WHERE cpf=".$cpf;

    $result = $conn->query($sql);

    $nome ="nome";
    $cpf ="cpf";
    $data_de_nascimento ="data_de_nascimento";
    $telefone ="telefone";
    $email ="email";
    $senha ="senha";
    $usuario ="usuario";

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
    <form action="../_bd/editar_bd.php?id=<?php echo $cpf; ?>" method="post">
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
        <input type="number" name="telefone" id="telefone" value="<?php echo $telefone; ?>"/>
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
    <input type="hidden" name="cpf" value="<?php echo $cpf; ?>" />
    <p>
        <input type="submit" value="Editar">
    </p>
    </form>
</body>
</html>