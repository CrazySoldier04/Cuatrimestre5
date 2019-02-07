<?php
/*
	Made by Eliott Salazar.
	Universidad Tecnológica de Hermosillo.
*/
?>
<?php
	//Se asignan los valores a las variables.
	$can1 = $_GET["txtCantidad1"];
	$can2 = $_GET["txtCantidad2"];
	$can3 = $_GET["txtCantidad3"];
	$can4 = $_GET["txtCantidad4"];
	$can5 = $_GET["txtCantidad5"];
	$can6 = $_GET["txtCantidad6"];
	$porc = $_GET["cbxPorcentajes"];

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
	<button type="submit" form="formulario" name="btnCalcular" value="Calcular porcentaje"></button>
</form>