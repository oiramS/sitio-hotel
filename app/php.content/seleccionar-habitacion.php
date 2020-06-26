<?php
    /*
        -Aqui es donde se despliegan en una lista las habitaciones disponibles por piso.
        -En el caso de las junior suite's solo se despliegan las habitaciones pues se encuentran
        en el mismo piso.

    */
    //Selección de servicio.
    if(!empty($_GET["servicio"])){
        //Si el campo servicio no esta vacio.
        $servicio =(integer) $_GET["servicio"];
        header('location: registro-huesped.php?servicio='.$servicio.'&llegada='.$_GET['llegada']);
    }elseif(empty($_GET["servicio"]) && empty($_GET["tipo-habitacion"])){
        //Si los campos se encuentran vacios regresa al menu de reservación
        echo '<h1>Haz olvidado llenar alguno de los campos de reserva.</h1>
        <h1>Vuelve a intentarlo.</h1>';
    }elseif((integer) $_GET["tipo-habitacion"] == 1){
        //No se pueden hacer dos reservaciones al mismo tiempo, ie no se puede reservar una clase y una hab
        //al mismo tiempo.
        //Este es el código de ejemplo que decias para las habitaciones.
        echo '
            <form action="registro-huesped.php? llegada='.$_GET["llegada"].'&salida='.$_GET["salida"].'" class="box">
            <h1>Seleccione la habitación del huesped: </h1>
            <select name="habitacion" id="habitacion" required>
                <option value="" disabled selected>Seleccione la habitación.</option>
                <option value="1">Habitación 1</option>
                <option value="2">Habitación 2</option>
                <option value="3">Habitación 3</option>
                <option value="4">Habitación 4</option>
                <option value="5">Habitación 5</option>
                <option value="6">Habitación 6</option>
            </select>
            <input type="submit" value="Continuar">
        </form>
        ';
    }elseif((integer) $_GET["tipo-habitacion"] == 2){
        echo'<form action="registro-huesped.php" class="box">
            <h1>Seleccione la suite del huesped:</h1>
            <select name="habitacion" id="habitacion" required>
                <option value="" disabled selected>Seleccione la suite:</option>
                <option value="1">Junior Suite 1</option>
                <option value="2">Junior Suite 2</option>
                <option value="3">Junior Suite 3</option>
            </select>
            <input type="submit" value="Continuar">
            ';
    }


