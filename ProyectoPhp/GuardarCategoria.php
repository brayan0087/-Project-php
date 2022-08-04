
<?php
 
if (isset($_POST)){
    require_once "Includes/conexion.php";
    
    

    $Nombre = (isset($_POST['nombre'])) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    
    $errorres = array();
    

    //validar los datos antes de guardar en base de datos con condiciones
   
    //valida campo nombre
    if (isset($Nombre)){
        $nombre_validate=true;
    }else {
        $nombre_validate=false;
      $errorres ['nombre'] = "El nombre no es valido";
    }

    if (count($errorres) == 0 ) {
        $sql =  "INSERT INTO categorias values (NULL,'$Nombre');";
        $guardar=mysqli_query($db, $sql);
    }

 
    
}

header("Location: Index.php");
