<?php
    // session_start();
    if(isset($_SESSION['usuario']) && isset($_SESSION['cpf'])) {
        
    } else if (!isset($_SESSION['usuario']) && !isset($_SESSION['cpf'])){
        header('Location: ');
    }

?>