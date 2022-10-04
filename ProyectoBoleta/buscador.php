<!DOCTYPE html>

<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <link rel="stylesheet" href="buscador.css">
<!--==============================================================================================================================================================================-->
        <title>Portal del Trabajador</title>
</head>

<body>

<!--==============================================================================================================================================================================-->

<?php 
        include("conexion/conexion.php");

        include("criptar.php");
        
        $desencriptar = $_GET['usuario'];
        
        $desencriptar = decrypt($desencriptar, $clave);
?>

<!--==============================================================================================================================================================================-->
<h3 class="text-center-title">¡Bienvenido! <?php ?></h3>

<form class="buscador" name="form2" method="POST"> 
<?php 
        include("filtro.php");
        
        $rowSql;
?>

        <img src="img/logo.png" class="avatar">

                                <label class="form-label">Empresa: </label>
                                        <select id="assigned-tutor-filter" id="empresa" name="empresa" class="form-control">
                                        
                                                <option class="option" value="">Todos</option>
                                                <option class="option" value="01">CIA. INDUSTRIAL CONTINENTAL SAC.</option>
                                                <option class="option" value="02">MUEBLES Y DORMITORIOS EIRL.</option>
                                                <option class="option" value="03">REPER S.A.</option>
                                                <option class="option" value="04">EMPRESA DE TRANSPORTE SERVICE STAR S.A.C.</option>
                                                <option class="option" value="05">SEGELL DECORACIONES S.A.C.</option>
                                                <option class="option" value="06">INMOCONTINENTAL.S.A.C.</option>
                                        </select> <br><br>                         
                
                        <label  class="form-label">Año: </label>
                                        <input type="number" id="año" name="año" class="form-control"> <br><br>    

                        <label class="form-label">Periodo: </label>                                        
                                        <select id="assigned-tutor-filter" id="periodo" name="periodo" class="form-control"> 
                                        
                                        <?php if($rowSql["Clase"] == 'EMP'  || $rowSql["Clase"] == 'PRP' || $rowSql["Clase"] == 'PRT') {?> 
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
                                        
                                        </select> <br><br>
                                        
                        <br> <br> 

                <div class="buttoms">
                        <input type="submit" name="buscando" class="boton1" value="Buscar" action="filtro.php"> <br>
                        <a action="back.php"><input type="submit" name="salir" class="boton2" value="Salir"></a>
                </div>
</form>
<!--==============================================================================================================================================================================-->
<p class="results">🔽 <?php echo $numeroSql; ?> Boletas encontradas 🔽</p>

        <table class="TablaConsulta">
                <thead>
                        <tr>
                                <th class="text-center">Planilla</th>
                                <th class="text-center">Año</th>
                                <th class="text-center">Periodo</th>
                                <th class="text-center">Empresa</th>                              
                                <th class="text-center">Visualizar</th>
                                <th class="text-center">Descargar</th>
                                <th class="text-center">Enviar</th>
                                <th class="text-center">Generada</th>
                                <th class="text-center">Enviado</th>
                                <th class="text-center">Leído</th>
                        </tr>
                </thead>
                <tbody>
                        
                <?php  While($rowSql = $sql->fetch_assoc()) {   ?>
<!--==============================================================================================================================================================================-->
                        <tr>
                        <td class="text-center-results">
                        <?php if($rowSql["Origen"] == 'UTL') {?> 
                        <img id="icon" src="img/utilidades.png" >       
                        <?php } if($rowSql["Origen"] == 'CTS') {?> 
                        <img id="icon" src="img/cts.png" >
                        <?php } else {?> 
                        <img id="icon" src="img/boleta.png" >  
                        <?php } ?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results"><?php echo $rowSql["Ejercicio"]; ?> </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results">
                        <?php include('funcionesBuscador/periodo.php')?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results">
                        <?php include('funcionesBuscador/cia.php')?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results"><a target="_blank" href="<?php echo $rowSql["link"]; ?>"><img id="icon" class="lupa" src="img/lupa.png" ></a></td>
<!--==============================================================================================================================================================================-->                        
                        <td class="text-center-results"><a target="_blank" href="<?php echo $rowSql["link"]; ?>" download="Boleta"><img id="icon" class="download" src="img/download.png" ></a></td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results" ><img id="icon" class="correo" href="<?php echo $rowSql["email"]; ?>" src="img/correo.png" ></td>
<!--==============================================================================================================================================================================-->      
                        <td class="text-center-results"><?php if($rowSql["Generada"] == 1) {?> 
                        <img id="icon" class="check" src="img/check.png" >       
                        <?php } else {?> 
                        <img id="icon" src="img/aspa.png" >  
                        <?php } ?>
                        </td>
<!--==============================================================================================================================================================================-->            
                        <td class="text-center-results"><?php if($rowSql["Enviada"] == 1) {?> 
                        <img id="icon" class="check" src="img/check.png" >       
                        <?php } else {?> 
                        <img id="icon" src="img/aspa.png" >  
                        <?php } ?>
                        </td>
<!--==============================================================================================================================================================================-->
                        <td class="text-center-results"><?php if($rowSql["Leida"] == 1) {?> 
                        <img id="icon" class="check" src="img/check.png" >       
                        <?php } else {?> 
                        <img id="icon" src="img/aspa.png" >  
                        <?php } ?>
                        </td>
                        </tr>
<!--==============================================================================================================================================================================-->       
               <?php } ?>
                </tbody>
        </table>

</body>
</html>