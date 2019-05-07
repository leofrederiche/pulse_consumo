<?php
    require('home.html');
    require('connection.php');
    require('action.php');
    

    if ($_GET){
        if ($_GET['termos'] <> 'on'){
            header('Location: index.php');  
        };
    };
?>