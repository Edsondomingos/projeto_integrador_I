

    <?php 
        include  "../_template/head.php" ; 
        include '../_bd/conexao.php';
        $conn = conectar();
    ?>

    <h1> Inscrição </h1>
    <!-- <button><a href='../_bd/perfil.php'>Perfil</a></button> -->
    
    <article>
    <?php

        

        $id = $_GET['id'];
        // echo $id;

        

        $sql = "SELECT * FROM evento WHERE id='$id'";

        $result = $conn->query($sql);
        // echo $result->num_row;
        if ($result->num_rows > 0){
            echo "<section>";
            while ($row = $result->fetch_assoc()){
                
                echo "<article>";
                echo $row['imagem'];
                echo "<p>Titulo: ".$row['titulo']."</p>";
                echo "<p>Local do Evento: ".$row['local_evento']."</p>";
                echo "<p>Data do evento: ".$row['descricao']."</p>";
                echo "<p>Descrição: ".$row['descricao']."</p>";
                echo "<p>Valor: ".$row['valor']."</p>";
                // echo "<a href='evento.php?id=".$row['id']."' class='bt-inscricao'>Detalhes</a>";
                echo "</article>";
                
            }
            echo "</section>";
        }
        //include './_template/footer.php';
    ?>
    
    <!-- <p>
        <label for="data" >Dados da inscrição</label>
        <input type="date" name="data" id="data" obrigatório>
    </p>
    <p>
        <label for="hora" >Hora da inscrição</label>
        <input type="time" name="hora" id="hora" obrigatório>
    </p>
    <p>
        <label for="numero" >Número da inscrição</label>
        <input type="number" name="numero" id="numero" step="0.01" obrigatório>
    </p>
    <p>
        <label for="resulta" >Resultado</label>
        <input type="text" name="resulta" id="resulta" obrigatório>
    </p>
    <p>
        <label for="cpf" >CPF</label>
        <input type="number" name="cpf" id="cpf" obrigatório>
    </p> -->
    <p><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
    <?php 
        $verificar = "SELECT cpf_atleta FROM inscricao WHERE id_evento='$id';";
        if ($conn->query($verificar)->num_rows <= 0){
            echo '<form action="../_bd/inscricao.php" método="post">';
            echo '<p><input type="hidden" name="id" value="'.$id.'"></p>';
            echo '<p><input type="submit" value="Inscrever-se" inscrição class="bt-inscricao bt"></p>';
            echo '</form>';
        } else {
            echo '<form action="../_bd/cancelar_inscricao.php" método="post">';
            echo '<p><input type="hidden" name="id" value="'.$id.'"></p>';
            echo '<p><input type="submit" value="Cancelar inscrição" class="bt-inscricao"></p>';
            echo '</form>';
        }

        $verificriador = "SELECT criador FROM evento WHERE criador='".$_SESSION['cpf']."';";
        // $compara = $conn->query($verificar) == $_SESSION['cpf'];
        if ($conn->query($verificriador)->num_rows > 0){
           echo '<a href="../_bd/editar_evento.php?id='.$id.'" class="bt-inscricao bt">Editar Evento</a>';  

        }
        




    ?>
    </article>
    <!-- <p><input type="submit" value="Inscrever-se" inscrição class="bt-inscricao bt"></p> -->

    <?php   include  "../_template/footer.php" ; ?>
