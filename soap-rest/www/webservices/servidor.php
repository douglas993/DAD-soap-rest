<?php

//definicao dos servi�os
function somar($args){
	return $args[0] + $args[1];	
}
function subtrair($args){
	return $args[0] - $args[1];	
}
function multiplicar($args){
	return $args[0] * $args[1];	
}
function dividir($args){
	if($args[1]==0) 
		return  $args[0] / $args[1];
	else return 0 ;	
}

//cria��o de uma instancia do servidor (coloque o endere�o na sua maquina local)
$server = new SoapServer(null, array('uri' => "http://localhost/webservices"));

//registro dos servicos
$server->addFunction("somar");
$server->addFunction("subtrair");
$server->addFunction("multiplicar");
$server->addFunction("dividir");

// chamada do m�todo para atender as requisi��o dos servicos 
// se a chamada for um POST executa, sen�o apenas mostra as funcoes 'cadastradas'
if ($_SERVER["REQUEST_METHOD"]== "POST") {
		$server->handle();		
} else {
	$functions = $server->getFunctions();
	foreach ($functions as $func) {
		print $func. "<br>";
	}
}
?>
