<?php
include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){
    session_start();
    $local_evento = $_POST["local_evento"];
    $data_evento = $_POST["data_evento"];
    // $imagem = $_FILES["imagem"];
    $descricao = $_POST["descricao"];
    $titulo = $_POST["titulo"];
    $valor = $_POST["valor"];

    // if(isset($_POST['enviaFoto'])){
    $foto = $_FILES['imagem'];
    $fotoExt = explode('.', $foto['name']);
    $extensao = $fotoExt[sizeof($fotoExt)-1];
    if(
        $extensao != 'jpg' &&
        $extensao != 'jpeg' &&
        $extensao != 'png'
        //ver extensões em maiusculo
    ){
        $novoNome = "../corredor.gif";
    } else {
        $novoNome = $_SESSION['cpf'].$titulo.$data_evento.'.png';
        move_uploaded_file($foto['tmp_name'], '../_imgs/img_evento/'.$novoNome);
    }
    // }

    echo $titulo, $descricao, $data_evento, $local_evento, $imagem, $valor, $_SESSION['cpf'];

    include "conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO evento (local_evento, data_evento, imagem, descricao, titulo, valor, criador) VALUES ('$local_evento', '$data_evento', '$novoNome', '$descricao', '$titulo', '$valor','".$_SESSION['cpf']."');";

        if($conn->query($sql)){
            header ('location: ../index.php');
            echo "Projeto cadastrado com sucesso!";
        }else{
            echo "Ocorreu algum erro";
            echo $conn->error;
        };

    desconectar($conn);

} else {
  header("Location: ".URL());
}
?>