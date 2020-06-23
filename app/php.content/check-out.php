<?php echo file_get_contents("../html-content/head_meta.html")?>

    <title>Check-Out</title>
</head>

<body>
    <div class="grid-menu-page">
        <?php echo file_get_contents("../html-content/logo.html")?>
        <?php echo file_get_contents("../html-content/header.html")?>
        <?php require 'universal-menu.php'?>
        <div class="option-info-content">  
            
            <form action="#" class="box">
            <h1>¡Esperamos volver a verte pronto!</h1>
                <?php echo file_get_contents("../html-content/check-form.html") ?>
                <input type="submit" value="check-out">
            </form>
        </div>
    </div>

</body>

</html>
