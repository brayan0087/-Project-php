<?php require_once 'includes/Conexion.php'; ?>
<?php require_once 'includes/Helpers.php'; ?>

<?php
            $entrada = getTicket($db,$_GET['id']);
            
            if(!isset($entrada['id']))
            {
               header('Location: Index.php');
            }

                    

                    
?>

<?php require_once 'includes/Cabecera.php'; ?>
<?php require_once 'includes/Lateral.php'; ?>


        <!--CAJA PRINCIPAL-->
    <div class="principal" id="principal">
         <h1> <?= $entrada['titulo']?> </h1>
        <article class="entrada">
        <a href= "Categoria.php?id=<?= $entrada['categoria_id']?>">
        <h2>  <?= $entrada ['categoria']  ?> </h2>
         <span class="cat-fech"> <?=$entrada['fecha'] ?> | <?= $entrada['usuario'] ?> </span>
            
       

            <p id="prueba">
                <?= $entrada['descripcion']?>
            </p>
        </a> 
        </article>

            <?php if(isset($_SESSION['USUARIO']) && $_SESSION['USUARIO']['id']== $entrada['usuario_id']):?>
              
                <a href="EditarEntrada.php?id=<?=$entrada['id']?>" class="botonEntrada">
                    <img class="icono" src="img/configuraciones.png" alt="configuraciones">
                        Editar Entrada
                    </a>

                <a href="BorrarEntrada.php?id=<?=$entrada['id']?>" class="botonEntrada">  
                    <img class="icono" src="img/configuraciones.png" alt="configuraciones">
                        Eliminar Entrada
                    </a>



            <?php endif;?>

    </div>         
    <?php require_once 'includes/Pie.php'; ?>