<?php
/*
	Made by Eliott Ivan Salazar Quijada
	Universidad Tecnológica de Hermosillo
*/
?>
<?php
	//Bloque donde se lleva a cabo la validación que no contengan datos vacíos.
	if(isset($_GET["txtCal1"]))
	{
		$cal1 = _GET["txtCal1"];
	}
	if (isset($_GET["txtCal2"]))
	{
		$cal2 = $_GET["txtCal2"];
	}
	if (isset($_GET["txtCal3"]))
	{
		$cal3 = $_GET["txtCal3"];
	}
	if (isset($_GET["txtCal4"]))
	{
		$cal4 = $_GET["txtCal4"];
	}
	if (isset($_GET["txtCal5"]))
	{
		$cal5 = $_GET["txtCal5"];
	}
	if (isset($_GET["txtCal6"]))
	{
		$cal6 = $_GET["txtCal6"];
	}
	//Se valida que los contenidos sean valores numéricos.
	if (is_numeric($cal1))
	{
		$suma = $suma + $cal1;
		$cont ++;
	}
		if (is_numeric($cal2))
	{
		$suma = $suma + $cal2;
		$cont ++;
	}
		if (is_numeric($cal3))
	{
		$suma = $suma + $cal3;
		$cont ++;
	}
		if (is_numeric($cal4))
	{
		$suma = $suma + $cal4;
		$cont ++;
	}
		if (is_numeric($cal5))
	{
		$suma = $suma + $cal5;
		$cont ++;
	}
		if (is_numeric($cal6))
	{
		$suma = $suma + $cal6;
		$cont ++;
	}
	//Se lleva a cabo el cálculo del promedio.
	$prom = $suma / $cont;
	//Se imprime el resultado en la pantalla del usuario.
	printf("El promedio es de: " .$prom);
?>

<!-- Forma donde se ingresarán los datos -->
<form method="GET">
	Calificación 1 <br>
	<input type="text" name="txtCal1" placeholder="Capture calificación 1"> <br>
	Calificación 2 <br>
	<input type="text" name="txtCal2"> <br>
	Calificación 3 <br>
	<input type="text" name="txtCal3"> <br>
	Calificación 4 <br>
	<input type="text" name="txtCal4"> <br>
	Calificacion 5 <br>
	<input type="text" name="txtCal5"> <br>
	Calificación 6 <br>
	<input type="text" name="txtCal6"> <br>
	<input type="submit" name="btnCalcular" value="Calcular promedio">
</form>