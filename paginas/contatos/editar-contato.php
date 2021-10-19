<?php
$idContato = $_GET['idContato'];
$sql = "SELECT * FROM tbcontatos WHERE idContato = '{$idContato}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);


?>

<header>
    <h3>Editar Contato</h3>
</header>
<div class="row">
<div class="col-12 col-md-6">
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

<div class="col-12 col-md-6">
    <div class="mb-3">
        <?php
        // v ou v
         if($dados['nomeFotoContato']=="" || !file_exists('./paginas/contatos/fotos-contatos/' . $dados['nomeFotoContato'])){
             $foto = "SemFoto.jpg";
         }else{
            $foto = $dados['nomeFotoContato'];
         }
        
        ?>
        <img id="foto_contato"  src="./paginas/contatos/fotos-contatos/<?=$foto?>" class="img-fluid img-thumbnail" alt="...">
 </div>
  
  <div>
        <form action="" method="post" id="form_upload_contato" enctype="multipart/form-data">
             	<input name="idContato" type="hidden" value="<?=$idContato?>">
             	<input name="nomeFotoContato" type="hidden" value="<?=$dados['nomeFotoContato']?>">
             	<input type="file" name="arquivo">
             	<input type="submit" name="enviar" value="Enviar" id="btn_enviar_contato">
        </form>
             	<div class="mb-3" id="mensagem"></div>
             	           	
             	<div class="progress progress-sm active">
                <div 
                id="barra" 
                class="progress-bar progress-bar-success progress-bar-striped" 
                role="progressbar" 
                aria-valuenow="0" 
                aria-valuemin="0" 
                aria-valuemax="100" 
                style="width: 0%"
                >
                  
                </div>
              </div>
             	
             </div>
 
</div>

</div>