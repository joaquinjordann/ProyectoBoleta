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

$nombreSaludo = "SELECT Nombres FROM tbl_personal WHERE Dni = '$desencriptar'"; 
$result = mysqli_query($conexion, $nombreSaludo);

$mostrar = mysqli_fetch_array($result);

$nombresApellidos = $mostrar['Nombres'];

echo $nombresApellidos;

?>