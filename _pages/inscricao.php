<!-- <a href=" index.php" > _  _ _
        < figura >
       
        </ figura >
    </a> _ _ -->

    <?php   include  "../_template/head.php" ; ?>

    < h1 > Inscrição </ h1 >
    <!-- <button><a href='../_bd/perfil.php'>Perfil</a></button> -->
    

    <?php
        include '../_template/head.php';
        include '../_bd/conexao.php';

        $conn = conectar();

        $sql = "SELECT * FROM evento";

        $result = $conn->query($sql);
        // echo $result->num_row;
        if ($result->num_rows > 0){
            echo "<section>";
            while ($row = $result->fetch_assoc()){
                
                echo "<article>";
                echo "<p>Titulo :".$row['titulo']."</p>";
                echo "<p>Local do Evento:".$row['local_evento']."</p>";
                echo "<p>Data do evento :".$row['descricao']."</p>";
                echo "<p>Descrição :".$row['descricao']."</p>";
                echo "<a href='evento.php?id=".$row['id']."' class='bt-inscricao'>Detalhes</a>";
                echo "</article>";
                
            }
            echo "</section>";
        }
        //include './_template/footer.php';
    ?>
    <form  action =" inscriao_bd.php " método =" post " >
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

    < p > < input  type =" submit " value =" " inscrição > < / p >

    </form>
    <?php   include  "../_template/footer.php" ; ?>
