<?php 
    include '../_bd/conexao.php';

    $conn = conectar();

    
    $sql = "SELECT * FROM atleta WHERE usuario='".$_POST['usuario']."' and senha='".$_POST['senha']."';";
  
    $result = $conn->query($sql);

    session_start();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){            
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['cpf'] = $row['cpf'];
        }
        header('Location: ../index.php?bv=Seja+bem+vindo');
        
        // $_SESSION['senha'] = $_POST["senha"];//Tirar senha da sessão()salvar variaveis no while)
    }else{
        header('Location: ../_pages/login.php?autenticar=usuario+ou+senha+incorreta,+tente+novamente.');
    };

    desconectar($conn);
?>