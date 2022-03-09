<?php
session_start();
if(isset($_SESSION['usuario']) and isset($_SESSION['senha'])){
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $nascimento = $_POST["data_de_nascimento"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    include "Conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO atleta (cpf, nome, data_de_nascimento, telefone, email, usuario, senha) VALUES ('$cpf', '$nome', '$nascimento', '$telefone', '$email', '$usuario', '$senha');";

    if($conn->query($sql)){
        header ('location:perfil.php?c=Seja+bem+vindo+ .'$nome'+!');
    }

    desconectar($conn);

}else{
    header('Location: index.php');
};
?>