<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <?php include_once 'Views/complementos/referencias/referencias.php'; ?>
</head>

<body class=" ">
    <main class="main-principal h-100">

        <?php $this->vista("complementos/menus/menuPrincipal"); ?>
        <div id="contenedor">

            <h1 class="text-center">Quiz</h1>
            <?php 
            if (isset($contenido)) {
                include_once $contenido;
            }else{
                echo "nada";
            }
            ?>
        </div>

    </main>

</body>

</html>

<?php include_once 'Views/complementos/referencias/referencias_footer.php'; ?>;