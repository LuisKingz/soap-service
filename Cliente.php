<?php
 
include_once('lib/nusoap.php');
    $msj = "Luis";
    $wsdl="http://localhost:7777/Servicio?wsdl";
    $client=new nusoap_client($wsdl,'wsdl');
    $param=array('arg0'=>$msj);
    $resultado = $client->call('devolverMensaje', $param);
    echo($resultado)
?>