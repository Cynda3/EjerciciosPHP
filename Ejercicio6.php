<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php

	$potencia = rand(1,10);
	$cantidad = rand(100,200);

	$valorPotencia = $potencia;


	echo "Potencia: ".$potencia." cantidad: ".$cantidad."<br>";

	while ($valorPotencia <= $cantidad) {
		for ($i=0; $i < $potencia; $i++) { 
			$valorPotencia = $valorPotencia*$potencia;
		}
		echo "$potencia * $valorPotencia</br>";
	}
	?>

</body>
</html>