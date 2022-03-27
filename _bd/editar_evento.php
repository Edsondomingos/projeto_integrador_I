    <?php

    include "../_template/head.php";
    
    $id = $_GET["id"];

    include "conexao.php";

    $conn = conectar();

    $sql = "SELECT * FROM evento WHERE id=".$id;

    $result = $conn->query($sql);

    $local_evento ="local_evento";
    $data_evento ="data_evento";
    $imagem ="imagem";
    $descricao ="descricao";
    $titulo ="titulo";
    $valor ="valor";

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $local_evento = $row["local_evento"];
            $data_evento = $row["data_evento"];
            $imagem = $row["imagem"];
            $descricao = $row["descricao"];
            $titulo = $row["titulo"];
            $valor = $row["valor"];


        }
    }

    desconectar($conn);

    ?>

    <h1>Editar Evento</h1>
    <form method="post" action="../_bd/editar_evento_bd.php?id=<?php echo $id; ?>" class="formulario" enctype="multipart/form-data">

    <p>
        <label for="titulo" >Titulo do Evento:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" required/>
    </p>

    <p>
        <label for="descricao">Descrição do Evento:</label>
        <input type="text" name="descricao" id="descricao" value="<?php echo $descricao; ?>" required/>
    </p>

    <p>
        <label for="local_evento" >Local do Evento</label>
        <input type="text" name="local_evento" id="local_evento" value="<?php echo $local_evento; ?>" required/>
    </p>

    <p>
        <label for="imagem" >Imagem:</label>
        <input type="file" name="imagem" id="imagem" value="<?php echo $imagem; ?>" required/>
    </p>

    <p>
        <label for="data_evento" >Data do Evento</label>
        <input type="date" name="data_evento" id="data_evento" value="<?php echo $data_evento; ?>" required/>
    </p>

    <p>
        <label for="valor" >Valor da Inscrição</label>
        <input type="number" name="valor" id="valor" value="<?php echo $valor; ?>" required/>
    </p>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p>
        <input type="submit" value="Editar" class="bt button-inputs">
    </p>
    </form>

<?php 
    include "../_template/footer.php" ?>