<?php   if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '1') {
                echo 'Enero';
        } 
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '2') {
                echo 'Febrero';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '3') {
                echo 'Marzo';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '4') {
                echo 'Abril';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '5') {
                echo 'Mayo';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '6') {
                echo 'Junio';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '7') {
                echo 'Julio';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '8') {
                echo 'Agosto';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '9') {
                echo 'Setiembre';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '10') {
                echo 'Octubre';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '11') {
                echo 'Noviembre';
        }
        if($rowSql["Clase"] == 'EMP' && $rowSql["Periodo"] == '12') {
                echo 'Diciembre';
        }
        if ($rowSql["Clase"] == 'OBJ') {
                echo 'Semana '.$rowSql["Periodo"];
        } 
        else if ($rowSql["Clase"] == 'OBD') {
                echo 'Semana '.$rowSql["Periodo"];
        } 
?>