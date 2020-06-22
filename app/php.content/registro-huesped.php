<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reservar Habitación</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php echo file_get_contents("../html-content/header.html")?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">  
            <div class="row">
                <form action="/reservar.php">
                    <div class="column">
                        <h1>5.Información del Huesped.</h1>
                    </div>
                    <div class="column">
                    <h1>6. Información de Pago.</h1>
                    </div>
                </form>
            </div> 
        </div>
    </div>

</body>

</html>