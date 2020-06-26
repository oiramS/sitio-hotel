<div class="universal-menu">
    <!--
        -Estoy utilizando el id para en identificar la pestaña activa.
        -Implementación pendiente. 
        -En esta parte es donde debemos de verificar que el usuario tenga
         permisos de administrador.
    -->
    <br><a href="menu.php?id=inicio">Inicio</a><br>
    <a href="rsvp.php?id=rsvp">Reservaciones</a><br>
    <a href="check-in.php?id=in">Check-In</a><br>
    <a href="check-out.php?id=out">Check-Out</a><br>
|   <a href="mantenimiento.php?id=adsrv">Mantenimiento</a><br>
    <?php
        $tipoEmpleado = TRUE;
        if(!$tipoEmpleado)
            echo ''; 
        else
           echo  '
                        <a href="reportes.php">Reportes </a><br>
                        <a href="receptionist-sign-up.php">Registro de Empleados</a><br>
                ';   
    ?>
    <a href="../../index.html" class="exit">Cerrar Sesión</a><br>
</div>