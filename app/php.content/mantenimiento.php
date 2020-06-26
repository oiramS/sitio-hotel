<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Mantenimiento</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
            <h1>Habitaciones que requieren mantenimiento el dia de hoy:</h1>
            <?php 
                //Aqui solo muestra en la tabla las habitaciones activas!!!!!!
                //No te compliques

                echo '
                <table>
                    <tr>
                        <th>Id Habitación</th>
                        <th>Tipo</th>
                        <th>Nombre del Cliente</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Junior</td>
                        <td>Eduardo Gastón</td>
                    </tr>
                </table>
                ';
            ?>
        </div>
    </div>

</body>

</html>