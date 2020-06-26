<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reportes</title>
</head>

<body>
    <div class="grid-menu-page">
    <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
        <form action="info-reportes.php" class="box">
            <h1>Seleccione el tipo de reporte que desea:</h1>
            <select name="tipo-reporte" id="tipo-reporte">
                    <option value="" disabled selected>Seleccione una opción.</option>
                    <option value="1">Por tipo de Habitación.</option>
                    <option value="2">Por fecha.</option>
                    <option value="2">Por nombre de usuario.</option>
                </select>
                <input type="submit" value="Consultar">
        </form>
        </div>
    </div>

</body>

</html>