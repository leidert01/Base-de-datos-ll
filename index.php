<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
</head>
<body>
<?php
include("funcion.php");
$venta=$_POST['venta'];
$tp=$_POST['tp'];
descuento($tp,$venta);
?>
</body>
</html>