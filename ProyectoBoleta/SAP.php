<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Portal del Trabajador | DRIMER</title>
    <link rel="stylesheet" href="SAP.css">
<!--==============================================================================================================================================================================-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
<!--==============================================================================================================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<!--==============================================================================================================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
<!--==============================================================================================================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<!--==============================================================================================================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<!--==============================================================================================================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&display=swap" rel="stylesheet">
<!--==============================================================================================================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  </head>
<body>
<?php 
        include("conexion/conexion.php");

        include("criptar.php");

        $encriptado = $_GET['encrypt'];

        $desencriptar = decrypt($encriptado, $clave);

        include("filtro.php");

        $sql2 = $conexion->query($query);
    
        $rowSql = $sql2->fetch_array();
?>
<!--==============================================================================================================================================================================-->

  <div class="sidebar">
    <div class="title-center">
    <img class='trabajador' src="img/trabajador.png">
    <span class="logo_name">Portal del Trabajador</span> 
    </div>
      <ul class="nav-links">
        <li>
          <a href="Boletas.php?encrypt=<?php echo $encriptado ?>">
            <i class="demo-icon icon-doc-text-inv"></i><span class="links_name">Boletas</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
            <i class="demo-icon icon-buffer"></i><span class="links_name">SAP</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="demo-icon icon-address-card"></i><span class="links_name">Mis datos</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="demo-icon icon-mail-alt"></i><span class="links_name">Mensajes</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="demo-icon icon-star"></i><span class="links_name">Favoritos</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="demo-icon icon-wrench"></i><span class="links_name">Ajustes</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
          <i class="demo-icon icon-logout"></i><span class="links_name">Cerrar sesión</span>
          </a>
        </li>
      </ul>
  </div>
  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <img class="flecha_izquierda flecha_derecha" src="img/flecha_izquierda.png">
      </div>
  
      <div class="logo-details">
        <img class="logo" src="img/logo2.png">
      </div>
      
      <div class="profile-details">

        <span class="admin_name">
        <?php
        $desencriptar; 
        include("funcionesMenu/tbl_personal.php");
        ?>
        </span>
        
        <i class="demo-icon icon-user"></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="recent-sales">

          <iframe class="iframe" src=" https://fiori.drimer.pe:44305/sap/bc/gui/sap/its/webgui/"></iframe>
            
  </section>

<script src="menuScript.js"></script>

</body>
</html>