<?php

use function PHPSTORM_META\type;

    $string = $_GET["string"];
    if($string==""){
    echo "La stringa inserita e' vuota :( " ;
    }
    else{
        echo "La stringa inserita e' " . $string ;
    }
    $length = strlen($string);
    $string= str_replace(" ", "", $string); /// per effettuare una ricerca senza conteggiare gli spazi ///
    $last5 = $length - 5;

    echo "<br>" . "La stringa inserita contiene " . strlen($string) . " caratteri.";
    echo "<br>" . "I primi 5 caratteri della stringa sono: " . substr($string, 0, 5);
    echo "<br>" . "Gli ultimi 5 caratteri della stringa sono: " . substr($string, $last5, 5) . "<br>";

    $num = [];
    $numeri = 0;
    $revnum= [];

    echo "i primi 5 numeri all'interno della stringa sono: ";
    for($i=0; $i<$length; $i++){
            $num[$i] = substr($string, $i, 1);
                if (is_numeric($num[$i])){
                    $numeri++;
                if($numeri<6){
                        echo $num[$i];
                    }
            }
        }
    $numeri=0;
    echo "<br>" . "Gli ultimi 5 numeri all'interno della stringa sono: ";
    for($i=0; $i<$length; $i++){
             $num[$i] = substr(strrev($string), $i, 1);
                if (is_numeric($num[$i])){
                    $revnum[$numeri]=$num[$i];
                    $numeri++;
                if($numeri==5){
                    for($x=4; $x>=0; $x--){
                    echo $revnum[$x];
                    }
            }
        }
    }
        if($numeri==0){
            echo "Non sono presenti numeri all'interno della stringa";
        }
?>