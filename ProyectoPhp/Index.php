<?php require_once 'includes/Cabecera.php'; ?>



    
    <?php require_once 'includes/Lateral.php'; ?>
   


        <!--CAJA PRINCIPAL-->
        <div class="principal" id="principal">
             <h1>Ultimas Entradas</h1>
                <?php 
                    $tikey = getAllTickets($db,TRUE); 
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
        
            <div id="ver-todas">

                <a href="Entradas.php"> Ver Todas Las Entradas</a>
                
            </div>
            
        </div>    <!--fin principal-->

  

    <?php require_once 'includes/Pie.php'; ?>