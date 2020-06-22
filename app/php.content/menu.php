<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Administración</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php echo file_get_contents("../html-content/header.html")?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
            <!-- 
                -Aqui deberias poner un saludo al usuario en turno, la fecha o algo asi.
                para que no se quede en blanco.
                -O el carrucel.
            -->
        </div>
    </div>

</body>

</html>