<?php
$idContato = $_GET['idContato'];
$sql = "SELECT * FROM tbcontatos WHERE idContato = '{$idContato}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);


?>

<header>
    <h3>Editar Contato</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        <div class="mb-3 col-3">
            <label class="form-label" for="nomeContato">ID</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-key-fill"></i>
                </span>
            <input class="form-control" type="text" name="idContato" value="<?=$dados['idContato']?>" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-fill"></i>
                </span>
                <input class="form-control" type="text" name="nomeContato" value="<?=$dados['nomeContato']?>">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailContato">E-Mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailContato" value="<?=$dados['emailContato']?>">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone-fill"></i>
                </span>
                <input class="form-control" type="text" name="telefoneContato" value="<?=$dados['telefoneContato']?>">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-mailbox2"></i>
                </span>
                <input class="form-control" type="text" name="enderecoContato" value="<?=$dados['enderecoContato']?>">
            </div>
        </div>
        <div class="row mb-3">
                        <div class="mb-3 col-3">
                            <label class="form-label" for="sexoContato">Sexo</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-gender-ambiguous"></i>
                                </span>
                            <select class="form-select"  name="sexoContato" id="sexoContato">
                                <option <?php echo ($dados['sexoContato']=='')?'selected':'' ?> value="">Selecione o genero do Contato</option>
                                <option <?php echo ($dados['sexoContato']=='M')?'selected':''?> value="M">Masculino</option>
                                <option <?php echo ($dados['sexoContato']=='F')?'selected':''?> value="F">Feminino</option>
                                <option <?php echo ($dados['sexoContato']=='O')?'selected':''?> value="O">Outros</option>
                            </select>
                            </div>
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label" for="dataNascContato">Data de Nasc.</label>
                            <input class="form-control" type="date" name="dataNascContato" value="<?=$dados['dataNascContato']?>">
                        </div>
                        </div>
        <div class="mb-3">
            <input class="btn btn-warning" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>