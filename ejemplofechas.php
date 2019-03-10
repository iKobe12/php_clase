<!DOCTYPE html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>

<?php
include_once('biblioteca.inc.php');

$fechaDeHoy = '2018-11-20 20:10:13';

echo Date2Fecha($fechaDeHoy);
echo '<br/>';
echo $ciudad . ',a ' . Fecha2Cabecera($fechaDeHoy);

?>


    
</body>
</html>