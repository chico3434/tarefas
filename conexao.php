<?php

$host = 'localhost';
$usuario = 'francisco';
$senha = '123';
$banco = 'tarefas';

$conexao = mysqli_connect($host, $usuario, $senha);

if(!$conexao){
    echo "Erro ao se conectar!" . mysqli_error($conexao);
    mysqli_close($conexao);
    die();
} else {
    if(!mysqli_select_db($conexao, $banco)){
        echo "Erro ao selecionar banco de dados!" . mysqli_error($conexao);
        mysqli_close($conexao);
        die();
    }
}