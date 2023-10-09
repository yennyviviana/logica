<?php require_once('clases.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>


<?php
//crear el objeto
   $suzuki=new auto(4,5,7);  
   $renault=new auto(6,4,5);
   
  
 
 ?>

<h4>El kilometraje por galon es:<?php echo $suzuki->km_g; ?></h4>
<table border="1" width="400" cellspacing="0">
<tr>
<td>No llantas</td>
<td><?php echo $suzuki->no_llantas;?> </td>
</tr>
<tr>
<td>No puertas</td>
<td><?php echo $suzuki->no_puertas;?> </td>
</tr>
<tr>
<td>No pasajeros</td>
<td><?php echo $suzuki->no_pasajeros;?> </td>
</tr>
<tr>
<td>Modelo</td>
<td><?php echo $suzuki->modelo;?> </td>
</tr>
<tr>
<td>color</td>
<td><?php echo $suzuki->color;?> </td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>



</body>
</html>