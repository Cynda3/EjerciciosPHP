<html>
<head>
	<title>Ejericio 5</title>
</head>
<body>
	<?php

	$edad = rand(1,20);
	$altura = rand(80,220);
	$estaAcompanado = false;

	echo $estaAcompanado;

	echo "El niño tiene ".$edad." años y mide ".$altura."cm.";

	if ($edad >= 10 || $altura >= 120) {
		echo "Puede subir sin problemas";
	}elseif($estaAcompanado && $edad >=6){
		echo "Puede subir sin problemas";
	}else{
		echo "No puede subir";
	}
	
	?>

</body>
</html>