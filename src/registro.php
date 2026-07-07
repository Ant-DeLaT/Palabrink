<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $error="";
        /* if(Comparación nombre->base datos){
            $error+= "Error en identificación; usuario o contraseña incorrectos";
        } */
       if (strlen($error)===0) {
        header("index.php");
       }
        die("No se ha podido entrar en el registro por: "+$error);
    }
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Registro</title>
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
        <main>
            <div class="centrado">
                <form action="registro.php" method="post">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" placeholder="Introduzca su Nombre">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" name="Contraseña" id="Contraseña" placeholder="Introduzca su Contraseña">
                    <label for="Contraseña2">Verifique su contraseña</label>
                    <input type="password" name="Contraseña2" id="Contraseña2" placeholder="Repita su Contraseña">
                    <button class="btn btn-primary" type="submit">Conectarse</button>
                    <small>¿No está <a href="login.php">conectado</a>?</small>
                </form>
            </div>
        </main>
       <?php
        require("aPies.php");
        ?>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
