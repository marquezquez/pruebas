
<html>

<head>
</head>

<body>

<?php
if (isset($_REQUEST['insertar'])) {
	$nombre = $_REQUEST['nombre'];
	$ciudad = $_REQUEST['ciudad'];
	$presidente = $_REQUEST['presidente'];
	$fundacion = $_REQUEST['fundacion'];
	$goles15 = $_REQUEST['goles15'];
  $goles16 = $_REQUEST['goles16'];
  $goles17 = $_REQUEST['goles17'];
  $observaciones = $_REQUEST['observaciones'];

		$error ="";
		if (trim($nombre) == "")
			$error = $error .
			"<li>El nombre del equipo es obligatorio\n";
		if (trim($presidente) == "")
			$error = $error .
			"<li>El nombre del presidente es obligatorio\n";
		if(trim($fundacion) == "")
			$error = $error .
		    "<li> El ano de fundacion es obligatorio\n";
	if ($error != "") {
		echo "<h1>ERROR</h1>\n";
		echo"<h1>No se ha podido introducir los datos por los siguientes motivos:</h1>\n".
		"<ul>".
		$error.
		"</ul>".
		"[<A HREF='javascript:history.back()'> Volver </A>]\n";
}
    if ($error == ""){
		echo "Estos son los datos introducidos:\n".
		"<ul>\n".
		"<li>Nombre del equipo: $nombre\n".
		"<li>Ciudad: $ciudad\n".
		"<li>presidente: $presidente\n".
		"<li>Ano de fundacion: $fundacion\n".
		"<li>Numero de goles en 2015: $goles15\n".
   		 "<li>Numero de goles en 2016: $goles16\n".
   		 "<li>Numero de goles en 2017: $goles17\n".
		"<li>Observaciones: $observaciones\n".
		"</ul>".
		"[<A HREF='Ejercicio 4.php'> Volver </A>]\n";
}
}
else {
?>
<h1>insercion de equipos de futbol</h1>

<p>introduzca los datos de un equipo:</p>

<form method="post">

<p><label>nombre del equipo:</label>
<input type="text" name="nombre"></p>

<p><label>ciudad: </label>
<select name="ciudad">
   <option value="madrid" selected>Madrid
   <option value="barcelona">Barcelona
   <option value="sevilla">Sevilla
   <option value="valencia">Valencia
</select></p>

<p><label>nombre del presidente</label>
<input type="text" name="presidente"></p>

<p><label>ano de fundacion: </label>
<input type="text" name="fundacion"></p>

<p><label>numero de goles 2015</label>
<input type="radio" name="goles15" value="30">30
<input type="radio" name="goles15" value="40">40
<input type="radio" name="goles15" value="50" checked>50
<input type="radio" name="goles15" value="60">60
<input type="radio" name="goles15" value="70">70</p>

<p><label>numero de goles 2016</label>
<input type="radio" name="goles16" value="30">30
<input type="radio" name="goles16" value="40">40
<input type="radio" name="goles16" value="50" checked>50
<input type="radio" name="goles16" value="60">60
<input type="radio" name="goles16" value="70">70</p>

<p><label>numero de goles 2017</label>
<input type="radio" name="goles17" value="30">30
<input type="radio" name="goles17" value="40">40
<input type="radio" name="goles17" value="50" checked>50
<input type="radio" name="goles17" value="60">60
<input type="radio" name="goles17" value="70">70</p>

<p><label>observaciones:</label>
<textarea name="observaciones" cols="50" rows="5"></textarea></p>

<p><input type="submit" name="insertar" value="insertar equipo"></p>

</form>
<?php
}
 ?>
</body>
</html>
