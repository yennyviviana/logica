
<form method="post">
<input type="number" name="valor" required="required"placeholder="total"><br>
<input type="submit" name="boton" value="Calcular">


</form>

<?php

$cantidad=$_POST['valor'];

//conozco

$producto=$manzanas;
$valor_docena= 10000;
$valor_unitario= 1000;


//desconozco

if(isset($_POST['boton'])){
$cantidad = $_POST['calcular'];



//averiguar si es una docena
$cantidad_docena=$cantidad/12;

$entero= $floor ($cantidad_doc);

$residuo= $cantidad%12;




//ejecucion

if($residuo) {

$total=$cantidad_docena=$valor_docena;


}else {
	$total=$cantidad=$valor_unitario;
	
	} 
	
	//mostrar los resultados
	
	echo "el cliente llevo ". $cantidad . " manzanas <br>";
	echo "el cliente pago     "  . $total .    " residuo   ";
	


?>