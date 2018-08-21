<?php
include_once 'conexao.php';

$sql = "SELECT * FROM tarefas";

if($resultado = mysqli_query($conexao, $sql)){
    echo "<table>";
    $dado = mysqli_fetch_assoc($resultado);
    if($dado){
        while($dado){
            // Formatando o jeito de mostrar a data conslusão e o botão concluir
            if($dado['data_conclusao'] == null){
                $data_conclusao = "Não concluído";
                $concluir = "<a href='concluir.php?id=$dado[id]'>Concluir</a>";
            } else {
                $datetime = new DateTime($dado['data_conclusao']);
                $data_conclusao = $datetime->format("d/m/Y");
                $concluir = "Concluído";
            }
            // Formatando data criacao
            $data = new DateTime($dado['data_criacao']);
            $data_criacao = $data->format("d/m/Y");
            echo "<tr>
            <td>$data_criacao</td>
            <td>$dado[tarefa]</td>
            <td>$data_conclusao</td>
            <td>$concluir</td>
            <td><a href='deletar.php?id=$dado[id]'>Deletar</a></td>
            <td><a href='index.php?id=$dado[id]&value=$dado[tarefa]'>Editar</a></td>
            </tr>";
            $dado= mysqli_fetch_assoc($resultado);
        }
    }else {
        echo "<p>Não há tarefas criadas!!<br>Crie uma abaixo!</p>";
    }
    echo "</table>";
    mysqli_close($conexao);
} else {
    echo "Erro ao selecionar as tarefas!" . mysqli_error($conexao);
    mysqli_close($conexao);
    die();
}
?>