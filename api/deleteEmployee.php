<?php
include_once(__DIR__ . "/../lib/Employee.php");
include_once(__DIR__ . "/../lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//error_reporting(E_ALL ^ E_NOTICE);

$employee = new Employee();
$employee->setValue($_DELETE['employee_id']);
$result = $employee->delete();
$format = new DataFormat();
echo $format->asJSON($result);