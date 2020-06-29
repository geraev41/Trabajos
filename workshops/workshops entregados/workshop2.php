
<?php

    //Ejercicio 1
    print("Ejercicio #1 <br>"); 
     $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
                    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
                    "Finland"=>"Helsinki", "France" => "Paris", 
                    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
                    "Germany" => "Berlin", "Greece" => "Athens", 
                    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
                    "Portugal"=>"Lisbon", "Spain"=>"Madrid",
                    "Sweden"=>"Stockholm", "United Kingdom"=>"London", 
                    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
                    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
                    "Hungary"=>"Budapest", "Latvia"=>"Riga", 
                    "Malta"=>"Valetta", "Austria" => "Vienna", 
                    "Poland"=>"Warsaw") ;
    asort($ceu);
    foreach($ceu as $pais => $capital){
        echo("The capital of $pais is $capital <br> ");
    }

    for($i = 0; $i < 3; $i++){
        echo("<br>"); 
    }

    print("Ejercicio #2 <br>"); 
    //Ejercicio 2
    $temperaturas = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 
    76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 
    68, 73, 75, 79, 73); 

    imprimir_temp($temperaturas);
    temp_promedio($temperaturas);
    temp_bajas($temperaturas); 
    temp_altas($temperaturas); 

    function imprimir_temp($array){
        echo("Temperaturas: "); 
        $cant = count($array);
        foreach($array as $temp){
            echo "$temp". limpiar($cant); 
            $cant--; 
        }
        echo("<br>"); 
    }

    function temp_promedio($array){
        $total = 0; 
        foreach($array as $temperatura){
            //formula = sumaTodos/cantidadArray
            $total += $temperatura; 
        }
        $promedio = number_format($total/count($array), 2); 
        echo("El promedio temperatura es: $promedio" );
    }

    function temp_bajas($array){
        sort($array); 
        $cant = 7; 
        $txt = "<br> Temperaturas más bajas: ";
        for($i = 0; $i < 7; $i++){
            $txt .="$array[$i]". limpiar($cant);  
            $cant--; 
        }
        echo($txt);  
    }

    function temp_altas($array){
        sort($array); 
        $cant = 7; 
        $txt = "<br> Temperaturas más altas: "; 
        for($i = count($array)-7; $i < count($array); $i++){
            $txt .= "$array[$i]". limpiar($cant); 
            $cant--; 
        }
        echo($txt); 
    }

    function limpiar($cant){
        return $cant == 1? "":", "; 
    }

?>