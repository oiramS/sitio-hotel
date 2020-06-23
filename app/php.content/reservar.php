<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reservar Habitación</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php echo file_get_contents("../html-content/header.html")?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">  
            <?php 
                //En este archivo es donde tienes que procesar la reservacón
                //require 'action.php'
                $usrnm = $_GET['fname'];
                echo $usrnm;
                echo '
                <h1>Solicitud Procesada de manera Exitosa!</h1>
                <h2>En breve '.$usrnm.' recibirá la confirmación de reservación</h2>
                ';
            ?>
        </div>
    </div>

</body>

</html>