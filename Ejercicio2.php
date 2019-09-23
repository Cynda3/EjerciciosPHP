<html>
<head>
	<title>Ejericio 2</title>
</head>
<body>
	<?php

	$num1 = rand(1,10);
	$num2 = rand(1,10);
	$num3 = rand(1,10);

	if ($num1>$num2 && $num1>$num3) {
		echo "$num1 es mayor que $num2 y $num3";
	}else if ($num2>$num1 && $num2>$num3) {
		echo "$num2 es mayor que $num1 y $num3";
	}else if ($num3>$num1 && $num3>$num2) {
		echo "$num1 es mayor que $num2 y $num3";
	}
	

	?>

</body>
</html>