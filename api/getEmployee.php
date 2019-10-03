<?php
include_once(__DIR__ . "/../lib/Employee.php");
include_once(__DIR__ . "/../lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
error_reporting(E_ALL ^ E_NOTICE);

$employee = new Employee();

if(isset($_GET['id'])){
    $data=$employee->getEmployee($_GET['id']);
} else {
    $data=$employee->getAll();
}
$format = new DataFormat();

if ($_GET['view']=='xml'){
	
	header("Content-Type: application/xml; charset=utf-8");
	echo $format->asXML($data,'Employee');
} else if ($_GET['view']=='json'){
	header("Content-Type: application/json");
	echo $format->asJSON($data);
} else {
	echo $format->asHTML($data);
}