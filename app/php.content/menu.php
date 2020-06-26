<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Administración</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
            <div class="slide reception">
                <h1>¡Bienvenido!</h1>
                <h3>¡Esperamos verte pronto!</h3>
            </div>
            <div class="slide room">
                <h1>¡Ponte comodo!</h1>
                <h3>¡Y relajate!</h3>
            </div>
            <div class="slide zumba">
                <h1>¡Solo lo mejor para ti!</h1>
                <h3>¡Disfruta de nuestras instalaciones!</h3>
            </div>
            <script src="../scripts/carrucel.js"></script>
        </div>
    </div>

</body>

</html>