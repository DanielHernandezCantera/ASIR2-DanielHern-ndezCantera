<h1>Funciones</h1>

<?php

$a=4; $b=5; $c=6;

if ($a==$b and $b==$c) {echo "equilatero";}

elseif ($a==$b or $b==$c or $a==$c) {echo "isosceles";}

elseif ($a != $b and $b != $c) {echo "escaleno";}

?>
