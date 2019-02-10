<?php
	$peso1 = 0;
	$peso2 = 0;
	$peso3 = 0;
	$peso4 = 0;
	$peso5 = 0;
	$peso6 = 0;
	$peso7 = 0;
	$peso8 = 0;
	$peso9 = 0;
	$peso10 = 0;
	$al1 = 0;
	$al2 = 0;
	$al3 = 0;
	$al4 = 0;
	$al5 = 0;
	$al6 = 0;
	$al7 = 0;
	$al8 = 0;
	$al9 = 0;
	$al10 = 0;
	$promPeso = 0;
	$promAltura = 0;
	$cont = 0;
	$cont2 = 0;

	//Se lleva a cabo la validación de datos y la asignación de variables.
	if (isset($_GET["txtPeso1"]))
	{
		$peso1 = $_GET["txtPeso1"];
		if (is_numeric($peso1))
		{
			$promPeso = $promPeso + $peso1;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso2"]))
	{
		$peso2 = $_GET["txtPeso2"];
		if (is_numeric($peso2))
		{
			$promPeso = $promPeso + $peso2;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso3"]))
	{
		$peso3 = $_GET["txtPeso3"];
		if (is_numeric($peso3))
		{
			$promPeso = $promPeso + $peso3;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso4"]))
	{
		$peso4 = $_GET["txtPeso4"];
		if (is_numeric($peso4))
		{
			$promPeso = $promPeso + $peso4;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso5"]))
	{
		$peso5 = $_GET["txtPeso5"];
		if (is_numeric($peso5))
		{
			$promPeso = $promPeso + $peso5;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso6"]))
	{
		$peso6 = $_GET["txtPeso6"];
		if (is_numeric($peso6))
		{
			$promPeso = $promPeso + $peso6;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso7"]))
	{
		$peso7 = $_GET["txtPeso7"];
		if (is_numeric($peso7))
		{
			$promPeso = $promPeso + $peso7;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso8"]))
	{
		$peso8 = $_GET["txtPeso8"];
		if (is_numeric($peso8))
		{
			$promPeso = $promPeso + $peso8;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso9"]))
	{
		$peso9 = $_GET["txtPeso9"];
		if (is_numeric($peso9))
		{
			$promPeso = $promPeso + $peso9;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtPeso10"]))
	{
		$peso10 = $_GET["txtPeso10"];
		if (is_numeric($peso10))
		{
			$promPeso = $promPeso + $peso10;
			$cont++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura1"]))
	{
		$al1 = $_GET["txtAltura1"];
		if (is_numeric($al1))
		{
			$promAltura = $promAltura + $al1;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura2"]))
	{
		$al2 = $_GET["txtAltura2"];
		if (is_numeric($al2))
		{
			$promAltura = $promAltura + $al2;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura3"]))
	{
		$al3 = $_GET["txtAltura3"];
		if (is_numeric($al3))
		{
			$promAltura = $promAltura + $al3;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura4"]))
	{
		$al4 = $_GET["txtAltura4"];
		if (is_numeric($al4))
		{
			$promAltura = $promAltura + $al4;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura5"]))
	{
		$al5 = $_GET["txtAltura5"];
		if (is_numeric($al5))
		{
			$promAltura = $promAltura + $al5;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura6"]))
	{
		$al6 = $_GET["txtAltura6"];
		if (is_numeric($al6))
		{
			$promAltura = $promAltura + $al6;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura7"]))
	{
		$al7 = $_GET["txtAltura7"];
		if (is_numeric($al7))
		{
			$promAltura = $promAltura + $al7;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura8"]))
	{
		$al8 = $_GET["txtAltura8"];
		if (is_numeric($al8))
		{
			$promAltura = $promAltura + $al8;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura9"]))
	{
		$al9 = $_GET["txtAltura9"];
		if (is_numeric($al9))
		{
			$promAltura = $promAltura + $al9;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}
	if (isset($_GET["txtAltura10"]))
	{
		$al10 = $_GET["txtAltura10"];
		if (is_numeric($al10))
		{
			$promAltura = $promAltura + $al10;
			$cont2++;
		}
		else

		{
			printf("El tipo de dato ingresado no cumple con el formato DOUBLE, favor de validar.");
		}
	}

	$promAltura = ($promAltura) / $cont2;
	$promPeso = ($promPeso) / $cont;
?>
<!-- Formulario de ingreso de datos -->
<form method="GET">
	<input type="text" name="txtNombre1" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso1" placeholder="Capture el peso 1" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura1" placeholder="Capture la altura 1" required> <br>
	<input type="text" name="txtNombre2" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso2" placeholder="Capture el peso 2" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura2" placeholder="Capture la altura 2" required> <br>
	<input type="text" name="txtNombre3" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso3" placeholder="Captura el peso 3" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura3" placeholder="Capture la altura 3" required> <br>
	<input type="text" name="txtNombre4" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso4" placeholder="Capture el peso 4" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura4" placeholder="Capture la altura 4" required> <br>
	<input type="text" name="txtNombre5" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso5" placeholder="Capture el peso 5" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura5" placeholder="Capture la altura 5" required> <br>
	<input type="text" name="txtNombre6" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso6" placeholder="Capture el peso 6" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura6" placeholder="Capture la altura 6" required> <br>
	<input type="text" name="txtNombre7" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso7" placeholder="Capture el peso 7" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura7" placeholder="Capture la altura 7" required> <br>
	<input type="text" name="txtNombre8" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso8" placeholder="Capture el peso 8" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura8" placeholder="Capture la altura 8" required> <br>
	<input type="text" name="txtNombre9" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso9" placeholder="Capture el peso 9" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura9" placeholder="Capture la altura 9" required> <br>
	<input type="text" name="txtNombre10" placeholder="Nombre"> &nbsp;&nbsp;
	<input type="text" name="txtPeso10" placeholder="Capture el peso 10" required> &nbsp;&nbsp;
	<input type="text" name="txtAltura10" placeholder="Capture la altura 10" required> <br>
	<input type="submit" name="btnCalcular" value="Calcular promedio">
</form>

<?php
	echo "<table border='1' cellspacing='0'>
		<tr>
			<th>Peso</th>
			<th>Altura</th>
		</tr>
		<tr>
			<td>$peso1</td>
			<td>$al1</td>
		</tr>
		<tr>
			<td>$peso2</td>
			<td>$al2</td>
		</tr>
		<tr>
			<td>$peso3</td>
			<td>$al3</td>
		</tr>
		<tr>
			<td>$peso4</td>
			<td>$al4</td>
		</tr>
		<tr>
			<td>$peso5</td>
			<td>$al5</td>
		</tr>
		<tr>
			<td>$peso6</td>
			<td>$al6</td>
		</tr>
		<tr>
			<td>$peso7</td>
			<td>$al7</td>
		</tr>
		<tr>
			<td>$peso8</td>
			<td>$al8</td>
		</tr>
		<tr>
			<td>$peso9</td>
			<td>$al9</td>
		</tr>
		<tr>
			<td>$peso10</td>
			<td>$al10</td>
		</tr>
		<tr>
			<td>Promedio</td>
			<td>Promedio</td>
		</tr>
		<tr>
			<td>$promPeso</td>
			<td>$promAltura</td>
		</tr>
	</table>"
?>