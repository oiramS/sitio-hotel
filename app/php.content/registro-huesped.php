<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Reservar Habitación</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php echo file_get_contents("../html-content/header.html")?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
            <form action="reservar.php" class="box">  
                <div class="row">
                        <div class="column">
                            <h1>5.Información del Huesped.</h1>
                            <h3>Nombre completo:</h3>
                            <input type="text" id="fname" name="fname" placeholder="Juan Peréz" required><br>
                            <h3>Edad:</h3>
                            <input type="text" id="edad" name="edad" placeholder="33" required><br>
                            <h3>Correo Electrónico:</h3>
                            <input type="text" id ="email" name="email" placeholder="example@email.com" required><br>

                        </div>
                        <div class="column">
                            <h1>6. Información de Pago.</h1>
                            <h3>Titular de la tarjeta:</h3>
                            <input type="text" id="tname" name="tname" placeholder="Juan Peréz" required><br>
                            <h3>Número de la tarjeta de crédito:</h3>
                            <input type="text" id="ccnum" name ="ccnum" placeholder="1111-2222-3333-4444" required><br>
                            <h3>Mes de Expiración:</h3>
                            <input type="text" id="monthexp" name="monthexp" placeholder="Enero" required><br>
                            <h3>Año de expiración:</h3>
                            <input type="text" id="yearexp" name="yearexp" placeholder="2023" required><br>
                            <h3>CCV:</h3>
                            <input type="text" id="ccv" name="ccv" placeholder="123" required><br>
                            <input type="submit" value="Reservar.">
                        </div>
                    </div> 
                </div>
            </form>
        </div> 
    </div>

</body>

</html>