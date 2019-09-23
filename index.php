<?php
if(isset ($_GET))
print_r($_GET);
$f=fopen('Suscriptores.txt','a');
fwrite($f,$_GET['email']."\r\n");
fclose($f)
?>

<form>
	<input name="email"/>
	<button>Suscribirse</button>
</form>

<h1 COLOR="">PAGINA</h1></br>

<a href="http://192.168.0.44/asir2.php">LUIS</a></br>
<a href="http://192.168.0.90/asir2.php">KEVIN</a>