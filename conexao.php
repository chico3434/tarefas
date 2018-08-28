<?php

$host = 'localhost';
$usuario = 'root';
$senha = '1234';
$banco = 'tarefas';

$conexao = mysqli_connect($host, $usuario, $senha);

if(!$conexao){
    echo "Erro ao se conectar!" . mysqli_error($conexao);
    die();
} else {
    if(!mysqli_select_db($conexao, $banco)){
        echo "Erro ao selecionar banco de dados!" . mysqli_error($conexao);
        mysqli_close($conexao);
        die();
    }
}