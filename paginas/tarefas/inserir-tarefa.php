<header>
    <h3>Inserir Tarefa</h3>
</header>

<?php
    $tituloTarefa = mysqli_real_escape_string($conexao,$_POST["tituloTarefa"]); 
    $descricaoTarefa = mysqli_real_escape_string($conexao,$_POST["descricaoTarefa"]); 
    $dataConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["dataConclusaoTarefa"]); 
    $horaConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["horaConclusaoTarefa"]); 
    $dataLembreteTarefa = mysqli_real_escape_string($conexao,$_POST["dataLembreteTarefa"]); 
    $horaLembreteTarefa = mysqli_real_escape_string($conexao,$_POST["horaLembreteTarefa"]); 


    $sql = "INSERT INTO tbtarefas (
        tituloTarefa,
        descricaoTarefa,
        dataConclusaoTarefa,
        horaConclusaoTarefa,
        dataLembreteTarefa,
        horaLembreteTarefa
    )
    VALUES (
        '{$tituloTarefa}',
        '{$descricaoTarefa}',
        '{$dataConclusaoTarefa}',
        '{$horaConclusaoTarefa}',
        '{$dataLembreteTarefa}',
        '{$horaLembreteTarefa}'
        )    
    ";
   // echo $sql;
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>