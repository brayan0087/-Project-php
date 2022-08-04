<?php require_once 'includes/Cabecera.php'; ?>

<?php require_once 'includes/Lateral.php'; ?>


        <!--CAJA PRINCIPAL-->
        <div class="principal" id="principal">
             <h1>Todas Las Entradas</h1>
                <?php 
                    $tikey = getAllTickets($db,null); 
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
                
                ?>  
        
            
        </div>    <!--fin principal-->

  

    <?php require_once 'includes/Pie.php'; ?>