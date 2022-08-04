<?php
if (!isset($_SESSION)){
    
    session_start();}



if (!isset($_SESSION['USUARIO'])){

    header('location:Index.php');
}



?>