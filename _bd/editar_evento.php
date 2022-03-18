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
    
    $codigo = $_GET["codigo"];

    include "../_bd/conexao.php";

    $conn = conectar();

    $sql = "SELECT * FROM evento WHERE codigo=".$codigo;

    $result = $conn->query($sql);

    $titulo ="titulo";
    $local_evento ="local_evento";
    $data_evento ="data_evento";
    $imagem ="imagem";
    $descricao ="descricao";

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $titulo = $row["titulo"];
            $local_evento = $row["local_evento"];
            $data_evento = $row["data_evento"];
            $imagem = $row["imagem"];
            $descricao = $row["descricao"];

        }
    }

    desconectar($conn);

    ?>

    <h1>Editar Perfil</h1>
    <form action="../_bd/editar_bd.php" method="post">
    <p>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>"/>
    </p>
    <p>
        <label for="local_evento">Local do Evento</label>
        <input type="text" name="local_evento" id="local_evento" value="<?php echo $local_evento; ?>"/>
    </p>
    <p>
        <label for="data_evento">Data do Evento</label>
        <input type="date" name="data_evento" id="data_evento" value="<?php echo $data_evento; ?>" />
    </p>
    <p>
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" id="imagem" value="<?php echo $imagem; ?>"/>
    </p>

    <p>
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" value="<?php echo $descricao; ?>" />
    </p>

    <p>
        <input type="submit" value="Editar">
    </p>
    </form>
</body>
</html>