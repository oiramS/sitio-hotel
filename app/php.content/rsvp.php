<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reservar Habitación</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">  
            <form action="verificar-disponibilidad.php" class="box">
                <h1>Seleccione las fechas en las que desee Hospedarse: </h1><br>
               <h3>Fecha de llegada:</h3>
                <input type="date" id="llegada" name="llegada"required><br>
                <h3>Fecha de salida:</h3>
                <input type="date" id="salida" name="salida" required><br>
                <h1>Seleccione el tipo de Habitación</h1>
                <select name="tipo-habitacion" id="tipo-habitacion">
                    <option value="" disabled selected>Seleccione un tipo de habitación.</option>
                    <option value="1">Habitación Estandard.</option>
                    <option value="2">Habitación Junior Suite.</option>
                </select>
                <h1>¿Vienes por alguna de nuestras clases?</h1>
                <select name="servicio" id="servicio">
                    <option value="" disabled selected>Seleccione el Servicio</option>
                    <option value="1">Gimnasio.</option>
                    <option value="2">Yoga.</option>
                    <option value="3">Zumba.</option>
                </select>
                <input type="submit" value="Consultar">

            </form>
        </div>
    </div>

</body>

</html>