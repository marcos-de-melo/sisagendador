<?php
$idTarefa = $_GET['idTarefa'];
$sql = "SELECT * FROM tbtarefas WHERE idTarefa = '{$idTarefa}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
?>


<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de Tarefa</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=atualizar-tarefa" method="post" novalidate>
        <div class="mb-3">
            <label class="form-label" for="idTarefa">ID</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="idTarefa" value="<?=$dados['idTarefa']?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="tituloTarefa">Título</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="tituloTarefa" value="<?=$dados['tituloTarefa']?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="descricaoTarefa">Descrição</label>
            <textarea class="form-control" name="descricaoTarefa" id="descricaoTarefa" cols="30" rows="10" required><?=$dados['descricaoTarefa']?></textarea>
         </div>
       
        <div class="row">
            <div class="mb-3 col-12 col-sm-3">
            <label class="form-label" for="dataConclusaoTarefa">Data de Conclusão</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    <input class="form-control" type="date" name="dataConclusaoTarefa" value="<?=$dados['dataConclusaoTarefa']?>" required>
                </div>
            
            </div>
            <div class="mb-3 col-12 col-sm-3">
                <label class="form-label" for="horaConclusaoTarefa">Hora de Conclusão</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-wach"></i></span>
                    <input class="form-control" type="time" name="horaConclusaoTarefa" value="<?=$dados['horaConclusaoTarefa']?>" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-12 col-sm-3">
            <label class="form-label" for="dataLembreteTarefa">Data de Lembrete</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    <input class="form-control" type="date" name="dataLembreteTarefa" value="<?=$dados['dataLembreteTarefa']?>" required>
                </div>
            
            </div>
            <div class="mb-3 col-12 col-sm-3">
                <label class="form-label" for="horaLembreteTarefa">Hora de Lembrete</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-wach"></i></span>
                    <input class="form-control" type="time" name="horaLembreteTarefa" value="<?=$dados['horaLembreteTarefa']?>" required>
                </div>
            </div>
        </div>
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAdicionar">
        </div>
    </form>
</div>