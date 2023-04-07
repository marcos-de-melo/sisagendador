<header>
    <h3>
        <i class="bi bi-list-task"></i> Atualizar Tarefa
    </h3>
</header>

<?php

$idTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['idTarefa']));
$tituloTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['tituloTarefa']));
$descricaoTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['descricaoTarefa']));
$dataConclusaoTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['dataConclusaoTarefa']));
$horaConclusaoTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['horaConclusaoTarefa']));
$dataLembreteTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['dataLembreteTarefa']));
$horaLembreteTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['horaLembreteTarefa']));
$recorrenciaTarefa = strip_tags( mysqli_real_escape_string($conexao,$_POST['recorrenciaTarefa']));

$sql = "UPDATE tbtarefas SET
tituloTarefa = '{$tituloTarefa}',
descricaoTarefa = '{$descricaoTarefa}',
dataConclusaoTarefa = '{$dataConclusaoTarefa}',
horaConclusaoTarefa = '{$horaConclusaoTarefa}',
dataLembreteTarefa = '{$dataLembreteTarefa}',
horaLembreteTarefa = '{$horaLembreteTarefa}',
recorrenciaTarefa = '{$recorrenciaTarefa}' 
WHERE idTarefa = '{$idTarefa}'
";
$rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta." . mysqli_error());

if($rs){
    ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Atualizar Tarefa</h4>
  <p>Tarefa atualizada com sucesso.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=tarefas">Voltar para a lista de tarefas.</a>
  </p>
</div>
    <?php
}else{
    ?>
       <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erro</h4>
  <p>A tarefa não pode ser atualizada.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=tarefas">Voltar para a lista de tarefas.</a>
  </p>
</div>
    <?php
}

?>