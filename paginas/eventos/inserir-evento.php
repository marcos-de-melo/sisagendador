<header>
    <h3>
        <i class="bi bi-calendar-check"></i> Inserir Evento
    </h3>
</header>

<?php
$tituloEvento = strip_tags( mysqli_real_escape_string($conexao,$_POST['tituloEvento']));
$descricaoEvento = strip_tags( mysqli_real_escape_string($conexao,$_POST['descricaoEvento']));
$dataInicioEvento = strip_tags( mysqli_real_escape_string($conexao,$_POST['dataInicioEvento']));
$horaInicioEvento = strip_tags( mysqli_real_escape_string($conexao,$_POST['horaInicioEvento']));
$dataFimEvento = strip_tags( mysqli_real_escape_string($conexao,$_POST['dataFimEvento']));
$horaFimEvento = strip_tags( mysqli_real_escape_string($conexao,$_POST['horaFimEvento']));


$sql = "INSERT INTO tbeventos 
(
    tituloEvento,
    descricaoEvento,
    dataInicioEvento,
    horaInicioEvento,
    dataFimEvento,
    horaFimEvento
    
)
VALUES
(
    '{$tituloEvento}',
    '{$descricaoEvento}',
    '{$dataInicioEvento}',
    '{$horaInicioEvento}',
    '{$dataFimEvento}',
    '{$horaFimEvento}'
    
)
";

$rs = mysqli_query($conexao,$sql);

if($rs){
    ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Inserir Evento</h4>
  <p>Evento inseria com sucesso.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=eventos">Voltar para a lista de Eventos.</a>
  </p>
</div>
    <?php
}else{
    ?>
       <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erro</h4>
  <p>A Evento não pode ser inserida.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=eventos">Voltar para a lista de Eventos.</a>
  </p>
</div>
    <?php
}

?>