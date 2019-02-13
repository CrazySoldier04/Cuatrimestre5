<?php
	//Se declaran las variables.
	$cant = 0;
	$total = 0;
	$porc = 0;

	//Se lleva a cabo la validación de campos vacíos.
	if (isset($_POST["txtCantidad"]))
	{
		//Se asigna valor a la variable.
		$cant = $_POST["txtCantidad"];
		$porc = $_POST["cbxIva"];
		//Se lleva a cabo la validación del tipo de formato DOUBLE.
		if (is_numeric($cant))
		{
			$total = ($cant * $porc);
		}
		else
		{
			printf("El tipo de dato ingresado no es correcto");
		}
	}
	printf("El IVA es de: " .$total);
?>
<!--Formulario donde se ingresaran los datos -->
<form id="frmCalculoIva" method="POST">
	Cantidad a calcular:<br>
	<input type="text" name="txtCantidad" placeholder="Capturar la cantidad" required><br>
	<select name="cbxIva" form="frmCalculoIva" required>
		<option value="0.08">Frontera 8%</option>
		<option value="0.16">Resto del país 16%</option>
	</select>
	<input type="submit" name="btnCalcular" value="Calcular IVA">
</form>