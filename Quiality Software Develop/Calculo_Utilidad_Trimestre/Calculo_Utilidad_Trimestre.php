<?php
	//Bloque de proceso de validación.
	if (isset($_GET["txtIngreso1"] && isset($_GET["txtIngreso2"] && isset($_GET["txtIngreso3"] && isset($_GET["txtIngreso4"] && isset($_GET["txtEgreso1"] && isset($_GET["txtEgreso2"] && isset($_GET["txtEgreso3"] && isset($_GET["txtEgreso4"])))))
	{
		//Se lleva a cabo la generación de variables y el cálculo.
		$in1 = $_GET["txtIngreso1"];
		$in2 = $_GET["txtIngreso2"];
		$in3 = $_GET["txtIngreso3"];
		$in4 = $_GET["txtIngreso4"];
		$eg1 = $_GET["txtEgreso1"];
		$eg2 = $_GET["txtEgreso2"];
		$eg3 = $_GET["txtEgreso3"];
		$eg4 = $_GET["txtEgreso4"];
	}
?>
/* Inicia forma donde se ingresaran los datos. */
<form method="get">
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