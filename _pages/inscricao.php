

    <?php
        include  "../_template/head.php" ;
        if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

        
         
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
                
                
                echo "<img src='../_imgs/img_evento/".$row['imagem']."' />";
                $img = $row['imagem'];
                echo "<p>Titulo: ".$row['titulo']."</p>";
                $titulo = $row['titulo'];
                echo "<p>Local do Evento: ".$row['local_evento']."</p>";
                echo "<p>Data do evento: ".$row['data_evento']."</p>";
                echo "<p>Descrição: ".$row['descricao']."</p>";
                echo "<p>Valor: ".$row['valor']."</p>";
                $valor = $row['valor'];
                
                
            }
            
        }
        
    ?>
    
    <?php 
        
        $verificar = "SELECT cpf_atleta FROM inscricao WHERE id_evento='$id' and cpf_atleta='".$_SESSION['cpf']."'";
        if ($conn->query($verificar)->num_rows <= 0){
            echo '<form action="../_bd/inscricao.php" método="post">';
            echo '<p><input type="hidden" name="id" value="'.$id.'"></p>';
            echo '<input type="hidden" name="imagem" value="'.$img.'">';
            echo '<input type="hidden" name="titulo" value="'.$titulo.'">';
            echo '<input type="hidden" name="valor" value="'.$valor.'">';
            echo '<p><input type="submit" value="Inscrever-se" inscrição class="bt button-inputs"></p>';
            
        } else {
            if(isset($_GET['nao'])){
               echo "<p style='font-size:20px;background:#2f2'>".$_GET['nao']."</p>" ;
            }

            $pdf = "SELECT resultado FROM inscricao WHERE id_evento='".$id."'";
            $nomePdf = $conn->query($pdf)->fetch_assoc()['resultado'];
            
            if ($nomePdf != 'vazio'){
                echo "<a href='../_imgs/pdfs/".$nomePdf."' class='bt button-inputs'>resultado</a>";
            }
            
            echo '<form action="../_bd/cancelar_inscricao.php" método="post">';
            echo '<p><input type="hidden" name="id" value="'.$id.'"></p>';
            echo '<p><input type="submit" value="Cancelar inscrição" class="bt button-inputs"></p>';
            echo '<br><a href="../_pages/pagamento.php?id='.$id.'" class="button-inputs bt">Pagamento</a></br>'; 
            
            
        }
        
        $verificriador = "SELECT criador FROM evento WHERE criador='".$_SESSION['cpf']."';";
        
        if ($conn->query($verificriador)->num_rows > 0){
            echo '<br><a href="../_pages/resultado.php?id='.$id.'" class=" bt">Adicionar Resultado</a></br>';
           echo '<br><a href="../_pages/editar_evento.php?id='.$id.'" class=" bt">Editar Evento</a></br>';
           echo '<br><a href="../_bd/deletar_evento.php?id='.$id.'" class=" bt">Deletar evento</a></br>'; 
           
        }
        echo '</form>';




    ?>
    </article>
    </section>

    <?php   include  "../_template/footer.php" ; 
        } else {
          header("Location: ".URL()."_pages/login.php");
      }

    ?>
