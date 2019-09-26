<html>
<head>
	<title>Ejericio 10</title>
</head>
<body>
	<?php

	$total_compra = rand(500, 10000)/100;
	$tipo_compra = ["mascotas", "ropa"];
	$randomNum = rand(0,1);
	$precioFinal = 0;
	echo "$total_compra</br>";
	echo "$randomNum</br>";
	if (intval($total_compra)<19) {
		if ($tipo_compra[$randomNum] == "mascotas") {
			echo "No se puede realizar el envio";
		}elseif($tipo_compra[$randomNum] == "ropa"){
			echo "Los gastos de envio son 9 euros";
		}
	}elseif(intval($total_compra)>19 && intval($total_compra) < 40){
		echo "Los gastos de envio son 9 euros";
	}elseif (intval($total_compra)>80) {
		echo "Los portes de envio son gratis";
	}

	if ($tipo_compra[$randomNum] == "mascotas") {
		$precioFinal = $total_compra*10/100+$total_compra;
		echo "</br>$precioFinal";
	}elseif($tipo_compra[$randomNum] == "ropa"){
		$precioFinal = $total_compra*21/100+$total_compra;
		echo "</br>$precioFinal";
		}



	?>

</body>
</html>