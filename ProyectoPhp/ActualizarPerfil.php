<?php

if(isset($_POST)){
    //conexion a la base de datos
    require_once 'includes/Conexion.php';
    
       
    //recoger los valores del formulario de actulizacion
    $Nombre = isset($_POST['nombre']) ? MYSQLI_REAL_ESCAPE_STRING($db,$_POST['nombre']) :false;
    $Apellido =isset($_POST['apellido']) ? MYSQLI_REAL_ESCAPE_STRING($db,$_POST['apellido']) :false;
    $Email = isset ($_POST['email']) ? MYSQLI_REAL_ESCAPE_STRING($db, trim($_POST['email'])) :false;
    


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

     
    
    //insertar usuario en la tabla correspondiente si no se encuentran errores y cifrar password
    $guardar_ususario = false;

    if (count($errorres) == 0){
        $guardar_ususario = true;
    
        



        //ACTUALIZAR usuario en la tabla usuario de bd
        $usuario=$_SESSION['USUARIO']['id']; 
        $sql = "UPDATE usuarios SET nombre ='$Nombre', 
        apellidos='$Apellido', 
        email='$Email'  
        WHERE id = $usuario;";
        $Guardar = mysqli_query($db,$sql);
       
        if ($Guardar){
            $_SESSION['USUARIO']['nombre'] =$Nombre;
            $_SESSION['USUARIO']['apellidos']=$Apellido;
            $_SESSION['USUARIO']['email']=$Email;
            $_SESSION['completado'] ="la actualizacion se ha completado con exito";
        }else{
            $_SESSION['errores'] ['general'] = "Fallo al guardar los datos!";

        }

        


    }else{

        $_SESSION['errores'] = $errorres;
        
    }



    

}
header('location: perfil.php');

?>