<?php
function descuento($tp,$venta){
    if ($venta<=100000 && $tp=="efectivo"){
        $descuento=$venta*(20/100);
        $venta=$venta-$descuento; 
    }
    if ($venta<=100000 && $tp=="tarjeta de credito"){
        $descuento=$venta*(10/100);
        $venta=$venta-$descuento;
    }
    if ($venta>100000 && $venta<=200000 & $tp=="efectivo"){
        $descuento=$venta*(30/100);
        $venta=$venta-$descuento;
    }
    if ($venta>100000 && $venta<=200000 & $tp=="tarjeta de credito"){
        $descuento=$venta*(15/100);
        $venta=$venta-$descuento;
    }
    if ($venta>200000 && $tp=="efectivo"){
        $descuento=$venta*(40/100);
        $venta=$venta-$descuento;
    }
    if ($venta>200000 && $tp=="tarjeta de credito"){
        $descuento=$venta*(20/100);
        $venta=$venta-$descuento;
    }
    echo("El total de la venta es: .$venta <br>");
    echo("El descuento es de: ".$descuento);

}
?>