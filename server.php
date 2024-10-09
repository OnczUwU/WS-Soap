<?php
ini_set("soap.wsdl_cache_enable","0");
require_once("Departamento.php");
$opstions = ['uri'=>'urn:departamento','soap_version'=> SOAP_1_2, 'encoding' => 'UFT-8'];
$server->setClass("Departamento");
$server->handle();
?>