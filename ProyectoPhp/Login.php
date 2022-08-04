<?php 
//iniciar la sesion y la conexion con la base de datos
require_once "Includes/conexion.php";
//Recoger los datos del formulario

if(isset($_POST)){

    $Email = isset ($_POST['email']) ? MYSQLI_REAL_ESCAPE_STRING($db, trim($_POST['email'])) :false;
    $Contraseña = isset($_POST['pass']) ?MYSQLI_REAL_ESCAPE_STRING($db, trim($_POST['pass'])) :false;

    
    //consulta a base de datos para comprbar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email='$Email'";
    $login = mysqli_query($db,$sql);
    if ($login && mysqli_num_rows($login)== 1){
        $usuario = mysqli_fetch_assoc($login);
        //comprobar contraseña
        //compara las password que viene del formulario con la que esta en db
        //pasando como segundo parametro la variable con el array de db
        //si la variable da true se identifico correctamente
        $verify = password_verify($Contraseña,$usuario['password']);

        if($verify){
            //utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['USUARIO'] = $usuario;

            if (isset($_SESSION['ERROR_LOGIN'])){

                ($_SESSION['ERROR_LOGIN']);

            }

        }else{
                $_SESSION['ERROR_LOGIN'] = "Login incorrecto!!";
            }//si algo falla enviar unas sesion con el fallo
         


    }else{
        $_SESSION['ERROR_LOGIN'] = "Login incorrecto!!";
        //mensaje de error 
    }
    
  
}

//redirigir al index.php
header('location:Index.php');

?>