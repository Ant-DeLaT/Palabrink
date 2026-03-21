<?php
$NombreServidor=$SERVIDOR_SERVER;
$UsuarioServ=$SERVIDOR_USUARIO;
$ContraseñaServidor=$SERVIDOR_CONTRASEÑA;
$baseDeDatos=$SERVIDOR_BASEDATOS;

$nombre=$_POST["Nombre"];
$contraseña=$_POST["Contraseña"];
// $contHash=hash("sha256",$contraseña);
$contHash2=password_hash($contraseña,PASSWORD_DEFAULT);

$conexion=new mysqli($NombreServidor,$NombreUsuServ,$ContraseñaServidor,$baseDeDatos);
if ($conexion->connect_error) {
    // Si no existe base de datos, salir con mensaje de error
    exit("Error de conexión :".$conexion->connect_error);
}

function CompContra(){
    $nombre=$_POST["Nombre"];
    $contraseña=$_POST["Contraseña"];
    $contHash2=password_hash($contraseña,PASSWORD_DEFAULT);
    $ConsultaSQL="SELECT contraseña FROM usuarios WHERE nombre=='$nombre'";
    if ($contHash2==$ConsultaSQL){
        return true;
    }
    return false;
}

$conexion->close();