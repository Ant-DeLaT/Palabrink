<?php
require (__DIR__."/../LogicaServidor/bas_dat.php");
echo"<script/>console.log('Autenticador carga')</script>";
if (($_SESSION["Nombre_SEX"]==="" && $_SESSION["Contraseña_SEX"]==="") && !($_POST["Nombre"]=== $conexion->query("SELECT * FROM `usuarios` WHERE  ")|| $_POST["Contraseña"]=== "")) {
    $_SESSION["Nombre_SEX"]=$_POST["Nombre"];
    $_SESSION["Contraseña_SEX"]=$_POST["Contraseña"];
echo"<script/>console.log('Autenticador reenvía')</script>";
    header("Location: login.php");
    die();
    }
echo"<script/>console.log('Autenticador no reenvía')</script>";