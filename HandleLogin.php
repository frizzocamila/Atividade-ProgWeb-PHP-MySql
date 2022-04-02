<?php  
    include_once 'Conexao.class.php';
    $conexao = new Conexao();
    // validações no backend das credenciais do usuário:
    // verificação para certificar que o usuário possui 
    // privilégios necessários de acesso
    //echo $conexao->select('admin')[0]['senha'];
    //$_POST == senha do banco;
    
    if (isset($_POST['login']) && isset($_POST['password'])) {
        if ($_POST['login'] == $conexao->select('admin')[0]['login'] && $_POST['password'] == $conexao->select('admin')[0]['senha']) {
            session_start();
            $_SESSION['user'] = $_POST['login'];
            // redirecionamento do usuário
            header('Location: http://localhost/FinalWork/AreaAdmin.php');
        } else {
            header('Location: http://localhost/FinalWork/AcessoNegado.php');
        }
    }

?>