//El dueño de una tienda compra un artículo a un precio determinado. Obtener el 
precio en que lo debe vender para obtener una utilidad del 30%.

<?php
$precio_compra = 100;
$utilidad = 0.3;
$precio_venta = $precio_compra + ($precio_compra * $utilidad);
echo "El precio de venta es: " . $precio_venta;
?>