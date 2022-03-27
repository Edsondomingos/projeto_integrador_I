<?php
include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

    $id = $_GET["id"];
    $local_evento = $_POST["local_evento"];
    $data_evento = $_POST["data_evento"];
    // $imagem = $_POST["imagem"];
    $descricao = $_POST["descricao"];
    $titulo = $_POST["titulo"];
    $valor = $_POST["valor"];

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


    include "conexao.php";

    $conn = conectar();

    $sql = " UPDATE evento SET titulo='".$titulo."', local_evento='".$local_evento."' , data_evento='".$data_evento."', imagem='".$novoNome."', descricao='".$descricao."', valor='".$valor."'  WHERE id=$id ";

    if($conn->query($sql)){
        header ('location: ../index.php');
        echo "Projeto cadastrado com sucesso!";
    }else{
        echo "Ocorreu um erro";
        echo $conn->error;
    };

    desconectar($conn);
} else {
  header("Location: ".URL());
}

?>