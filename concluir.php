<?php

include 'conexao.php';

$id = $_REQUEST['id'];

$sql = "UPDATE tarefas SET data_conclusao = NOW() WHERE id=$id";

if(mysqli_query($conexao, $sql)){
    mysqli_close($conexao);
    header('location: index.php');
} else {
    "Erro ao atualizar linha!" . mysqli_error($conexao);
    mysqli_close($conexao);
    die();
}
?>