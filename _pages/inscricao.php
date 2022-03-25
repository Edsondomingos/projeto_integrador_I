

    <?php 
        include  "../_template/head.php" ; 
        include '../_bd/conexao.php';
        $conn = conectar();
    ?>

    <h1> Inscrição </h1>
    
    <section class='secao'>
    <?php

        $id = $_GET['id'];

        $sql = "SELECT * FROM evento WHERE id='$id'";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0){
            echo "<article class='item-secao'>";
            while ($row = $result->fetch_assoc()){
                
                // echo "<article class='item-secao'>";
                echo $row['imagem'];
                echo "<p>Titulo: ".$row['titulo']."</p>";
                echo "<p>Local do Evento: ".$row['local_evento']."</p>";
                echo "<p>Data do evento: ".$row['data_evento']."</p>";
                echo "<p>Descrição: ".$row['descricao']."</p>";
                echo "<p>Valor: ".$row['valor']."</p>";
                // echo "</article>";
                
            }
            // echo "</section>";
        }
    
    ?>
    
    <p><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
    <?php 
        $verificar = "SELECT cpf_atleta FROM inscricao WHERE id_evento='$id';";
        if ($conn->query($verificar)->num_rows <= 0){
            echo '<form action="../_bd/inscricao.php" método="post">';
            echo '<p><input type="hidden" name="id" value="'.$id.'"></p>';
            echo '<p><input type="submit" value="Inscrever-se" inscrição class="bt"></p>';
            echo '</form>';
        } else {
            echo '<form action="../_bd/cancelar_inscricao.php" método="post">';
            echo '<p><input type="hidden" name="id" value="'.$id.'"></p>';
            echo '<p><input type="submit" value="Cancelar inscrição" class="bt"></p>';
            echo '<br><a href="../_pages/pagamento.php?id='.$id.'" class=" bt">Pagamento</a></br>'; 
            echo '</form>';
            
        }

        $verificriador = "SELECT criador FROM evento WHERE criador='".$_SESSION['cpf']."';";
        
        if ($conn->query($verificriador)->num_rows > 0){
           echo '<br><a href="../_bd/editar_evento.php?id='.$id.'" class=" bt">Editar Evento</a></br>';
           echo '<br><a href="../_bd/deletar_evento.php?id='.$id.'" class=" bt">Deletar evento</a></br>'; 
           
        }
        




    ?>
    </article>
    </section>

    <?php   include  "../_template/footer.php" ; ?>
