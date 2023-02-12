<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
    <title> SearchString </title>
</head>
<body>   
<div class="flex-container">
    <h1 class="center text-result"> 
        <?php
            use function PHPSTORM_META\type;
            $string = $_GET["string"];
            if($string==""){
                echo "La stringa inserita e' vuota :( " ;
            }
            else{
                echo "La stringa inserita e':   " . $string ;
            }
        ?>
</div>
<div class="flex-container">
        <h1 class="center text-result">
            <?php
                $length = strlen($string);
                $string= str_replace(" ", "", $string); /// per effettuare una ricerca senza conteggiare gli spazi ///
                $last5 = $length - 5;

                echo "<br>" . "La stringa inserita contiene "  . "<br>" . strlen($string) . " caratteri.";
            ?>
        </h1>
</div>
<div class="flex-container">
        <h1 class="center text-result">
            <?php
                echo "<br>" . "I primi 5 caratteri della stringa sono: "  . "<br>" . substr($string, 0, 5);
            ?>
        </h1>
        <h1 class="center text-result">
            <?php
                echo "<br>" . "Gli ultimi 5 caratteri della stringa sono: " . "<br>"  . substr($string, $last5, 5);
            ?>
        </h1>
</div>
<div class="flex-container">
    <h1 class="center text-result">
        <?php
        $num = [];
        $numeri = 0;
        $revnum= [];
        echo "i primi 5 numeri all'interno della stringa sono: "  . "<br>";
        for($i=0; $i<$length; $i++){
            $num[$i] = substr($string, $i, 1);
            if (is_numeric($num[$i])){
                $numeri++;
                if($numeri<6){
                    echo $num[$i];
                    }
                }
            }
            if($numeri == 0){
                echo "non sono presenti numeri all'interno della stringa". "<br>";
            }
        ?>
    </h1>
    <h1 class="center text-result"> 
        <?php
            $num = [];
            $numeri = 0;
            $revnum= [];
            echo "Gli ultimi 5 numeri all'interno della stringa sono: "  . "<br>";
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
            if($numeri == 0){
                echo "non sono presenti numeri all'interno della stringa" . "<br>";
            }
        ?>
    </h1>
</div>
</body>
</html>