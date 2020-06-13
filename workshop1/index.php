<?php 
    //Obtiene la fecha actual
    date_default_timezone_set("America/Costa_Rica"); 
    $fecha = Date("d-m-Y");
    $hora = Date("h:i a");
    echo("<br>");
    echo("Fecha $fecha hora $hora"); 
?>