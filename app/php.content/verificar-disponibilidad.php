<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Administración</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
        <?php 
            //Backend, supongo. 
            $disponibiladad = TRUE;
            if($disponibiladad == FALSE){
                echo '<h1>No hay habitaciones disponibles para las fecha seleccionada :(</h1>
                        <h2>Si lo desea, seleccione otra fecha u tipo de habitación 
                        en la pestaña de <a href="rsvp.php">reservaciones</a>.</h2>';
            }
            else{
                require 'seleccionar-habitacion.php';
            }
        ?>
        
        </div>
    </div>

</body>

</html>
