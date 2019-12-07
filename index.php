<?php
ini_set('display_errors', 1); 
error_reporting (-1); 
include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'batina/LineUr.php';
include_once 'batina/KvadrUr.php';
include_once 'batina/BatinaException.php';
include_once 'batina/MyLog.php';

$arr=array();

batina\MyLog::log('Version '.file_get_contents('./version'));

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new batina\KvadrUr();
    batina\MyLog::log("Roots: " . implode(", ", $solver->solve($arr[0], $arr[1], $arr[2])));
}catch(batina\BatinaException $e) {

    batina\MyLog::log($e->getMessage());
}
batina\MyLog::write();
