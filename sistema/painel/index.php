<?php
@session_start();
require_once 'verificar.php';
require_once '../conexao.php';

@$nome = $_SESSION['nome'];
@$id = $_SESSION['id'];




echo "BEM-VINDO $nome";
?>

<a href="logout.php">Sair</a>