<?php
session_start();
include_once "conexao.php";

$email = $_POST['email'];
$nome = $_POST['senha'];

$query = $pdo-> query("SELECT * FROM utilizador WHERE email = '$email' AND senha = '$nome' ");
$resposta = $query->fetchAll(PDO::FETCH_ASSOC);

$total = count($resposta);

//Recuperar valores da base de dados
if(count($resposta) > 0){

    $ativo = $resposta[0]['ativo'];
    
    if($ativo == 'sim'){
    $_SESSION['id'] = $resposta[0]['id'];
    $_SESSION['nome'] = $resposta[0]['nome'];
    $_SESSION['perfil'] = $resposta[0]['perfil'];

   echo "<script>window.location='painel'</script>";
    }else{
        echo "<script>window.alert('Voce nao pode aceder ao sistema, entre em contacto com a admin')</script>";
echo "<script>window.location='index.php'</script>";
    }
}else{

echo "<script>window.alert('Email ou senha incorrecto')</script>";
echo "<script>window.location='index.php'</script>";
}


?>