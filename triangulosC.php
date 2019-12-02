<h1>Funciones</h1>

<?php

$a=5; $b=3; $c=3; $f=90;

if ($f==90) {echo "rectangulo ";}

elseif ($f>90) {echo "obtusangulo ";}

elseif ($f<90) {echo "acutangulo ";}

if ($a==$b and $b==$c) {echo "equilatero";}

elseif ($a==$b or $b==$c or $a==$c) {echo "isosceles";}

elseif ($a != $b and $b != $c) {echo "escaleno";}

?>
