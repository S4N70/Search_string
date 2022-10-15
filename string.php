<?php 
    
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
    echo "<br>" . "Gli ultimi 5 caratteri della stringa sono: " . substr($string, $last5, 5);

?>