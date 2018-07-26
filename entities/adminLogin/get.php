<?php 


    error_reporting(E_ALL);
    ini_set('display_errors', 1);

header("Content-Type: application/json; charset=UTF-8");
include_once '../../config/database.php';
include_once '../../entities/admin-login.php';

$dbclass = new Database();
$connection = $dbclass->getConnection();

$adminLogin = new adminLogin($connection);
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$stmt = $adminLogin->read($connection,$username, $password);
$count = $stmt;

echo $username."  ".$password ;
if($count->num_rows > 0){
    $products = array();
    $products["body"] = array();
    $products["count"] = $count;
    $curPassword = '';
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    //     extract($row);
    //     $p  = array(
    //           "username" => $USERNAME,
    //           "password" => $Password,
    //     );

    //     array_push($products["body"], $p);
    // }

    while($row = $count->fetch_assoc()) {
                $curPassword =      $row["Password"];
    }
    
    if($password == $curPassword){  
        header("Content-type: application/json");
        $arr = array('message' => 'LoginSuccesfull'); //etc
        header('HTTP/1.1 201 Created');
        echo json_encode($arr);
    }
}

else {

    echo json_encode(
        array("body" => array(), "count" => 0)
    );
}
?>