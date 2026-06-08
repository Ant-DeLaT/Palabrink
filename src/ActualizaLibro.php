<?php
    require_once("./LogicaServidor/bas_dat.php");
?>
<html>
    <head>
        <title>Gestor de libros</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="Estetica.css">
    </head>
    <body>
    <?php ?>
        <form action='ActualizaLibro.php'>
                <input id="Nombre" name='Nombre'>
                <?= ""/*NOMBRE*/?>
                </input>
                <input id="Autor" name='Autor'>
                <?= ""/*AUTOR*/?>
                </input>
                <input id='Genero' name='Genero'>
                <?= ""/*GENERO*/?>
                </input>
                <button type='submit'></button>
        </form>
    </body>
    <footer>
        <small>Copyright Ant-DeLaT & Ilerna (Patri)</small>
    </footer>
</html>