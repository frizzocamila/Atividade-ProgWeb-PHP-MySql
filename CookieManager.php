<?php  
    extract($_GET);
    setcookie("cor_preferida", $cor, (time() + (5 * 24 * 3600)));
    //echo '<body style="background-color:'.$_COOKIE['cor_preferida'].'>';
    header('Location: http://localhost/FinalWork/AreaAdmin.php');       
    
?>