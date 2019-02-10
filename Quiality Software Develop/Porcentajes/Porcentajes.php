<?php
/*
	Made by Eliott Salazar.
	Universidad Tecnológica de Hermosillo.
*/
?>
<?php
	//Definimos las variables.
	$can1 = 0;
	$can2 = 0;
	$can3 = 0;
	$can4 = 0;
	$can5 = 0;
	$can6 = 0;
	$total = 0;
	//Se asignan los valores a las variables.
	if (isset($_GET["txtCantidad1"]))
	{
		$can1 = $_GET["txtCantidad1"];
		if (is_numeric($can1))
		{
			$total = $total + $can1;
		}
		else
		{
			printf("El valor introducido no cumple con el tipo de dato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtCantidad2"]))
	{
		$can2 = $_GET["txtCantidad2"];
		if (is_numeric($can2))
		{
			$total = $total + $can2;
		}
		else
		{
			printf("El valor introducido no cumple con el tipo de dato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtCantidad3"]))
	{
		$can3 = $_GET["txtCantidad3"];	
		if (is_numeric($can3))
		{
			$total = $total + $can3;
		}
		else
		{
			printf("El valor introducido no cumple con el tipo de dato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtCantidad4"]))
	{
		$can4 = $_GET["txtCantidad4"];
		if (is_numeric($can4))
		{
			$total = $total + $can4;
		}
		else
		{
			printf("El valor introducido no cumple con el tipo de dato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtCantidad5"]))
	{
		$can5 = $_GET["txtCantidad5"];
		if (is_numeric($can5))
		{
			$total = $total + $can5;
		}
		else
		{
			printf("El valor introducido no cumple con el tipo de dato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtCantidad6"]))
	{
		$can6 = $_GET["txtCantidad6"];
		if (is_numeric($can6))
		{
			$total = $total + $can6;
		}
		else
		{
			printf("El valor introducido no cumple con el tipo de dato DOUBLE, favor de validar.");
		}
	}
	$porc = $_GET["cbxPorcentajes"];
	$total = $total * $porc;
	printf("El resultado es: " .$total);

?>
<!-- Formulario donde el usuario ingresará los datos -->
<form id="formulario" method="GET">
	Cantidad 1 <br>
	<input type="text" name="txtCantidad1" placeholder="Cantidad 1" required> <br>
	Cantidad 2 <br>
	<input type="text" name="txtCantidad2" placeholder="Cantidad 2" required> <br>
	Cantidad 3 <br>
	<input type="text" name="txtCantidad3" placeholder="Cantidad 3" required> <br>
	Cantidad 4 <br>
	<input type="text" name="txtCantidad4" placeholder="Cantidad 4" required> <br>
	Cantidad 5 <br>
	<input type="text" name="txtCantidad5" placeholder="Cantidad 5" required> <br>
	Cantidad 6 <br>
	<input type="text" name="txtCantidad6" placeholder="Cantidad 6" required> <br>
	<select name="cbxPorcentajes" form="formulario" autofocus required>
		<option value="0.20">20%</option>
		<option value="0.25">25%</option>
		<option value="0.50">50%</option>
		<option value="0.75">75%</option>
		<option value="0.80">80%</option>
	</select>
	<input type="submit" name="btnCalcular" value="Calcular porcentaje">
</form>