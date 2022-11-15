<?php

//banco
$host = "localhost"; //local do banco
$username = "USUARIO"; //nome usuário do banco
$password = "SENHA"; //senha do banco
$db = "NOME_BANCO"; //nome do banco

$conexao = new mysqli($host, $username, $password, $db);

if($conexao->connect_errno){
    echo "Falha na conexão";
}