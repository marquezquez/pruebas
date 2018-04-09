
<HEAD>
   <TITLE>Inserción de Equipos de Futbol. </TITLE>
   <LINK REL="stylesheet" TYPE="text/css" >
</HEAD>

<BODY> 
  
<?PHP
   
   if (isset($_REQUEST['insertar']))
   {
   // Obtener valores introducidos en el formulario
      $nomequipo = $_REQUEST['nequipo'];
	  $nomciudad = $_REQUEST['nciudad'];
      $nompresidente = $_REQUEST['npresidente'];
      $aniofundacion = $_REQUEST['naniofundacion'];
	  $numgoles2015 = $_REQUEST['ngoles2015'];
	  $numgoles2016 = $_REQUEST['ngoles2016'];
      $numgoles2017 = $_REQUEST['ngoles2017'];
      $observaciones = $_REQUEST['observaciones'];

      print ("<H1>Inserción de Equipos de Futbol</H1>\n");

   // Comprobar que se han introducido todos los datos obligatorios
      $errores = "";
	  if (trim($nomequipo) == "")
         $errores = $errores . "   <LI>El nombre del equipo es obligatorio\n";
      if (trim($nomciudad) == "")
         $errores = $errores . "   <LI>El nombre de la ciudad es obligatorio\n"; 
	  if (trim($nompresidente) == "")
         $errores = $errores . "   <LI>El nombre del presidente es obligatorio\n";
      if (trim($aniofundacion) == "")
         $errores = $errores . "   <LI>El anio de fundacion es obligatorio\n";
      if (!is_numeric($numgoles2015))
         $errores = $errores . "   <LI>El numero de goles de 2015 debe ser un valor numérico\n";
	  if (!is_numeric($numgoles2016))
         $errores = $errores . "   <LI>El numero de goles de 2016 debe ser un valor numérico\n";
	  if (!is_numeric($numgoles2017))
         $errores = $errores . "   <LI>El numero de goles de 2017 debe ser un valor numérico\n";

   // Mostrar errores encontrados
      if ($errores != "")
      {
         print ("<P>No se ha podido realizar la inserción debido a los siguientes errores:</P>\n");
         print ("<UL>");
         print ($errores);
         print ("</UL>");
         print ("<P>[ <A HREF='javascript:history.back()'>Volver</A> ]</P>\n");
      }
      else
      {
         print ("<P>Estos son los datos introducidos:</P>\n");
         print ("<UL>\n");
         print ("   <LI>Nombre del Equipo: $nomequipo\n");
         print ("   <LI>Nombre de la Ciudad: $nomciudad\n");
         print ("   <LI>Nombre del Presidente: $nompresidente\n");
		 print ("   <LI>Anio de Fundacion: $aniofundacion\n");
		 print ("   <LI>Numero de Goles 2015: $numgoles2015\n");
		 print ("   <LI>Numero de Goles 2016: $numgoles2016\n");
		 print ("   <LI>Numero de Goles 2017: $numgoles2017\n");
		 print ("\n");
         print ("   <LI>Observaciones: $observaciones\n");
         print ("</UL>\n");
         print ("<P>[ <A HREF='Ejercicio3-17-01-18-Futbol.php'>Insertar otro equipo de futbol</A> ]</P>");
      }
   }
   else
   {
?>

<H1>Inserción de Equipos de Futbol</H1>

<P>Introduzca los datos de un equipo de futbol:</P>

<FORM CLASS="borde" ACTION="Ejercicio3-17-01-18-Futbol.php" METHOD="POST">

<P><LABEL>Nombre del Equipo:</LABEL>
<INPUT TYPE="TEXT" NAME="nequipo"></P>

<P><LABEL>Ciudad:</LABEL>
<SELECT NAME="nciudad">
   <OPTION VALUE="Madrid" SELECTED>Madrid
   <OPTION VALUE="Barcelona">Barcelona
   <OPTION VALUE="Sevilla">Sevilla
   <OPTION VALUE="Valencia">Valencia
</SELECT></P>

<P><LABEL>Nombre del Presidente:</LABEL>
<INPUT TYPE="TEXT" NAME="npresidente"></P>

<P><LABEL>Anio de Fundacion:</LABEL>
<INPUT TYPE="TEXT" NAME="naniofundacion"></P>


<P><LABEL>Número de goles 2015:</LABEL>
<INPUT TYPE="radio" NAME="ngoles2015" VALUE="30">30
<INPUT TYPE="radio" NAME="ngoles2015" VALUE="40">40
<INPUT TYPE="radio" NAME="ngoles2015" VALUE="50" CHECKED>50
<INPUT TYPE="radio" NAME="ngoles2015" VALUE="60">60
<INPUT TYPE="radio" NAME="ngoles2015" VALUE="70">70</P>

<P><LABEL>Número de goles 2016:</LABEL>
<INPUT TYPE="radio" NAME="ngoles2016" VALUE="30">30
<INPUT TYPE="radio" NAME="ngoles2016" VALUE="40">40
<INPUT TYPE="radio" NAME="ngoles2016" VALUE="50" CHECKED>50
<INPUT TYPE="radio" NAME="ngoles2016" VALUE="60">60
<INPUT TYPE="radio" NAME="ngoles2016" VALUE="70">70</P>

<P><LABEL>Número de goles 2017:</LABEL>
<INPUT TYPE="radio" NAME="ngoles2017" VALUE="30">30
<INPUT TYPE="radio" NAME="ngoles2017" VALUE="40">40
<INPUT TYPE="radio" NAME="ngoles2017" VALUE="50" CHECKED>50
<INPUT TYPE="radio" NAME="ngoles2017" VALUE="60">60
<INPUT TYPE="radio" NAME="ngoles2017" VALUE="70">70</P>

<P><LABEL>Observaciones:</LABEL>
<TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA></P>

<P><INPUT TYPE="submit" NAME="insertar" VALUE="Insertar Equipo"></P>

</FORM>

<?PHP
   }
?>

</BODY>
</HTML>
