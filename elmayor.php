<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">

		<input type="text" name="elprimero"><br>

		<input type="text" name="elsegundo"><br>
		
		<input type="text" name="eltercero"><br>

		<input type="submit" name="calcular" value="calcular">

	</form>
	<?php


	if (isset($_POST["elprimero"])){
		$pri=$_POST["elprimero"];
		$seg=$_POST["elsegundo"];
		$ter=$_POST["eltercero"];
	if ($pri > $seg && $pri > $ter) {
		echo "el mayor es el primero (". $pri . ")";
	}
	else{
	if ($seg > $pri && $seg > $ter) {
		echo "el mayor es el segundo(". $seg . ")";
	}
	else
		echo "el mayor es el tercero(". $ter . ")";
}
}
	


	?>
</body>
</html>