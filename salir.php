<?php
    
    session_start();
    
    session_destroy();
    
    if($_GET['pag'] == 1){
         header("location: index.php");
    }else{
        if($_GET['pag'] == 2){
            header("location: menu.php");
        }
    }

    
?>

