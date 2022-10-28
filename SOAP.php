<?php
	include_once('lib/nusoap.php');
	$servicio = new soap_server();

	$servicio->configureWSDL("MiServicio");
	$servicio->register("devolverMensaje",
		 array('val' => 'xsd:int'),
		 array('return' => 'xsd:string'),
		 "http://localhost/mensajes",
		 "http://localhost/mensaje#devolverMensaje",
		 "rpc",
		 "literal",
		 "mensaje");

	function devolverMensaje($val){

		if ($val == 1) {
				$resultado =  utf8_decode("bienvenido a tu televisión Zanzung"); 
		}else{
				$resultado =  utf8_decode("Apagando televisión Zanzung"); 
		}
		
		return $resultado;
	}

	$servicio->service(file_get_contents("php://input"));
?>