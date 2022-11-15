<?php

include_once("conexao.php");

// variáveis
$msg = false;

if ($_FILES["image"] != null) {

    $extension = strtolower(substr($_FILES["image"]["name"], -4)); //pega a extensão do arquivo
    $new_name = md5(time()) . $extension; //define o nome do arquivo
    $directory = "images/"; //define local para salvar

    move_uploaded_file($_FILES["image"]["tmp_name"], $directory . $new_name); // move do tmp para o diretório 

    $sql = "INSERT INTO arquivos (image, date) VALUES ('$new_name', NOW())";

    if ($conexao->query($sql) && $extension != null) {
        // //redirecionamento simples
        // header("location:exibir.php");

        //redirecionamento e mensagem com alerta
        echo "<script type='text/javascript'>alert('Salvo com sucesso'); window.location='exibir.php';</script>";
    } else {
        // //redirecionamento simples
        // header("location:index.php");

        //redirecionamento e mensagem com alerta
        echo "<script type='text/javascript'>alert('Erro ao salvar'); window.location='index.php';</script>";
    }
}
