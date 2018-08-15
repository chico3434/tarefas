<?php
include 'conexao.php';
$id = $_REQUEST['id'];

$sql = "DELETE FROM tarefas WHERE id=$id";

if(mysqli_query($conexao, $sql)){
    mysqli_close($conexao);
    header('location: index.php');
} else {
    echo "Erro ao deletar!" . mysqli_error($conexao);
    mysqli_close($conexao);
    die();
}
?>