<?php
   
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     /* session_start(); */
   //conexión Base de Datos
    $conBasDats=new mysqli(SERVIDOR_SERVER,SERVIDOR_USUARIO,SERVIDOR_CONTRASEÑA,SERVIDOR_BASEDATOS);
    /* $conBasDats= new mysqli('localhost','root','','Palabrink'); */
    if ($conBasDats->connect_error) {
        die('ERROR SERVER '. $conBasDats->connect_error);
    }
    //Preparamos la pregunta a la base de datos exclusivamente para evitar la inyección de SQL
    /* $preguntaUsuario=new $conBasDats->prepare("SELECT nombre FROM usuarios WHERE (nombre=?)");
    $preguntaNuevoUsuario=new $conBasDats->prepare("SELECT EXISTS(SELECT nombre FROM usuarios WHERE nombre=?)"); */
    //falta unir el parámetro y ejecutar el query

        $error="";
        /* $preguntaUsuario->bind_param("s",$_POST['Nombre']);
        $preguntaUsuario->execute(); */
        if($preguntaUsuario->num_rows==0) {
            // !! PARA HACER, QUITAR DEBUG
        $error+= "Error en identificación; usuario o contraseña incorrectos DEBUG: NO EXISTE USUARIO";
        }else{
            //Devuelve un array completo del usuario; buscar mejor descriptivo/ cambiar método
            $arrayUsuario=$preguntaUsuario->fetch_assoc();

            // CAMBIAR por password_hash después de hacer pruebas rápidas
            if(($_POST["Contraseña"]==$arrayUsuario["Contraseña"])) {
                $error+= "Error en identificación; usuario o contraseña incorrectos DEBUG: NO EXISTE CONTRASEÑA ";
            }   
        }; 
       if (strlen($error)===0) {
        # reenviar a index
        $_SESSION["Nombre"] = $arrayUsuario["Nombre"];
        header("index.php");
       }
        die("No se ha podido entrar en el login por: "+$error);
    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- bootstrap -->
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
        <!-- <style>body{background-color:black}</style> -->
        <link rel="stylesheet" href="Estetica.css">
<!-- FUENTE COMFORTAA -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">


    </head>
    <body>
        <main>
            <header>
                <div class="titulo,comforta justify-content-center align-items-center text-center" style="background-color:white; ">
                <h1>Palabrink</h1>
                </div>
            </header>
            
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="container col-md-4 bg-light p-4 border centered">
                    <div class="col-md-12 text-center">
                        <form action="login.php" method="post">
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="Nombre" id="Nombre" placeholder="Introduzca su Nombre"><br>
                            <label for="Contraseña">Contraseña</label>
                            <input type="password" name="Contraseña" id="Contraseña" placeholder="Introduzca su Contraseña"><br><br>
                            <button class="btn btn-primary" type="submit" id="btnLogin">Conectarse</button>
                            <small>¿No está <a href="registro.php">registrado</a>?</small>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php
        require("aPies.php");
        ?>
    </body>
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
</html>