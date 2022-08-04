<?php

    
if(isset($_POST)){
    //conexion a la base de datos
    require_once 'includes/Conexion.php';
    if (!$_SESSION){
        session_start();
    }
       
    //recoger los valores del formulario de registrar
    $Nombre = isset($_POST['nombre']) ? MYSQLI_REAL_ESCAPE_STRING($db,$_POST['nombre']) :false;
    $Apellido =isset($_POST['apellido']) ? MYSQLI_REAL_ESCAPE_STRING($db,$_POST['apellido']) :false;
    $Email = isset ($_POST['email']) ? MYSQLI_REAL_ESCAPE_STRING($db, trim($_POST['email'])) :false;
    $Contraseña = isset($_POST['pass']) ?MYSQLI_REAL_ESCAPE_STRING($db, trim($_POST['pass'])) :false;


    //array de errorres
    $errorres = array();


    //validar los datos antes de guardar en base de datos con condiciones
   
    //valida campo nombre
    if (!empty($Nombre) && !is_numeric($Nombre) && !preg_match("/[0-9]/",$Nombre)){
        $nombre_validate=true;
    }else {
        $nombre_validate=false;
      $errorres ['nombre'] = "El nombre no es valido";
    }
    //valida campo apellido
    if (!empty($Apellido) && !is_numeric($Apellido) && !preg_match("/[0-9]/",$Apellido)){
        $Apellido_validate=true;
    }else {
        $Apellido_validate=false;
      $errorres ['apellido'] = "El apellido no es valido";
    } 

    //valida campo email
    if (!empty($Email) && filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $Email_validate=true;
    }else {
        $Email_validate=false;
      $errorres ['email'] = "El email no es valido";
    } 

     //valida Contraseña
     if (!empty($Contraseña)){
        $pass_validate=true;
    }else {
        $pass_validate=false;
        $errorres ['contraseña'] = "la contraseña  esta vacia";
    }
    
    //insertar usuario en la tabla correspondiente si no se encuentran errores y cifrar password
    $guardar_ususario = false;
    if (count($errorres) == 0){
        $guardar_ususario = true;
    
        //cifrado de contraseña
        $password_segura = password_hash($Contraseña,PASSWORD_ARGON2ID);
        //insertar usuario en la tabla usuario de bd
        $sql = "INSERT INTO usuarios values(null,'$Nombre','$Apellido','$Email','$password_segura',CURDATE())";
        $Guardar = mysqli_query($db,$sql);
       
        if ($Guardar){
            $_SESSION['completado'] ="El registro se ha completado con exito";
        }else{
            $_SESSION['errores'] ['general'] = "Fallo al guardar el usuario!";

        }

        


    }else{

        $_SESSION['errores'] = $errorres;
        
    }



    

}
header('location: Index.php');