<?php
//Carga la sesión, destruye los datos de usuario con session_destroy (redundancia con "session_unset; quitar todos los valores") y redirige al login
session_start();
session_destroy();
session_unset();
header("Location: login.php");
