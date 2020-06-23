<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reservar Habitación</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php echo file_get_contents("../html-content/header.html")?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">  
            <?php //require 'reservation.php'
                echo 'Solicitud Procesada de manera Exitosa!';
            ?>
        </div>
    </div>

</body>

</html>