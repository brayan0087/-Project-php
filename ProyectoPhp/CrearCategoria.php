<?php
 require_once 'includes/Redireccion.php';
 require_once 'includes/Cabecera.php'; 
 require_once 'includes/Lateral.php';
 



 

?>


<div class="principal" id="principal">
    <h1>Crear Categorias</h1>
    <p>
        Añade nuevas categorias al blog para que los usuarios
        puedan usarlas al crear sus entradas
    </p>
    <br>
    <form action="GuardarCategoria.php" method="post">

        <label class="l-catego" for="">Nombre De La Categoria:</label>
        <input class="i-catego" type="text" name="nombre" class="text" id="nombre">


        <input id="btn-catego" type="submit" value="Guardar" class="boton">
    </form>
</div>





             
<?php require_once 'includes/Pie.php';?>