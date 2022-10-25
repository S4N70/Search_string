<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title> String  </title>
</head>
<body>
    <div id="box1" class="margin">
        <div id="stringtitle"><?php
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
        <div class="container">
        <?php
        $length = strlen($string);
        $string= str_replace(" ", "", $string); /// per effettuare una ricerca senza conteggiare gli spazi ///
        $last5 = $length - 5;

        echo "<br>" . "La stringa inserita contiene " . strlen($string) . " caratteri.";
        ?>
        </div>
         <div class="container">
        <?php
        echo "<br>" . "I primi 5 caratteri della stringa sono: " . substr($string, 0, 5);
        echo "<br>" . "Gli ultimi 5 caratteri della stringa sono: " . substr($string, $last5, 5) . "<br>";
        ?>
        </div>
        <div class="container">
        <?php
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
        </div>
    </div>
</body>
</html>