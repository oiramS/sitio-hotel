<div class="universal-menu">
    <!--
        -Estoy utilizando el id para en identificar la pestaña activa.
        -Implementación pendiente. 
        -En esta parte es donde debemos de verificar que el usuario tenga
         permisos de administrador.
    -->
    <br><a href="menu.php?id=inicio">Inicio</a><br>
    <a href="rsvp.php?id=rsvp">Reservar Habitación</a><br>
    <a href="check-in.php?id=in">Check-In</a><br>
    <a href="check-out.php?id=out">Check-Out</a><br>
    <a href="#?id=adsrv">Mantenimiento</a><br>
    <div class="dropup">
        <a href="">Servicios Adicionales</a><br>
        <div class="dropup-content">
            <br><a href="#">Gimnasio</a><br>
            <a href="#">Yoga</a><br>
            <a href="#">Mantenimiento Adicional</a><br>
            <a href="#">Información de las Habitaciones </a><br>
        </div>
    </div>
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