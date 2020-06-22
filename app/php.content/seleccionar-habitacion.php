<?php
    $tipoHab =(integer) $_GET["tipo-habitacion"];
    /*
        -Aqui es donde se despliegan en una lista las habitaciones disponibles por piso.
        -En el caso de las junior suite's solo se despliegan las habitaciones pues se encuentran
        en el mismo piso.

    */

    if($tipoHab == 1){
        echo '<form action="registro-huesped.php" class="box">
            <h1>3.Seleccione el piso de la habitación:</h1>
            <select name="piso-habitacion" id="piso-habitacion" required>
                <option value="" disabled selected>Seleccione el piso de la habitación.</option>
                <option value="1">Piso 1</option>
                <option value="2">Piso 2</option>
                <option value="3">Piso 3</option>
                <option value="4">Piso 4</option>
                <option value="6">Piso 6</option>
            </select>
            <h1>4.Seleccione la habitación del huesped: </h1>
            <select name="piso-habitacion" id="piso-habitacion" required>
                <option value="" disabled selected>Seleccione el piso de la habitación.</option>
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
    }else{
        echo'<form action="registro-huesped.php" class="box">
            <h1>4.Seleccione la suite del huesped:</h1>
            <select name="piso-habitacion" id="piso-habitacion" required>
                <option value="" disabled selected>Seleccione la suite:</option>
                <option value="1">Junior Suite 1</option>
                <option value="2">Junior Suite 2</option>
                <option value="3">Junior Suite 3</option>
            </select>
            <input type="submit" value="Continuar">
            ';
    }


