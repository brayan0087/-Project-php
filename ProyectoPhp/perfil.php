<?php
require_once 'includes/Redireccion.php';
 require_once 'includes/Cabecera.php'; 
 require_once 'includes/Lateral.php';
 ?>


<div class="principal" id="principal">
    <h1 id="h1-perfil">Mis Datos</h1>
        <?php if(isset($_SESSION['completado'])): ?>

                <div class="alerta-exito"> 
                        <?= $_SESSION['completado']?>
                </div>
        <?php elseif(isset($_SESSION['completado'] ['general'])):?>

                <div class="alerta-error"> 
                    <?= $_SESSION['errores'] ['general'] ?>
                </div>

        <?php endif; ?>

                <form action="ActualizarPerfil.php" method="post">

                    <label for="nombre" class="l-perfil">Nombre</label>
                    <input class="i-perfil" type="text" name="nombre" id="nombre" value="<?= $_SESSION['USUARIO']['nombre']; ?>">
                    <?php echo isset($_SESSION['errores']) ?mostrarError ($_SESSION['errores'],'nombre') :""; ?>
                                    
                    <label for="apellido" class="l-perfil">Apellido</label>
                    <input class="i-perfil" type="text" name="apellido" id="apellido"  value="<?= $_SESSION['USUARIO']['apellidos']; ?>">
                    <?php echo isset($_SESSION['errores']) ?mostrarError ($_SESSION['errores'],'apellido') :""; ?>
                                    
                    <label for="email" class="l-perfil">Email</label>
                    <input class="i-perfil" type="email" name="email" id="mail"  value="<?= $_SESSION['USUARIO']['email']; ?>">
                    <?php echo isset($_SESSION['errores']) ?mostrarError ($_SESSION['errores'],'email') :""; ?>
                                    
                    
                                    
                    <input id="b-perfil" type="submit" value="Actualizar" class="boton" name="actualizar">
                                    

                </form>    
                                
                    
            
                <?php borrarErrores(); ?>


</div>


<?php require_once 'includes/Pie.php'; ?>
 
 
 