<?php 


    error_reporting(E_ALL);
    ini_set('display_errors', 1);

header("Content-Type: application/json; charset=UTF-8");
include_once '../../config/database.php';
include_once '../../entities/executive.php';

$dbclass = new Database();
$connection = $dbclass->getConnection();

$executive = new executive($connection);
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];

echo json_encode($_POST['fullName']);

$stmt = $executive->create($connection,$fullName, $email, $number, $address, $pincode);
$response =  new stdClass();
?>