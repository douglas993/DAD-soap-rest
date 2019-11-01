<?php
function soma ($numero1,$numero2) {
	return $numero1 + $numero2 ;
}
header ('Content-Type: text/xml;');
echo '<?xml version="1.0" encoding="iso-8859-1"?> ';
echo '<resultado >'.soma ( $_GET ['n1'], $_GET ['n2']).' </resultado >';
?>
