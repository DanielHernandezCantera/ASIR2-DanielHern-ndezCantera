<h1>Funciones</h1>

<?php

echo "numeros: 800 y -70 <br>";

function variables($a, $b)
{
  $mas=$a+$b;

  $menos=$a-$b;

  $por=$a*$b;

  $entre=$a/$b;

  echo "resultados <br>";
  echo "suma.$mas. <br>";
  echo "resta.$menos. <br>";
  echo "producto.$por. <br>";
  echo "cociente.$entre. <br>";

}
$a= 800; $b= -70;
variables($a, $b)

 ?>
