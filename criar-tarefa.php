<?php
include 'conexao.php';

$tarefa = $_GET['tarefa'];

$sql = "INSERT INTO tarefas (tarefa, data_criacao) VALUES ('$tarefa', NOW())";

if(mysqli_query($conexao, $sql)){
    mysqli_close($conexao);
    header("location: index.php");
} else {
    echo "Erro ao inserir!" . mysqli_error($conexao);
    mysqli_close($conexao);
}

?>