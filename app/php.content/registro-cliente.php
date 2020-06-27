<?php echo file_get_contents("../html-content/head_meta.html")?>
<body>
    <div class="form-container">
        <form action="../../index.html" class="box" method="POST">
            <div class="row">
                <div class="column">
                    <h1>Registro de Cliente</h1>
                    <h3>Nombre:</h3>
                    <input type="text" id="name" name="name" placeholder="Juan" required><br>
                    <h3>Apellido Paterno:</h3>
                    <input type="text" id="plast" name="plast" placeholder="Peréz" required><br>
                    <h3>Apellido Materno:</h3>
                    <input type="text" id="mlast" name="mlast" placeholder="Lopéz" required><br>
                    <h3>Correo Electrónico:</h3>
                    <input type="email" id="mail" name="mail" placeholder="example@example.com" required><br>
                </div>
                <div class="column">
                    <br><br><br><br><br><h3>Nombre de Usuario:</h3>
                    <input type="text" id="usrnm" name="usrnm" placeholder="juan8396" required><br>
                    <h3>Contraseña:</h3>
                    <input type="password" id="psswrd" name="psswrd" placeholder="Contraseña" required><br>
                    <h3>Confirmar Contraseña:</h3>
                    <input type="password" id="cpsswrd" name="cpsswrd" placeholder="Contraseña" required><br>
                    <input type="submit" value="Registrarse">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

