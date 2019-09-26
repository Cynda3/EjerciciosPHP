<html>
<head>
	<title>Ejericio 9</title>
</head>
<body>
	<?php

	$importe = rand(5000, 50000);
	$comision = 0;

	if ($importe<10000) {
		$comision = calcularComision($importe, 5);
		echo "El importe es $importe y la comision es $comision";
	}elseif($importe>10000 && $importe<20000){
		$comision = calcularComision($importe, 8);
		echo "El importe es $importe y la comision es $comision";
	}elseif($importe>20000 && $importe<40000){
		$comision = calcularComision($importe, 10);
		echo "El importe es $importe y la comision es $comision";
	}elseif($importe>40000){
		$comision = calcularComision($importe, 13);
		echo "El importe es $importe y la comision es $comision";
	}


	function calcularComision($com, $porcentaje){
		return $porcentaje*$com/100;
	}

	?>

</body>
</html>