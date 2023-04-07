<header>
    <h3>Excluir Tarefa</h3>
</header>

<?php

$idTarefa = $_GET["idTarefa"];

$sql = "DELETE FROM tbtarefas WHERE idTarefa = '{$idTarefa}'";
$rs = mysqli_query($conexao,$sql);


if($rs){
    ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Excluir Tarefa</h4>
  <p>Tarefa excluida com sucesso.</p>
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
  <p>A tarefa não pode ser excluida.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=tarefas">Voltar para a lista de tarefas.</a>
  </p>
</div>
    <?php
}
?>