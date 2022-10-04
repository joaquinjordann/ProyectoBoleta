<?php
$servidor="localhost";
$user="root";
$password="12345678";
$bd="monitorbolpago";
$conexion = mysqli_connect($servidor, $user, $password, $bd);
if (mysqli_connect_errno())
{
echo "Error en la MySQL: " . mysqli_connect_error();
}

if(!isset($_POST["nombre"])){$_POST["nombre"] = '';}
if(!isset($_POST["dni"])){$_POST["dni"] = '';}
if(!isset($_POST["empresa"])){$_POST["empresa"] = '';}
if(!isset($_POST["año"])){$_POST["año"] = '';}
if(!isset($_POST["periodo"])){$_POST["periodo"] = '';}
?>