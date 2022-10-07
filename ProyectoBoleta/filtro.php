<?php 
        
        include ("conexion/conexion.php");
        
        /*//////////////////////////FILTRO DE BÚSQUEDAD//////////////////////////*/

        if ($_POST['nombre'] == ''){ $_POST['nombre'] = ' ';}
        $aKeyword = explode(" ", $_POST['nombre']);
        
       
        if ($_POST['empresa'] == '' AND $_POST['año'] == '' AND $_POST['periodo'] == ''){ 
                $query ="SELECT * FROM tbl_monitor WHERE DNI = '$desencriptar'";
        }else{


                $query ="SELECT * FROM tbl_monitor WHERE DNI = '$desencriptar'";

        if ($_POST["nombre"] != '' ){ 
                $query .= "AND (Nombres LIKE LOWER('%".$aKeyword[0]."%')) ";
        
        for($i = 1; $i < count($aKeyword); $i++) {
           if(!empty($aKeyword[$i])) {
               $query .= " OR Nombres LIKE '%" . $aKeyword[$i] . "%' ";
           }
         }

        }

        if($_POST['empresa'] != ''){
                $query .= "AND Cia = '".$_POST['empresa']."'";
        }

        if($_POST['año'] != ''){
                $query .= "AND Ejercicio = '".$_POST['año']."'";
        }

        if($_POST['periodo'] != ''){
                $query .= "AND Periodo = '".$_POST['periodo']."'";
        }
       
}
         $sql = $conexion->query($query);

         $numeroSql = mysqli_num_rows($sql);
        ?>