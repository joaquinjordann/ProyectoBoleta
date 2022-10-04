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

$CIA = $rowSql["Cia"];

$empresa = "SELECT Empresa FROM tbl_empresa WHERE ID = '$CIA'"; 
$result = mysqli_query($conexion, $empresa);

$mostrar = mysqli_fetch_array($result);

$mostrarEmpresa = $mostrar['Empresa'];

echo $mostrarEmpresa;

?>