<?php
$servidor="localhost";
$user="root";
$password="12345678";
$bd="monitorbolpago";
$conexion = mysqli_connect($servidor, $user, $password, $bd);

if ($conexion){
    $sql = "SELECT Periodo, Cia, link, email FROM tbl_monitor";

    $result = mysqli_query($conexion, $sql);

    $data = array();

    while ($row = mysqli_fetch_assoc($result)){
        $data [] = $row;
        
    }
    echo json_encode ($data);
    

} else {
    echo "Error en la conexión";

}

?>