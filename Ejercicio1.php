<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php

	$pisos = rand(1,10);
	$puertas = rand(1,5);

	for ($i=1; $i <= $pisos; $i++) { 
		for ($j=1; $j <= $puertas; $j++) { 
			echo "<h6>Piso $i - puerta $j</h6>";
		}

	}

	?>

</body>
</html>