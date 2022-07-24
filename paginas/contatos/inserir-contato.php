<header>
    <h3>Inserir Contato</h3>
</header>

<?php
    $nomeContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["nomeContato"])); 
    $emailContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["emailContato"])); 
    $telefoneContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["telefoneContato"])); 
    $enderecoContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["enderecoContato"])); 
    $sexoContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["sexoContato"])); 
    $dataNascContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["dataNascContato"])); 

    $sql = "INSERT INTO tbcontatos (
        nomeContato,
        emailContato,
        telefoneContato,
        enderecoContato,
        sexoContato,
        dataNascContato
    )
    VALUES (
        '{$nomeContato}',
        '{$emailContato}',
        '{$telefoneContato}',
        '{$enderecoContato}',
        '{$sexoContato}',
        '{$dataNascContato}'
        )    
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>