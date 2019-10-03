<?php
include_once(__DIR__ . "/lib/Employee.php");
include_once(__DIR__ . "/lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");

$employee = new Employee();
$employee->deleteValue('JLS001');
//echo $employee->id;
$result=$employee->delete();

$format= new DataFormat();
//print_r($result);
 echo $format->asJSON($result);
 
 //$data = $employee->getAll();