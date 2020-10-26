<?php 


    error_reporting(E_ALL);
    ini_set('display_errors', 1);

header("Content-Type: application/json; charset=UTF-8");
include_once '../../config/database.php';
include_once '../../entities/executive.php';

$dbclass = new Database();
$connection = $dbclass->getConnection();

$executive = new executive($connection);
$executiveResponse = $executive->read($connection);
 $response =  new stdClass();
if($executiveResponse){
        $response = $executiveResponse; 
    } 

else {

   $response->success = false;
        echo json_encode($response);
}
?>