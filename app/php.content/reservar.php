<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reservar Habitación</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">  
            <?php 
                //En este archivo es donde tienes que procesar la reservacón
                //necesitamos sacar la fecha de llegada, el usrnm del cliente
                $usrnm = $_GET['fname'];
                echo '
                <h1>Solicitud Procesada de manera Exitosa!</h1>
                <h1>En breve '.$usrnm.' recibirá la confirmación de reservación</h1>
                ';
            ?>
        </div>
    </div>

</body>

</html>