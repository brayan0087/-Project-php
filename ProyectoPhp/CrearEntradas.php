<?php
 require_once 'includes/Redireccion.php';
 require_once 'includes/Cabecera.php'; 
 require_once 'includes/Lateral.php';
 
?>


<div class="principal" id="principal">
    <h1>Crear Entradas</h1>
    <p>
        Añade nuevas Entradas al blog para que los usuarios
        puedan leerlas y disfrutar de nuestro contenido
    </p>
    <br>
    <form action="GuardarEntradas.php" method="post">

        <label class="l-Crearentra" for="Titulo">Titulo:</label>
        <input class="i-creentra" type="text" name="titulo" class="text" id="nombre">
        <?php echo isset($_SESSION['errores_entradas']) ?mostrarError ($_SESSION['errores_entradas'],'titulo') :""; ?>

        <label class="l-Crearentra" for="Descripcion">Descripcion:</label>
        <textarea class="i-creentra" name="descripcion" cols="30" rows="10"></textarea>
        <?php echo isset($_SESSION['errores_entradas']) ?mostrarError ($_SESSION['errores_entradas'],'descripcion') :""; ?>

        <label class="l-Crearentra" for="Categoria">Categoria:</label>
        <select class="i-creentra" name="categoria">
            <?php 
                $categorias = getCategoris($db);
                if(!empty($categorias)) : //si no esta vacio haga while
                while ($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?= $categoria ['id'] ?>"> 
                    <?=  $categoria ['nombre']?>
                    
                </option>
        <?php 
        endwhile; 
        endif;
        ?>
            
        </select>
        <?php echo isset($_SESSION['errores_entradas']) ?mostrarError ($_SESSION['errores_entradas'],'categoria') :""; ?>
        <input id="btn-perfil"  type="submit" value="Guardar" class="boton">
    </form>
</div>


<?php borrarErrores() ?>


             
<?php require_once 'includes/Pie.php';?>