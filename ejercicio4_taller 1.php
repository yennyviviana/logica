<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ejercicio_taller</title>
</head>

<body>

<h1>EL SALARIO MINIMO</h1>

<tr>
<td>salario basico</td>
<td><input type="text" name="salario basico"></td>
</tr>
<tr>
<td>salud</td>
<td><input type="text" name="salud"></td>
</tr>
<tr>
<td>pension</td>
<td><input type="text" name="pension"></td>
</tr>
<tr>
<td>bonificaciones</td>
<td><input type="text" name="bonificacion"> </td>
</tr>
<tr>
<td>salario mensual</td>
<td><input type="text" name="salario mensual"></td>
</tr>
<tr>
<td><input type="submit" name="boton" value="calcular"></td>
<td></td>
</tr>
</table>




<?php


//conozco


//desconozco





//ejecucion
  $salud=$basico*004;			
					
	$pension=$basico*004;			
					
	$mensual=$basico-$salud-$pension+$bonificaciones;
		
					



//mostrar los resultados
echo "el  salario mensual es de:     "  . $mensual .    " neto  ";
	




?>





















</body>
</html>