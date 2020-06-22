<div class="universal-menu">
    <!--
        -Estoy utilizando el id para en identificar la pestaña activa.
        -Implementación pendiente. 
        -En esta parte es donde debemos de verificar que el usuario tenga
         permisos de administrador.
    -->
    <br><a href="../php.content/menu.php?id=inicio">Inicio</a><br>
    <a href="../php.content/rsvp.php?id=rsvp">Reservar Habitación</a><br>
    <a href="#?id=in">Check-In</a><br>
    <a href="#?id=out">Check-Out</a><br>
    <a href="#?id=adsrv">Servicios Adicionales</a><br>
    <a href="#?id=mnt">Mantenimiento</a><br>
    <?php
        $isAdmin = TRUE;
        if(!$isAdmin)
            echo '<br><br><br>';
        else
           echo  '<a href="#?id=admn">Administración</a><br>';   
    ?>
    <a href="../../index.html" class="exit">Cerrar Sesión</a><br>
</div>