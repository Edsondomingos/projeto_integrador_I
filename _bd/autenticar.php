<?php 
    include '../_bd/conexao.php';

    $conn = conectar();

    
    $sql = "SELECT * FROM atleta WHERE usuario ='".$_POST['usuario']."' and cpf = '".$_POST['senha']."';";
  
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        header('Location: ../index.php?bv=Seja+bem+vindo');
        session_start();
        $_SESSION['usuario'] = $_POST["usuario"];
        $_SESSION['cpf'] = $_POST["senha"];
    }else{
        header('Location: ../_pages/login.php?autenticar=usuario+ou+senha+incorreta,+tente+novamente.');
    };

    desconectar($conn);
?>