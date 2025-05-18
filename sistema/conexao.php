<?php
$bd = "barbearia";
$user = "root";
$pass = "";
$server ="localhost";

try{
    $pdo = new PDO("mysql:dbname=$bd;host=$server;charset=utf8", "$user", "$pass");
}catch(Exception $e){
    echo "Falha ao conectar ao banco de dados <br> $e"; 
}


//Variaveis do sistame
$nome_sistema = "Barbeara Yr";
$email_sistema = "yr@gmail.com"; 