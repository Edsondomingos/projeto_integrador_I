    <?php include '../_template/head.php'; 
    if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){


    ?>

    <form action="../_bd/criar_evento_bd.php" method="post" class="formulario" enctype="multipart/form-data">

    <p>
        <label for="titulo" >Titulo do Evento:</label>
        <input type="text" name="titulo" id="titulo" autofocus required>
    </p>

    <p>
        <label for="descricao">Descrição do Evento:</label>
        <input type="text" name="descricao" id="descricao" required>
    </p>

    <p>
        <label for="local_evento" >Local do Evento</label>
        <input type="text" name="local_evento" id="local_evento" required>
    </p>

    <p>
        <label for="imagem" >Imagem:</label>
        <input type="file" name="imagem" id="imagem" required>
    </p>

    <p>
        <label for="data_evento" >Data do Evento</label>
        <input type="date" name="data_evento" id="data_evento" required>
    </p>

    <p>
        <label for="valor" >Valor da Inscrição</label>
        <input type="number" name="valor" id="valor" required>
    </p>

    <p><input type="submit" name="enviaFoto" value="Cadastrar" class="bt button-inputs"></p>

    </form>
    <?php include '../_template/footer.php'; 
        } else {
          header("Location: ".URL());
        }

    ?>