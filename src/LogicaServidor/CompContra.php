<?php
include_once (__DIR__."/../logicaServidor/bas_dat.php");
// Conexion incorporada desde "bas_dat.php"
function CompContra($conexion){
    $nombre=$_POST["Nombre"];
    $contraseña=$_POST["Contraseña"];
    $contHash2=password_hash($contraseña,PASSWORD_DEFAULT);
    
    if ($conexion->query()=$contHash2==$ConsultaSQL){
        return true;
    }
    return false;
}