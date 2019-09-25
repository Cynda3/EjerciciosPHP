<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php

	$edad = rand(1,20);
	$altura = rand(80,220);
	$estaAcompanado = rand(0,1)=1;

	echo $estaAcompanado;

	echo "El niño tiene ".$edad." años y mide ".$altura."cm.";

	if ($edad) {
		# code...
	}
	
	?>

</body>
</html>