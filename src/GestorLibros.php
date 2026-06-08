<?php
    include_once("./LogicaServidor/Autenticador.php");
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
        <header></header>
        <a href="#"<!--ActualizaLibro.php--><button class="btn btn-success">Añadir libro</button></a>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Genero</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            <td>NOMBREPRUEBA</td>
            <td>AUTORPRUEBA</td>
            <td>GENEROPRUEBA</td>
            <td><a href="#"><button class="btn btn-warning">Editar</button></a>
                <a href="#"><button class="btn btn-danger">Borrar</button></a>
            </td>
        </tbody>
    </table>
    </body>
    <footer>
        <small>Copyright Ant-DeLaT & Ilerna (Patri)</small>
    </footer>
</html>