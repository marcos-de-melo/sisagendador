<?php
$pagina = $_GET['pagina'];
$idTarefa = $_GET['idTarefa'];
$statusTarefa = ($_GET['statusTarefa']=='0')?'1':'0';

$sql = "UPDATE tbtarefas SET statusTarefa = $statusTarefa WHERE idTarefa = {$idTarefa}";
echo $sql;
mysqli_query($conexao,$sql);
header('location:?menuop=tarefas&idTarefa='. $idTarefa .'&pagina=' . $pagina);