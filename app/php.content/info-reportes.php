<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reportes</title>
</head>

<body>
    <div class="grid-menu-page">
    <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
        <?php
            if(!empty($_GET['tipo-reporte'])){
                $tipoReporte = (integer) $_GET['tipo-reporte'];
            }
            $tipoReporte = (integer) $_GET['tipo-reporte'];
            switch ($tipoReporte) {
                case '1': //Habitación
                    echo'
                <form action="?tipo-reporte=1" class="box">
                    <h1>Seleccione el tipo de Habitación:</h1>
                    <select name="tipo-hab" id="tipo-hab">
                        <option value="" disabled selected>Seleccione una tipo de habitación.</option>
                        <option value="1">Habitación Estandard.</option>
                        <option value="2">Junior Suite.</option>
                    </select>
                    <input type="submit" value="Consultar">
                    </form>
                    ';
                    $reporte='hab';
                break;
                case '2': //Fecha
                    echo'
                <form action="info-reportes.php?tipo-reporte=2" class="box">
                    <h3>Fecha de inicio:</h3>
                    <input type="date" id="inio" name="fin"required><br>
                    <h3>Fecha de termino:</h3>
                    <input type="date" id="termino" name="termino" required><br>
                    <input type="submit" value="Consultar">
                </form>
                    ';
                    $reporte='date';
                break;
                case '3': //Nombre
                    echo'
                <form action="info-reportes.php?tipo-reporte=3" class="box">
                    <h1>Introduzca el nombre de usuario</h1>
                    <input type="text" id="usr" name="usr" placeholder="Nombre de Usuario" required>
                    <input type="submit" value="Consultar">
                </form>
                    ';
                    $reporte='usrmn';
                break;
            }
            //Aqui es donde sucede la magia de los reportes!!!!!:
            if(empty($reporte)){

            }elseif($reporte=='hab'){
                //ejemplo:
                /**
                 * Aqui va un switch case para el tipo de hab si es junior o regular
                 */
                echo'
                <table>
                    <tr>
                    <th>Id Habitación</th>
                    <th>Tipo</th>
                    <th>Nombre de Usuario</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Costo Total</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Junior</td>
                        <td>lalolandas</td>
                        <td>Eduardo Gastón</td>
                        <td>01/01/2020</td>
                        <td>15/01/2020</td>
                        <td>$15,000.00</td>
                    </tr>
                    
              </table>
                ';
            }elseif($reporte=='date'){
                echo'
                <table>
                    <tr>
                    <th>Id Habitación</th>
                    <th>Tipo</th>
                    <th>Nombre de Usuario</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Costo Total</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Junior</td>
                        <td>lalolandas</td>
                        <td>Eduardo Gastón</td>
                        <td>01/01/2020</td>
                        <td>15/01/2020</td>
                        <td>$15,000.00</td>
                    </tr>
                    
              </table>
                ';
            }elseif($reporte=='user'){
                echo'
                <table>
                    <tr>
                    <th>Id Habitación</th>
                    <th>Tipo</th>
                    <th>Nombre de Usuario</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Costo Total</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Junior</td>
                        <td>lalolandas</td>
                        <td>Eduardo Gastón</td>
                        <td>01/01/2020</td>
                        <td>15/01/2020</td>
                        <td>$15,000.00</td>
                    </tr>
                    
              </table>
                ';
            }
        ?>
        </div>
    </div>

</body>

</html>