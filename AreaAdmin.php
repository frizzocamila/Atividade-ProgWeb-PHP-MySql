<?php  
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: http://localhost/FinalWork/AcessoNegado.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        label {            
            color: #00f;
            font-size: .8em;
        }
        .cores {
            display: inline-block;
            width: 20px;
            height: 20px;    
            border: 1px solid #000;
            margin-left: 5px;
            cursor: pointer;
        }        
        #cor-azul { background-color: #daf5fa}
        #cor-verde { background-color: #d1fecb}
        #cor-amarelo { background-color: #fcfccb}        
    </style>
</head>
<body>
    <?php
        echo '<h3>Bem Vindo <label> '.$_SESSION['user'].'</label>!</h3>';     
     ?>
     <a href="Logout.php">Sair</a>
     <hr>
    <div id="paleta-cores">
        <span>Escolha uma cor de fundo:</span>
        <a href="CookieManager.php?cor=daf5fa"><div id="cor-azul" class="cores"></div></a> 
        <a href="CookieManager.php?cor=d1fecb"><div id="cor-verde" class="cores"></div></a> 
        <a href="CookieManager.php?cor=fcfccb"><div id="cor-amarelo" class="cores"></div></a> 
    </div>

    
</body>
</html>