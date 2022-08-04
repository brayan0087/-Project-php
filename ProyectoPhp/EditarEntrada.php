<?php require_once 'includes/Redireccion.php';?>
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

<div class="principal" id="principal">
    <h1>Edita Tu Entrada </h1>
    <p>
        <?=$entrada['titulo'] ?>
    </p>
    <br>
    <form action="GuardarEntradas.php?editar=<?=$entrada['id']?>" method="post">

        <label class="l-Crearentra" for="Titulo">Titulo:</label>
        <input class="i-creentra" type="text" name="titulo" class="text" id="nombre" value="<?=$entrada['titulo'] ?>">
        <?php echo isset($_SESSION['errores_entradas']) ?mostrarError ($_SESSION['errores_entradas'],'titulo') :""; ?>

        <label class="l-Crearentra" for="Descripcion">Descripcion:</label>
        <textarea class="i-creentra" name="descripcion" cols="30" rows="10" ><?=$entrada['descripcion'] ?></textarea>
        <?php echo isset($_SESSION['errores_entradas']) ?mostrarError ($_SESSION['errores_entradas'],'descripcion') :""; ?>

        <label class="l-Crearentra" for="Categoria">Categoria:</label>
        <select class="i-creentra" name="categoria">
            <?php 
                $categorias = getCategoris($db);
                if(!empty($categorias)) : //si no esta vacio haga while
                while ($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?= $categoria ['id'] ?>" <?= ($categoria['id'] == $entrada['categoria_id']) ? 'selected="selected"': '' ?>> 
   
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




<?php require_once 'includes/Pie.php'; ?>