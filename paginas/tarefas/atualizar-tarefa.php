<header>
    <h3>Atualizar Contato</h3>
</header>

<?php
    $idContato = mysqli_real_escape_string($conexao,$_POST["idContato"]); 
    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]); 
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]); 
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]); 
    $enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]); 
    $sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]); 
    $dataNascContato = mysqli_real_escape_string($conexao,$_POST["dataNascContato"]); 

    $sql = "UPDATE tbcontatos SET
    nomeContato = '{$nomeContato}',
    emailContato = '{$emailContato}',
    telefoneContato = '{$telefoneContato}',
    enderecoContato = '{$enderecoContato}',
    sexoContato = '{$sexoContato}',
    dataNascContato = '{$dataNascContato}'
    WHERE idContato = '{$idContato}'
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi atualizado com sucesso!";
?>