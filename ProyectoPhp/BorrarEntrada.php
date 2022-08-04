<?php
require_once 'includes/Conexion.php';

if (isset($_SESSION['USUARIO']) && isset($_GET['id'])){
    
    $entrada_id=$_GET['id'];
    $usuario_id=$_SESSION['USUARIO']['id'];
    
    $sql = "DELETE FROM entradas WHERE usuario_id = 
    '$usuario_id' AND id= '$entrada_id' ";
    $borrar=  mysqli_query($db,$sql);

    
}


header("Location: Index.php");