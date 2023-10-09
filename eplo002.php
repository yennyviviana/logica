


<form method="post">
<input type="number" name="cantidad" required="required"placeholder="cantidad"><br>
<input type="submit" name="boton" value="Enviar cantidad">




</form>


<?php

//conozco

$Vreal= 50000;
$Vpromocion= 30000;


//desconozco

if(isset($_POST['boton'])){
$cantidad = $_POST['cantidad'];


//ejecucion

if(cantidad >= 2) {
	$total= $Vpromocion * $cantidad;
	
	}else {
		$total= $Vreal* $cantidad;
		
}	
		
		
	//mostrar los resultados
	
		
		echo "el cliente llevo " . $cantidad . " camisas <br>" ;
		echo  "el cliente pago un total de  $" .$total  .  "00" ;
		
	
	
	
	
	
	
	
	
?>