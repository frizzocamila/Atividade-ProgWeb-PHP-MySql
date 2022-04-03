<?php  
    extract($_GET);
    setcookie("cor_bg", $cor, (time() + (5 * 24 * 3600)));
    //echo '<body style="background-color:'.$_COOKIE['cor_bg'].'>';
    header('Location: http://localhost/FinalWork/AreaAdmin.php');       
    
?>