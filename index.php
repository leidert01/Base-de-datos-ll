<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //echo"Hola 7mo semestre <br>";
        /*function operar(){
            echo"Dentro de la funcion <br>";
        }*/
        /*include("datos1.php");
        operar();
        echo"Fuera de la funcion <br>";
        $i=1;*/
        /*while($i<=10){
            echo$i;
            $i++;
        }*/
        /*for ($i; $i<11 ; $i++) { 
            echo$i;
            
        }*/
        /*echo"Inicio del programa <br>";
        function sumar ($n1,$n2){
            $resultado=$n1+$n2;
            return $resultado;

        }
        echo(sumar(7,5))*/
        //include_once "parcial.php";
        $codigo=$_POST['codigo'];
        $capital=$_POST['capital'];
        $dia=$_POST['dia'];
        $tasa=$_POST['tasa'];
        $interes=($capital*($tasa/100)*(360-$dia)/360);
        echo"El interes es de: $interes <br>" ;
        echo"El capital es de: " .$capital;

        
    ?>
    
</body>
</html>