<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php

	$potencia = rand(1,5);
	$cantidad = rand(50,100);

	$valorPotencia = 1;


	echo "Potencia: ".$potencia." cantidad: ".$cantidad."<br>";


	// Recorro del 1 hasta el final
	for ($i=1; $valorPotencia < $cantidad; $i++) { 
		$valorPotencia = $i;
		for ($j=1; $j <= $potencia; $j++) { 
			$valorPotencia = $valorPotencia * $i;
		}
		echo "$i - $valorPotencia</br>";
	}

	/*

	SE que debería quitar la ultima linea porque soberpasa la cantidad pero ya he perdido mucho tiempo con este ejercicio y quiero terminar el resto.

	*/
	?>

</body>
</html>