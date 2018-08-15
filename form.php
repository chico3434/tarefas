<?php

$action = $_REQUEST['action'];
$submit = $_REQUEST['submit'];
$value = $_REQUEST['value'];

if (empty($action)){
    $action = 'criar-tarefa.php';
    $submit = 'Criar Tarefa';
}

$form =<<<EOT

<form action="$action" method="get">
    <input type="text" name="tarefa" value="$value">
    <input type="submit" value="$submit">
</form>

EOT;
echo $form;
?>