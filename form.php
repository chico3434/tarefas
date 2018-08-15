<?php

$value = $_REQUEST['value'];
$id = $_REQUEST['id'];

if (empty($value)){
    $action = 'criar-tarefa.php';
    $submit = 'Criar Tarefa';
} else {
    $action = 'editar-tarefa.php';
    $submit = 'Editar Tarefa';
}

$form =<<<EOT

<form action="$action" method="get">
    <input type="hidden" name="id" value="$id">
    <input type="text" name="tarefa" value="$value">
    <input type="submit" value="$submit">
</form>

EOT;
echo $form;
?>