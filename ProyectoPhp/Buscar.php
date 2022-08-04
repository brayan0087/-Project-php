<?php
        if(!isset($_POST['search']))
        {
            header('Location: Index.php');
        }        
?>

<?php require_once 'includes/Cabecera.php'; ?>
<?php require_once 'includes/Lateral.php'; ?>


        <!--CAJA PRINCIPAL-->
<div class="principal" id="principal">
        
        
        <h1>Busqueda: <?= $_POST['search']?> </h1>
          
            <?php 

                $entradas = getAllTickets($db,null,null,$_POST['search']);
            
            
                if(!empty($entradas) && mysqli_num_rows($entradas)>=1):

                while ($entrada = mysqli_fetch_assoc ($entradas)): 

            ?>

                <article class="entrada">
                        <a href="Entrada.php?id=<?=$entrada['id']?>">
                            <h2>  <?= $entrada ['titulo']  ?> </h2>

                            <span class="cat-fech">  <?= $entrada ['categoria'].' | '.$entrada['fecha'] ?> </span>

                            <p id="prueba">
                                 <?= $entrada ['descripcion'] ?>
                                                             </p>
                        </a>
                </article> 
                     

                    

                

                <?php  
                
                endwhile;
            else:
             ?>  

             <div class="alerta">No hay entradas en esta categoria</div>
             <?php 
             endif;
            ?>
</div>    <!--fin principal-->

  

    <?php require_once 'includes/Pie.php'; ?>