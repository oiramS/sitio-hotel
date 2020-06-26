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
|   <a href="#?id=adsrv">Mantenimiento</a><br>
    <div class="dropup">
        <a href="">Servicios Adicionales</a><br>
        <div class="dropup-content">
            <br><a href="#">Gimnasio</a><br>
            <a href="#">Yoga</a><br>
            <a href="#">Zumba</a><br>
            <a href="#">Mantenimiento Adicional</a><br>
            <a href="#">Información de las Habitaciones </a><br>
        </div>
    </div>
    <?php
        $tipoEmpleado = TRUE;
        if(!$tipoEmpleado)
            echo ''; 
        else
           echo  '
                <div class="dropup">
                <a href="">Administración</a><br>
                    <div class="dropup-content">
                        <br><a href="#">Información de Empleados</a><br>
                        <a href="#">Reportes Financieros</a><br>
                        <a href="#">Promociones</a><br>
                        <a href="#">Información de las Habitaciones </a><br>
                        <a href="receptionist-sign-up.php">Registro de Empleados</a><br>
                    </div>
                </div>
                ';   
    ?>
    <a href="../../index.html" class="exit">Cerrar Sesión</a><br>
</div>