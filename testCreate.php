<?php
include_once(__DIR__ . "/lib/Employee.php");
include_once(__DIR__ . "/lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");

$employee = new Employee();
$employee->setValue('JLS001','Jelas','Prakosojati','jelasprakoso@gmail.com','085698351283','2019-10-06','EMP001','1.500.000','500.000','MNG002','DPT003');
//echo $employee->id;
$result=$employee->create();

$format= new DataFormat();
//print_r($result);
 echo $format->asJSON($result);
 
 //$data = $employee->getAll();