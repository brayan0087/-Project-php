<!--BARRA LATERAL-->
<?php require_once 'Includes/Helpers.php'; ?>

<aside id="sidebar">

<div id="Buscardor" class="bloque">
    <h3>Buscar</h3>
                                
     <form action="Buscar.php" method="POST">
            <input class="i-lateral" type="text" name="search" id="search">
            <input type="submit" value="Buscar" class="boton" name="submit">
        </form>    
</div>


    <!--Bienvenida al usuario logueado solo si viene algo por session-->
        <?php if(isset($_SESSION['USUARIO'])) :?>
            <div id="usuari-logueado" class="bloque">
                <h3>Bienvenido, <?=$_SESSION['USUARIO']['nombre'].' '.$_SESSION['USUARIO']['apellidos']; ?> </h3>
                <!--BOTONES-->
                    
                    <a href="perfil.php" class="boton" >
                        <img class="icono" src="img/icono_perfil.png" alt="icono_perfil">
                        Perfil
                    </a>

                    <a href="CrearEntradas.php" class="boton">
                        <img class="icono" src="img/configuraciones.png" alt="configuraciones">
                        Crear Entradas
                    </a>

                    <a href="CrearCategoria.php" class="boton">
                        <img class="icono" src="img/configuraciones.png" alt="configuraciones">
                        Crear Categorias
                    </a>

                    <a href="cerrar.php" class="boton">
                        <img class="icono"  src="img/cerrar-sesion.png" alt="cerrar_sesion">     
                        Cerrar Sesion
                    </a>
            </div> 
        <?php endif; ?> 


    <?php if(isset($_SESSION['USUARIO'])) :?>

                    

    <?php else: ?>  
            
                    <div id="login" class="bloque">
                                <h3>Identificate</h3>

                                        <?php if(isset($_SESSION['ERROR_LOGIN'])) :?>
                                        <div class="alerta-error">
                                        <?=$_SESSION['ERROR_LOGIN']; ?>
                                        </div> 
                                        <?php endif; ?> 
                                        
                                <form action="login.php" method="post">
                                    <label for="email">Email</label>
                                    <input class="i-lateral" type="email" name="email" id="email">

                                    <label for="pass">Contraseña</label>
                                    <input class="i-lateral" type="password" name="pass" id="pass">
                                    <input type="submit" value="Entrar" class="boton" name="submit">
                                </form>    
                    </div>

                            <div id="register" class="bloque">
                            
                                <h3>Registrate</h3>
                            <!-- mostrar errores -->
                                <?php if(isset($_SESSION['completado'])): ?>
                                    <div class="alerta-exito"> 
                                        <?= $_SESSION['completado']?>
                                    </div>
                                <?php elseif(isset($_SESSION['completado'] ['general'])):?>
                                        <div class="alerta-error"> 
                                        <?= $_SESSION['errores'] ['general'] ?>
                                        </div>
                                <?php endif; ?>
                                <form action="registro.php" method="post">

                                    <label for="nombre">Nombre</label>
                                    <input class="i-lateral" type="text" name="nombre" id="nombre">
                                    <?php echo isset($_SESSION['errores']) ?mostrarError ($_SESSION['errores'],'nombre') :""; ?>
                                    
                                    <label for="apellido">Apellido</label>
                                    <input  class="i-lateral" type="text" name="apellido" id="apellido">
                                    <?php echo isset($_SESSION['errores']) ?mostrarError ($_SESSION['errores'],'apellido') :""; ?>
                                    
                                    <label for="email">Email</label>
                                    <input class="i-lateral" type="email" name="email" id="mail">
                                    <?php echo isset($_SESSION['errores']) ?mostrarError ($_SESSION['errores'],'email') :""; ?>
                                    
                                    <label for="pass">Contraseña</label>
                                    <input class="i-lateral" type="password" name="pass" id="contra">
                                    <?php echo isset($_SESSION['errores']) ?mostrarError ($_SESSION['errores'],'contraseña') :""; ?>
                                    
                                    <input type="submit" value="Registrar" class="boton" name="registrar">
                                    

                                </form>    
                                
                            </div> 
            
                <?php borrarErrores(); ?>


        
    <?php endif; ?>
</aside>             