<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php

	$num1 = 15;
	$num2 = 3;


	function calculadora($f, $num1, $num2){
		$result = $f($num1, $num2);
		return $result;
	}

	
	function suma($num1, $num2){
		$suma = $num1+$num2;
		return $suma;
	}

	function resta($num1, $num2){
		$resta = $num1-$num2;
		return $resta;
	}

	function multiplicacion($num1, $num2){
		$multiplicacion = $num1*$num2;
		return $multiplicacion;
	}

	function division($num1, $num2){
		$division = $num1/$num2;
		return $division;
	}

	echo(calculadora(resta, $num1, $num2));

	?>

</body>
</html>