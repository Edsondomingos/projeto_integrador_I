<?php
include "../_template/head.php";
if ( isset($_SESSION['usuario']) and isset($_SESSION['cpf']) ){

$id = $_GET["id"];

include "../_bd/conexao.php";

$conn = conectar();

$sqlPag = "DELETE FROM pagamento WHERE cpf_atleta='".$_SESSION['cpf']."' and id_evento='".$id."';";
$conn->query($sqlPag);
$sqlInscr = "DELETE FROM inscricao WHERE cpf_atleta='".$_SESSION['cpf']."' and id_evento='".$id."';";
$conn->query($sqlInscr);
$sql = "DELETE FROM evento WHERE id=".$id;

if($conn->query($sql)){
    header ('location: ../index.php');
}else{
    echo "Deu erro!";
    echo $conn->error;
}

desconectar($conn);

} else {
  header("Location: ".URL());
}

?>