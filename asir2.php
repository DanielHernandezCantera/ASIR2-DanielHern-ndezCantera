<h1 COLOR="PINK">PAGINA</h1></br>

<a href="http://192.168.0.92/asir2.php">LUIS</a></br>
<a href="http://192.168.0.90/asir2.php">KEVIN</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>