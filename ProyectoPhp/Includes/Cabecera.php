<?php  require_once 'Conexion.php'; ?>
<?php require_once 'Includes/Helpers.php'; ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">
    <title>Blog De PHP</title>
    

</head>

<body>

    <!--CABECERA-->
 
    <header id="cabecera">
        <!--LOGO-->
        <div id = "logo">
            <a href="Index.html">Blog de php</a>   
        </div>    

        <!--MENU-->
       
        <nav id="menu">
    <ul>
            <li>
                <a href="index.php" >Inicio</a>
            </li>
          
            <?php
            $categorias = getCategoris($db);
            
            while ($categoria = mysqli_fetch_assoc ($categorias)) 
            
            :?>

            <li>
                    <a href="Categoria.php?id=<?=$categoria['id']?>"> <?= $categoria["nombre"] ?> </a>
            </li>

            <?php  endwhile; ?> 
            

    </ul>
        </nav>
        <div id="clearfixx"></div>
    
    

    </header>

    <div id="contenedor">
  

