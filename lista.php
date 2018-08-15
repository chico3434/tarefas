<?php
include_once 'conexao.php';

$sql = "SELECT * FROM tarefas";

if($resultado = mysqli_query($conexao, $sql)){
    echo "<table>";
    echo "<tr>
    <th>id</th>
    <th>Tarefa</th>
    <th>Data de Criação</th>
    <th>Data de Conlusão</th>
    <th>Concluir</th>
    <th>Deletar</th>
    <th>Editar</th>
    </tr>";
    while($dado = mysqli_fetch_assoc($resultado)){
        if($dado['data_conclusao'] == null){
            $dc = "Não concluído";
            $concluir = "<a href='concluir.php?id=$dado[id]'>Concluir</a>";
        } else {
            $dc = $dado['data_conclusao'];
            $concluir = "Concluído";
        }
        echo "<tr>
        <td>$dado[id]</td>
        <td>$dado[tarefa]</td>
        <td>$dado[data_criacao]</td>
        <td>$dc</td>
        <td>$concluir</td>
        <td><a href='deletar.php?id=$dado[id]'>Deletar</a></td>
        <td><a href='index.php?id=$dado[id]&value=$dado[tarefa]'>Editar</a></td>
        </tr>";
    }
    echo "</table>";
    mysqli_close($conexao);
} else {
    echo "Erro ao selecionar as tarefas!" . mysqli_error($conexao);
    mysqli_close($conexao);
    die();
}

?>