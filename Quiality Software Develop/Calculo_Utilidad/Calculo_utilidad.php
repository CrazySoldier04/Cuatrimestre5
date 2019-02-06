<?php
	//Bloque de proceso después del submit.
	if (isset($_GET["txtIngreso"]) && isset($_GET["txtEgreso"]))
	{
		//Se lleva a cabo la generación de variables y el cálculo.
		$ingreso = $_GET["txtIngreso"];
		$egreso = $_GET["txtEgreso"];
		//Se calcula la utilidad.
		$utilidad = $ingreso - $egreso;
		//Imprimimos el resultado.
		printf("La utilidad es de: ".$utilidad);
	}
	else
	{
		//En caso de que no se haya capturados los datos, se imprime un mensaje de error.
		printf("No se capturaron los datos");
	}
?>

<form method="get">
	Ingreso <br>
	<input type="text" name="txtIngreso" placeholder="Capture el ingreso"> <br>
	EGRESO <br>
	<input type="text" name="txtEgreso" placeholder="Captura el egreso"> <br>
	<input type="submit" name="btnCalcular" value="Calcular">
</form>