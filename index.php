<?php
    include("./db/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo-padrao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Sistema Agendador 1.0</title>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="#" class="navbar-brand">
                    <img src="./img/logo_agendador.png" alt="sis-Agendador" width="120">
                </a>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="index.php?menuop=home" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="index.php?menuop=contatos" class="nav-link">Contato</a></li>
                        <li class="nav-item"><a href="index.php?menuop=tarefas" class="nav-link">Tarefas</a></li>
                        <li class="nav-item"><a href="index.php?menuop=eventos" class="nav-link">Eventos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
   <div class="container">
<?php
    $menuop = (isset($_GET['menuop']))?$_GET['menuop']:'home';
    switch($menuop){
        case 'home':
            include("./paginas/home/home.php");
            break;
        case 'contatos':
            include("./paginas/contatos/contatos.php");
            break;
        case 'cad-contato':
            include("./paginas/contatos/cad-contato.php");
            break;   
        case 'inserir-contato':
                include("./paginas/contatos/inserir-contato.php");
                break;  
        case 'editar-contato':
                include("./paginas/contatos/editar-contato.php");
                break; 
        case 'atualizar-contato':
                include("./paginas/contatos/atualizar-contato.php");
                break;                                       
        case 'excluir-contato':
                include("./paginas/contatos/excluir-contato.php");
                break;  
        case 'eventos':
            include("./paginas/eventos/eventos.php");
            break;
        case 'tarefas':
            include("./paginas/tarefas/tarefas.php");
            break;       
        case 'cad-tarefa':
            include("./paginas/tarefas/cad-tarefa.php");
            break;       
        case 'inserir-tarefa':
            include("./paginas/tarefas/inserir-tarefa.php");
            break;       
        default:
            include("./paginas/home/home.php");
            break;
   }

?>
</div>
    </main>
    <footer class="container-fluid bg-dark text-light">
        <div class="text-center">SIS Agendador v 1.0</div>
    </footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/upload.js"></script>
    <script src="./js/javascript-agendador.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="./js/validation.js"></script>
</body>
</html>