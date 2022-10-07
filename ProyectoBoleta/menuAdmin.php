<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Portal del Trabajador | DRIMER</title>
    <link rel="stylesheet" href="menuAdmin.css">
    <link rel="stylesheet" href="css/PopUp.css">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<!--==============================================================================================================================================================================-->
</head>
<body>
<?php 
        include("conexion/conexion.php");

        include("criptar.php");
        
        $encriptado = $_GET['usuario'];
        
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
          <a href="#" class="active">
            <i class="demo-icon icon-doc-text-inv"></i><span class="links_name">Boletas</span>
          </a>
        </li>
        <li>
          <a href="https://fiori.drimer.pe:44305/sap/bc/gui/sap/its/webgui/" target="_blank">
            <i class="demo-icon icon-buffer"></i><span class="links_name">SAP</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="demo-icon icon-star"></i><span class="links_name">Favoritos</span>
          </a>
        </li>
        <li>
          <a href="ajustes.php?encrypt=<?php echo $encriptado?>">
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
      
      <div style="color:#FFFFFF"; class="profile-details">
      <i style="color:#FFFFFF; font-size:36px;" class="demo-icon icon-user-circle-o"></i>
        <span class="admin_name">
        <?php
        $desencriptar; 
        include("funcionesMenu/tbl_personal.php");
        ?>
        </span>
        
      <i style="color:#FFFFFF; font-size:18px;"; class="demo-icon icon-down-open"></i>
        
        <div class="menu-user">
          <ul>
            <li>
              <i style="color:#1e327a" class="demo-icon icon-address-card"></i><span class="links_user">Mis datos</span>
            </li>
            <li>
              <i style="color:#1e327a" class="demo-icon icon-mail-alt"></i><span class="links_user">Mensajes</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="home-content">
    
        <div class="recent-sales">

          <table class="TablaConsulta">
                <thead class="fila1">
                <form class="buscador" name="form2" method="POST"> 
                <th colspan="10" class="title">Registro de Boletas</th>

      <tr>
        <th colspan="5" class="form-label">Empresa: </th>
        <th colspan="2" class="form-label">Año: </th>
        <th colspan="2" class="form-label">Periodo: </th>
        <th class="form-label"></th>
      </tr>
    </thead>
    <tbody>
      <tr  class="tr-hover">
        <td colspan="5" label-input="Empresa: ">
          <select id="assigned-tutor-filter" id="empresa" name="empresa" class="form-control">
                        
            <option class="option" value="">Todos</option>
            <option class="option" value="01">CIA. INDUSTRIAL CONTINENTAL SAC.</option>
            <option class="option" value="02">MUEBLES Y DORMITORIOS EIRL.</option>
            <option class="option" value="03">REPER S.A.</option>
            <option class="option" value="04">EMPRESA DE TRANSPORTE SERVICE STAR S.A.C.</option>
            <option class="option" value="05">SEGELL DECORACIONES S.A.C.</option>
            <option class="option" value="06">INMOCONTINENTAL.S.A.C.</option>
          </select>                
        </td>
        <td colspan="2" label-input="Año: ">
          <input type="number" id="año" name="año" class="form-control">
        </td>
        <td colspan="2" label-input="Periodo: ">
          <select id="assigned-tutor-filter" id="periodo" name="periodo" class="form-control"> 
                                        
          <?php

          if($rowSql["Clase"] == 'EMP' || $rowSql["Clase"] == 'PRP' || $rowSql["Clase"] == 'PRT') {?> 
          <option class="option" value="">Todos</option>
          <option class="option" value="1">Enero</option>
          <option class="option" value="2">Febrero</option>
          <option class="option" value="3">Marzo</option>
          <option class="option" value="4">Abril</option>
          <option class="option" value="5">Mayo</option>
          <option class="option" value="6">Junio</option>
          <option class="option" value="7">Julio</option>
          <option class="option" value="8">Agosto</option>
          <option class="option" value="9">Setiembre</option>
          <option class="option" value="10">Octubre</option>
          <option class="option" value="11">Noviembre</option>
          <option class="option" value="12">Diciembre</option> 
                                                

          <?php } else {?> 
          <option class="option" value="">Todos</option>
          <option class="option" value="1">Semana 1</option>
          <option class="option" value="2">Semana 2</option>
          <option class="option" value="3">Semana 3</option>
          <option class="option" value="4">Semana 4</option>
          <option class="option" value="5">Semana 5</option>
          <option class="option" value="6">Semana 6</option>
          <option class="option" value="7">Semana 7</option>
          <option class="option" value="8">Semana 8</option>
          <option class="option" value="9">Semana 9</option>
          <option class="option" value="10">Semana 10</option>
          <option class="option" value="11">Semana 11</option>
          <option class="option" value="12">Semana 12</option>
          <option class="option" value="13">Semana 13</option>
          <option class="option" value="14">Semana 14</option>
          <option class="option" value="15">Semana 15</option>
          <option class="option" value="16">Semana 16</option>
          <option class="option" value="17">Semana 17</option>
          <option class="option" value="18">Semana 18</option>
          <option class="option" value="19">Semana 19</option>
          <option class="option" value="20">Semana 20</option>
          <option class="option" value="21">Semana 21</option>
          <option class="option" value="22">Semana 22</option>
          <option class="option" value="23">Semana 23</option>
          <option class="option" value="24">Semana 24</option>
          <option class="option" value="25">Semana 25</option>
          <option class="option" value="26">Semana 26</option>
          <option class="option" value="27">Semana 27</option>
          <option class="option" value="28">Semana 28</option>
          <option class="option" value="29">Semana 29</option>
          <option class="option" value="30">Semana 30</option>
          <option class="option" value="31">Semana 31</option>
          <option class="option" value="32">Semana 32</option>
          <option class="option" value="33">Semana 33</option>
          <option class="option" value="34">Semana 34</option>
          <option class="option" value="35">Semana 35</option>
          <option class="option" value="36">Semana 36</option>
          <option class="option" value="37">Semana 37</option>
          <option class="option" value="38">Semana 38</option>
          <option class="option" value="39">Semana 39</option>
          <option class="option" value="40">Semana 40</option>
          <option class="option" value="41">Semana 41</option>
          <option class="option" value="42">Semana 42</option>
          <option class="option" value="43">Semana 43</option>
          <option class="option" value="44">Semana 44</option>
          <option class="option" value="45">Semana 45</option>
          <option class="option" value="46">Semana 46</option>
          <option class="option" value="47">Semana 47</option>
          <option class="option" value="48">Semana 48</option>
          <option class="option" value="50">Semana 50</option>
          <option class="option" value="51">Semana 51</option>
          <option class="option" value="52">Semana 52</option>
          <option class="option" value="53">Semana 53</option>
          <option class="option" value="54">Semana 54</option>
          <option class="option" value="55">Semana 55</option>
          <option class="option" value="56">Semana 56</option>
          <?php } ?>
                                              
          </select> 
        </td>
      
        <td  class="tr-hover" class="buttoms">
            <input type="submit" name="buscando" class="boton" value="Buscar">        
        </td>

      </tr>
        
        <tr  class="tr-hover">
          <td class="results-td" colspan="10" class="">
            <p class="results"><i class="demo-icon icon-down-circle"></i> <?php echo $numeroSql; ?> Boletas encontradas <i class="demo-icon icon-down-circle"></i></p>
          </td>
        </tr>
        
        <tr class="class-text-center">
            <td class="text-center">Planilla</td>
            <td class="text-center">Año</td>
            <td class="text-center">Periodo</td>
            <td class="text-center">Empresa</td>                              
            <td class="text-center">Visualizar</td>
            <td class="text-center">Descargar</td>
            <td class="text-center">Enviar</td>
            <td class="text-center">Generada</td>
            <td class="text-center">Enviado</td>
            <td class="text-center">Leído</td>
        </tr>
    </form>
    </thead>
    <tbody>       
                <?php While($rowSql = $sql->fetch_assoc()) { ?>
<!--==============================================================================================================================================================================-->
                        <tr class="tr-hover">
                        <td class="text-center-results" title-results="Planilla:">
                        <?php if($rowSql["Origen"] == 'UTL') {?> 
                        <img id="icon2" src="img/utilidades.png">       
                        <?php } if($rowSql["Origen"] == 'CTS') {?> 
                        <img id="icon2" src="img/cts.png" >
                        <?php } else {?> 
                          <i class="demo-icon icon-doc-text-inv"></i>  
                        <?php } ?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results" title-results="Año:"><?php echo $rowSql["Ejercicio"]; ?> </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results" title-results="Periodo:">
                        <?php include('funcionesMenu/periodo.php')?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results" title-results="Empresa:">
                        <?php include('funcionesMenu/tbl_empresa.php')?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results" title-results="Visualizar:">
                            <i onclick="cambia();" id="open" class="demo-icon demo-icon-results icon-search"></i>

                              <div id="modal_container" class="modal-container">
                                <div class="modal">
                                  <div>
                                  <img align="right" src="img/xbox.png" id="close">
                                  </div>
                                  <iframe id="pdf" src="<?php echo $rowSql["link"]; ?>" width= "80%" height= "90%"></iframe>
                                </div>
                              </div>

                              <script>
                                function cambia() {
                                  let url = "<?php echo $rowSql["link"]; ?>";
                                  document.getElementById("pdf").src=url;
                                }
                              </script>
                        </td>
<!--==============================================================================================================================================================================-->                        
                        <td class="text-center-results" title-results="Descargar:">
                          <a target="_blank" href="<?php echo $rowSql["link"]; ?>" download="Boleta">
                            <i class="demo-icon demo-icon-results icon-download-alt"></i>
                          </a>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results" title-results="Enviar:">
                          <a  target="_blank" href="<?php echo $rowSql["email"]; ?>" src="img/correo.png" >
                            <i class="demo-icon demo-icon-results icon-mail-alt"></i>
                          <a>
                        </td>
<!--==============================================================================================================================================================================-->      
                        <td class="text-center-results" title-results="Generada:"><?php if($rowSql["Generada"] == 1) {?> 
                          <i class="demo-icon icon-ok"></i>       
                        <?php } else {?> 
                          <i class="demo-icon icon-cancel"></i>  
                        <?php } ?>
                        </td>
<!--==============================================================================================================================================================================-->            
                        <td class="text-center-results" title-results="Enviado: "><?php if($rowSql["Enviada"] == 1) {?> 
                          <i class="demo-icon icon-ok"></i>      
                        <?php } else {?> 
                          <i class="demo-icon icon-cancel"></i> 
                        <?php } ?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results" title-results="Leído: "><?php if($rowSql["Leida"] == 1) {?> 
                          <i class="demo-icon icon-ok"></i>       
                        <?php } else {?> 
                          <i class="demo-icon icon-cancel"></i>  
                        <?php } ?>
                        </td>
                        </tr>
<!--==============================================================================================================================================================================-->       
                    <?php } ?>
                    </tbody>
                </table>
          </div>
        </div>
  </section>

<script src="menuScript.js"></script>
<script src="popUp.js"></script>

<?php include('timer.php') ?>

</body>
</html>