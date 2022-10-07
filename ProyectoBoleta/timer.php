<?php

$total = "";
for ($segundos = 1; $segundos <= 5; $segundos++)
{
//Para cada iteración 1 segundo
sleep($segundos);
$total = $segundos;
}
header('location: login.php');

?>