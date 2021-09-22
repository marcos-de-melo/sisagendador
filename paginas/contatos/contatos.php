<header>
    <h3>Contatos</h3>
</header>
<div>
    <a href="?menuop=cad-contato">Novo Contato</a>
</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
</div>
<div class="tabela">
<table class="table table-dark table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Telefone</th>
            <th>Enderço</th>
            <th>Sexo</th>
            <th>Data de Nasc.</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $quantidade = 10;
            $pagina = ( isset($_GET['pagina']) ) ?(int)$_GET['pagina']:1;
            $inicio = ($quantidade * $pagina) - $quantidade;

            $txt_pesquisa = (isset($_POST['txt_pesquisa']))?$_POST['txt_pesquisa']:"";

            $sql = "SELECT 
            idContato,
            upper(nomeContato) AS nomeContato,
            lower(emailContato) AS emailContato,
            telefoneContato,
            upper(enderecoContato) AS enderecoContato,
            CASE
                WHEN sexoContato='F' THEN 'FEMININO'
                WHEN sexoContato='M' THEN 'MASCULINO'
            ELSE
                'NÃO ESPECIFICADO'
            END AS sexoContato,
            DATE_FORMAT(dataNascContato, '%d/%m/%Y') AS dataNascContato 
            FROM tbcontatos 
            WHERE 
            idContato = '{$txt_pesquisa}' or 
            nomeContato LIKE '%{$txt_pesquisa}%' ORDER BY nomeContato ASC 
            LIMIT $inicio, $quantidade
            ";
            //echo $sql;
            $rs = mysqli_query($conexao,$sql) 
            or die("Erro ao executar a consulta! Erro:" . mysqli_error($conexao));

            while($dados = mysqli_fetch_assoc($rs)){

            

        ?>
        <tr>
            <td><?=$dados['idContato']?></td>
            <td class="text-nowrap"><?=$dados['nomeContato']?></td>
            <td><?=$dados['emailContato']?></td>
            <td><?=$dados['telefoneContato']?></td>
            <td><?=$dados['enderecoContato']?></td>
            <td><?=$dados['sexoContato']?></td>
            <td><?=$dados['dataNascContato']?></td>
            <td>
                <a href="index.php?menuop=editar-contato&idContato=<?=$dados['idContato']?>">Editar</a>
                
            </td>
            <td>
                <a href="index.php?menuop=excluir-contato&idContato=<?=$dados['idContato']?>">Excluir</a>    
            </td>
            

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>

<ul class="pagination justify-content-center">
<?php

        $sqlTotal = "SELECT idContato FROM tbcontatos";
        $qrTotal = mysqli_query($conexao,$sqlTotal) or die(mysqli_error($conexao));
        $numTotal = mysqli_num_rows($qrTotal);

        $totalPagina = ceil($numTotal / $quantidade);

        echo "<li class='page-item'><span class='page-link'>Total de registros: " . $numTotal . " </span></li> ";

        echo '<li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=1">Primeira Pagina</a></li>';

        if($pagina>6){
            ?>
            <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina-1?>"><<</a></li>
            <?php
        }


        for($i=1;$i<=$totalPagina;$i++){
            
           if($i>=($pagina-5) && $i <= ($pagina+5)){
            if($i==$pagina){
                echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
            }else{
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina={$i}\"> {$i} </a></li>";

            }
           }
        }

        if($pagina<$totalPagina-5){
            ?>
            <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina+1?>">>></a></li>
            <?php
        }
        echo "<li class='page-item'> <a class='page-link' href=\"?menuop=contatos&pagina=$totalPagina\">Ultima Pagina</a></li>";


?>
</ul>