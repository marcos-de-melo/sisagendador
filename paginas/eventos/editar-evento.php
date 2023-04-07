<?php
$idEvento = $_GET["idEvento"];

$sql = "SELECT * FROM tbeventos WHERE idEvento = '$idEvento'";

$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro" . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>
        <i class="bi bi-calendar-check"></i> Editar Evento
    </h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=atualizar-evento" method="post" novalidate>
        <div class="mb-3 col-3">
            <label for="idEvento" class="form-label">ID</label>
            <input class="form-control" type="text" name="idEvento" id="idEvento" value="<?=$dados["idEvento"]?>" readonly>
        </div>
        <div class="mb-3">
            <label for="tituloEvento" class="form-label">Título</label>
            <input class="form-control" type="text" name="tituloEvento" id="tituloEvento" value="<?=$dados["tituloEvento"]?>" required>
        </div>
        <div class="mb-3">
            <label for="descricaoEvento" class="form-label">Descrição</label>
            <textarea name="descricaoEvento" id="descricaoEvento" cols="30" rows="5" class="form-control" required><?=$dados["descricaoEvento"]?></textarea>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <label for="dataInicioEvento" class="form-label">Data de inìcio</label>
                <input class="form-control" type="date" name="dataInicioEvento" id="dataInicioEvento" value="<?=$dados["dataInicioEvento"]?>" required>
            </div>
            <div class="mb-3 col-3">
                <label for="horaInicioEvento" class="form-label">Hora de inìcio</label>
                <input class="form-control" type="time" name="horaInicioEvento" id="horaInicioEvento" value="<?=$dados["horaInicioEvento"]?>" required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <label for="dataFimEvento" class="form-label">Data de Fim</label>
                <input class="form-control" type="date" name="dataFimEvento" id="dataFimEvento" value="<?=$dados["dataFimEvento"]?>" >
            </div>
            <div class="mb-3 col-3">
                <label for="horaFimEvento" class="form-label">Hora de Fim</label>
                <input class="form-control" type="time" name="horaFimEvento" id="horaFimEvento" value="<?=$dados["horaFimEvento"]?>">
            </div>
        </div>
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>