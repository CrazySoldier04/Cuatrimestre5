<?php
	//Bloque de proceso de validación.
	if (isset($_GET["txtIngreso1"]))
	{
		$in1 = $_GET["txtIngreso1"];
	}
	if (isset($_GET["txtIngreso2"]))
	{
		$in2 = $_GET["txtIngreso2"];
	}
	if (isset($_GET["txtIngreso3"]))
	{
		$in3 = $_GET["txtIngreso3"];
	}
	if (isset($_GET["txtIngreso4"]))
	{
		$in4 = $_GET["txtIngreso4"];
	}
	if (isset($_GET["txtEgreso1"]))
	{
		$eg1 = $_GET["txtEgreso1"];
	}
	if (isset($_GET["txtEgreso2"]))
	{
		$eg2 = $_GET["txtEgreso2"];
	}
	if (isset($_GET["txtEgreso3"]))
	{
		$eg3 = $_GET["txtEgreso3"];
	}
	if (isset($_GET["txtEgreso4"]))
	{
		$eg4 = $_GET["txtEgreso4"];
	}
	if (is_numeric($in1) && is_numeric($in2) && is_numeric($in3) && is_numeric($in4) && is_numeric($eg1) && is_numeric($eg2) && is_numeric($eg3) && is_numeric($eg4))
	{
		$ut1 = $in1 - $eg1;
		$ut2 = $in2 - $eg2;
		$ut3 = $in3 - $eg3;
		$ut4 = $in4 - $eg4;
	}
	//Se imprimen los resultados al usuario.
	printf("La utilidad del primer trimestre es: " .$ut1);
	printf("La utilidad del segundo trimestre es: " .$ut2);
	printf("La utilidad del tercer trimestre es: " .$ut3);
	printf("La utilidad del último trimestre es: " .$ut4);
?>
<!-- Formulario donde el usuario ingresará los datos -->
<form method="POST">
	Ingreso 1 <br>
	<input type="text" name="txtIngreso1" placeholder="Capture el ingreso 1"> <br>
	Ingreso 2 <br>
	<input type="text" name="txtIngreso2" placeholder="Capture el ingreso 2"> <br>
	Ingreso 3 <br>
	<input type="text" name="txtIngreso3" placeholder="Capture el ingreso 3"> <br>
	Ingreso 4 <br>
	<input type="text" name="txtIngreso4" placeholder="Capture el ingreso 4"> <br>
	Egreso 1 <br>
	<input type="text" name="txtEgreso1" placeholder="Capture el egreso 1"> <br>
	Egreso 2 <br>
	<input type="text" name="txtEgreso2" placeholder="Capture el egreso 2"> <br>
	Egreso 3 <br>
	<input type="text" name="txtEgreso3" placeholder="Capture el egreso 3"> <br>
	Egreso 4 <br>
	<input type="text" name="txtEgreso4" placeholder="Capture el egreso 4"> <br>
	<input type="submit" name="btnCalcular" value="Calcular">
</form>