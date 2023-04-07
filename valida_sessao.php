<?php
    session_start();
    if (isset($_SESSION['loginUser']) && isset($_SESSION['senhaUser'])) {

        $nomeUser = $_SESSION['nomeUser'];
        $loginUser = $_SESSION['loginUser'];
        $senhaUser = $_SESSION['senhaUser'];
        $sql = "SELECT * FROM tbusuarios WHERE loginUser = '{$loginUser}' and senhaUser = '{$senhaUser}'";

        $rs = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($rs);
        $linhas = mysqli_num_rows($rs);

        if ($linhas == 0) // Confere se a consulta retornou algum registro
        {
            session_unset();
            session_destroy();
            header("location: login.php");
            exit;
        }
    } else {
        header("location: login.php");
        exit;
    }

?>