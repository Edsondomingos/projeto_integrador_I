<?php
session_start();
include "../_template/head.php";
if(isset($_SESSION['usuario']) and isset($_SESSION['senha'])){
    header('Location: '.URL().'index.php');
} else {
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    include "conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO atleta (cpf, nome, data_de_nascimento, telefone, email, usuario, senha) VALUES ('$cpf', '$nome', '$nascimento', '$telefone', '$email', '$usuario', '$senha');";

    if($conn->query($sql)){
        header ('location: ../_pages/login.php?c=Seja+bem+vindo+ '.$nome.'+!');
    }

    desconectar($conn);

}

?>