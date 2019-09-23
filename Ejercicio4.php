<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php

	$noPalin = "palindromo";
	$Palin = "girafarig";

	// Divido el string en caracteres y lo meto en un array
	$noPalinArr = str_split($noPalin);

	// Creo un array para meter el array anterior al reves
	$noPalinArrVuelta = array();

	// Recorro el array para meterlo al rever en el otro
	for ($i=count($noPalinArr)-1; $i >= 0; $i--) { 
		array_push($noPalinArrVuelta, $noPalinArr[$i]);
	}
 	// Compruebo si son iguales
	if ($noPalinArr == $noPalinArrVuelta) {
		echo($noPalin." es palindromo </br>");
	}else{
		echo($noPalin." no es palindromo </br>");
	}


	// Se que se podria ahorrar codigo poniendo una funcion pero ya he perdido demasiado tiempo con esto



	// Divido el string en caracteres y lo meto en un array
	$PalinArr = str_split($Palin);

	// Creo un array para meter el array anterior al reves
	$PalinArrVuelta = array();


	for ($i=count($PalinArr)-1; $i >= 0; $i--) { 
		array_push($PalinArrVuelta, $PalinArr[$i]);
	}

	if ($PalinArr == $PalinArrVuelta) {
		echo($Palin." es palindromo");
	}else{
		echo($Palin." no es palindromo");
	}

	?>

</body>
</html>