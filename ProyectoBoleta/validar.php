<?php
    require "conexion/conexion.php";
    session_start();

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $consulta = "SELECT * FROM tbl_monitor WHERE DNI = '$usuario' AND DNI = '$contraseña' ";
    
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_fetch_array($resultado);

    if($filas){
        $_SESSION['usurname'] = $usuario;

     //ENCRIPTACIÓN DE CONTRASEÑA
     // $usuario = hash('sha256', $usuario);
    // $contraseña = hash('sha256', $contraseña);

    include("criptar.php");
        
        $usuario = encrypt($usuario, $clave);
        //$usuario = decrypt($usuario, $clave);

    //REDIRECIONAMIENTO DE PÁGINA AL BUSCADOR
    header("location:menuAdmin.php?usuario=$usuario");

    }
   
    else{ ?>
    <?php
   header("location:login.php");
    ?>
      
      <script src="js/script.js"></script>

    <?php }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>