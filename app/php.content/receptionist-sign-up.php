<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Registro Empleado</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">
            <form action="#" class="box" method="POST">
                <div class="row">
                    <div class="column">
                        <h1>Registro de Empleado</h1>
                        <h3>Nombre:</h3>
                        <input type="text" id="name" name="name" placeholder="Juan" required><br>
                        <h3>Apellido Paterno:</h3>
                        <input type="text" id="plast" name="plast" placeholder="Peréz" required><br>
                        <h3>Apellido Materno:</h3>
                        <input type="text" id="mlast" name="mlast" placeholder="Lopéz" required><br>
                        <h3>RFC:</h3>
                        <input type="text" id="rfc" name="rfc" placeholder="PELJU800825569" required><br>
                    </div>
                    <div class="column">
                        <br><br><br><br><br><h3>Nombre de Usuario:</h3>
                        <input type="text" id="usrnm" name="usrnm" placeholder="juan8396" required><br>
                        <h3>Contraseña:</h3>
                        <input type="password" id="psswrd" name="psswrd" placeholder="Contraseña" required><br>
                        <h3>Confirmar Contraseña:</h3>
                        <input type="password" id="cpsswrd" name="cpsswrd" placeholder="Contraseña" required><br>
                        <h3>Rol en el Hotel:</h3>
                        <select name="tipo_empleado" id="tipo_empleado" required>
                            <option value="" disabled selected>Tipo de Empleado</option>
                            <option value="1">Gerente</option>
                            <option value="2">Recepcionista</option>
                        </select>
                        <input type="submit" value="Registrarse">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>


                
                                
            </form>