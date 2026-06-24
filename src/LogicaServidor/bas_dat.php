<?php
$NombreServidor=$SERVIDOR_SERVER;
$UsuarioServ=$SERVIDOR_USUARIO;
$ContraseñaServidor=$SERVIDOR_CONTRASEÑA;
$baseDeDatos=$SERVIDOR_BASEDATOS;

$nombre=$_POST["Nombre"];
$contraseña=$_POST["Contraseña"];
// $contHash=hash("sha256",$contraseña);
$contHash2=password_hash($contraseña,PASSWORD_DEFAULT);


 /*Conexion a base de datos + Verificación*/
$conexion=new mysqli($NombreServidor,$UsuarioServ,$ContraseñaServidor,$baseDeDatos);
if ($conexion->connect_error) {
    // Si no existe base de datos, salir con mensaje de error
    exit("Error de conexión :".$conexion->connect_error);
}

 $compDatos= new $conexion->query("SELECT nombre,contrasenya FROM usuarios WHERE nombre===$nombre AND contraseña===$contraseña");
if ($compDatos->affected_rows===1) {
 return true;
}else{
 return false;
}
$compDatos->close();
$conexion->close();

