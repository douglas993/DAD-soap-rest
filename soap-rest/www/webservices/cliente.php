<?php
// passando o endere�o do servidor
$client = new SoapClient(null, array(
	'location' => 'http://localhost/webservices/servidor.php',
	'uri' => 'http://localhost/webservices/servidor.php', 
	'trace' => 1));
// chamada do servi�o SOAP
$result[0] = $client->somar(array(8,2));
$result[1] = $client->subtrair(array(8,2));
$result[2] = $client->multiplicar(array(8,2));
$result[3] = $client->dividir(array(8,2));
var_dump($result);
			 
// verifica erros na execu��o do servi�o e exibe o resultado
if (is_soap_fault($result)){
	echo "Erro ao executar o WebServices!";
}else{
	echo "Resultado encontrado: A soma eh:  ". $result[0] . "<br />";
	echo "Resultado encontrado: A subtracao eh:  ". $result[1] . "<br />";
	echo "Resultado encontrado: A multiplicacao eh:  ". $result[2] . "<br />";
	echo "Resultado encontrado: A divisao eh:  ". $result[3] . "<br />";
}
?>

