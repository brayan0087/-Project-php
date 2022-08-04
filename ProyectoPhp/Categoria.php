<?php require_once 'includes/Conexion.php'; ?>
<?php require_once 'includes/Helpers.php'; ?>

<?php
            $result = getCategoria($db,$_GET['id']);
            
            if(!isset($result['id']))
            {
               header('Location: Index.php');
            }

                    

                    
?>

<?php require_once 'includes/Cabecera.php'; ?>
<?php require_once 'includes/Lateral.php'; ?>


        <!--CAJA PRINCIPAL-->
        <div class="principal" id="principal">
        
        
        <h1>Entradas De <?= $result['nombre']?> </h1>
          
                <?php 
                
                    $tikey = getAllTickets($db,null,$_GET['id']); 

                if(!empty($tikey) && mysqli_num_rows($tikey)>=1):

                    while ($tikeyy = mysqli_fetch_assoc ($tikey)): 

                  ?>

                <article class="entrada">
                        <a href="Entrada.php?id=<?=$tikeyy['id']?>">
                            <h2>  <?= $tikeyy ['titulo']  ?> </h2>

                            <span class="cat-fech">  <?= $tikeyy ['categoria'].' | '.$tikeyy['fecha'] ?> </span>

                            <p id="prueba">
                                 <?= $tikeyy ['descripcion'] ?>
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