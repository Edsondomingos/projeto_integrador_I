<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Evento</title>
</head>
<body>
    
    <?php include '../_template/head.php'; ?>

    <form action="../_bd/criar_evento_bd.php" method="post">

    <p>
        <label for="titulo" >Titulo do Evento:</label>
        <input type="text" name="titulo" id="titulo">
    </p>

    <p>
        <label for="descricao" >Descrição do Evento:</label>
        <input type="text" name="descricao" id="descricao">
    </p>

    <p>
        <label for="local_evento" >Local do Evento</label>
        <input type="text" name="local_evento" id="local_evento">
    </p>

    <p>
        <label for="imagem" >Imagem:</label>
        <input type="file" name="imagem" id="imagem">
    </p>

    <p>
        <label for="data_evento" >Data do Evento</label>
        <input type="date" name="data_evento" id="data_evento">
    </p>

    <p>
        <label for="valor" >Valor da Inscrição</label>
        <input type="number" name="valor" id="valor" >
    </p>

    <p><input type="submit" value="Cadastrar"></p>

    </form>
    <?php include '../_template/footer.php'; ?>
</body>
</html>