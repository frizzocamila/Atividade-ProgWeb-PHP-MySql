<?php  
    // validações no backend das credenciais do usuário:
    // verificação para certificar que o usuário possui 
    // privilégios necessários de acesso
    if (isset($_POST['login']) && isset($_POST['password'])) {
        if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
            session_start();
            $_SESSION['user'] = $_POST['login'];
            // redirecionamento do usuário
            header('Location: http://localhost/session/AreaAdmin.php');
        } else {
            header('Location: http://localhost/session/AcessoNegado.php');
        }
    }

?>