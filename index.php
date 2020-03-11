<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Practica 11 - Variables</title>
</head>
<body>

<h1>VARIABLES</h1>

<?php

   $nombre='Rumaya chavez julio cesar';
   $edad=20;    
   $beca=3000;
   $estatus=true;
   echo"Tipos de Variables <br>";
   echo $nombre.'<br/>';
   echo $edad. '<br/>';
   echo $beca. '<br>';
   echo $estatus. '<br/>';
   echo $nombre.' Tiene '. $edad.' años de edad y gana '. $beca.'<br/>';
?>

<h1>Operadores Aritméticos</h1>

<?php

$numero1=10;
$numero2=5;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo 'La suma es: '. $suma.'<br/>';
echo 'La suma es='. $numero1+$numero2.'<br/>';
echo 'La resta es :'. $resta.'<br/>';
echo 'La multiplicacion es: '. $multiplicacion.'<br/>';
echo 'La division es: '. $division.'<br/>';

echo 'incremento de suma: '. $suma++.'<br/>';
echo 'decremento de suma: '. $suma--.'<br/>';

echo 'Residuo es:  '.$numero1%$numero2;


?>

</body>
</html>