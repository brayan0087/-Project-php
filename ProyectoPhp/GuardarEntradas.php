
<?php
 
 if (isset($_POST)){
     require_once "Includes/conexion.php";

     $titulo= (isset($_POST['titulo'])) ? mysqli_real_escape_string($db,$_POST['titulo']) : false;
     $descripcion= (isset($_POST['descripcion'])) ? mysqli_real_escape_string($db,$_POST['descripcion']) : false;
     $categoria= (isset($_POST['categoria'])) ? (int)$_POST['categoria'] : false;
     $usuario = $_SESSION['USUARIO'] ['id'];//recojo el id del usuario login
     $errorres = array();
 
     //validar los datos antes de guardar en base de datos con condiciones
    
     //valida campo nombre
    if (empty($titulo)){

        $errorres['titulo'] = "El titulo no es valido";
    }
    if (empty($descripcion)){

        $errorres['descripcion'] = "la descripcion no es valida";
    }
    if (empty($categoria) && !is_numeric($categoria)){

        $errorres['categoria'] = "la categoria no es valida";
    }
 

    if (count($errorres)==0){

        if (isset($_GET['editar'])) {
            $id = $_GET['editar']; 
            $usuario = $_SESSION['USUARIO']['id'];
            $sql ="UPDATE  entradas SET  titulo = '$titulo', descripcion = '$descripcion', 
            categoria_id = '$categoria' WHERE id = '$id'  AND usuario_id = '$usuario'";

        }else{

            $sql ="INSERT INTO  entradas VALUES
             (null,$usuario,$categoria,'$titulo','$descripcion',CURDATE());";
        }
        
        $guardar = mysqli_query($db,$sql);
        header("location: Index.php");
         
    }else{

        $_SESSION["errores_entradas"] =$errorres;

        if (isset($_GET['editar'])){

            header("location: EditarEntrada.php?id=".$_GET['editar']);
           
        }else {

            header("location: CrearEntradas.php");
        } 
    }
  
 }

 

 
