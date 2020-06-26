<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Check-In</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php require 'header.php'?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">  
            
            <form action="#" class="box">
            <h1>¡Bienvenido!</h1>
                <?php echo file_get_contents("../html-content/check-form.html") ?>
                <input type="submit" value="check-in">
            </form>
        </div>
    </div>

</body>

</html>