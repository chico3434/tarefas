<?php
include 'conexao.php';

$tarefa = $_REQUEST['tarefa'];
$id = $_REQUEST['id'];

$sql = "UPDATE tarefas SET tarefa = '$tarefa' WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    mysqli_close($conexao);
    header('location: index.php');
} else {
    echo "Erro ao atualizar!" . mysqli_error($conexao);
    mysqli_close($conexao);
    die();
}
?>