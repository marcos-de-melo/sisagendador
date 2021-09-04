<header>
    <h3>Excluir Contato</h3>
</header>
<?php
$idContato = mysqli_real_escape_string($conexao, $_GET['idContato']);
$sql = "DELETE FROM tbcontatos WHERE idContato = '{$idContato}'";
mysqli_query($conexao, $sql) 
or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao) );

echo "Registro excluido com sucesso!";
?>