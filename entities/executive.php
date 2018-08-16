<?php
class executive{

    // Connection instance
    private $connection;
 
    public function __construct($connection){
        $this->connection = $connection;
    }
    //C
    public function create($conn,$name, $email, $number, $address, $pincode){
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->address = $address;
        $this->pincode = $pincode;

        $query ="INSERT INTO `Executive Table`(`Name`, `MOB`, `EMAIL`, `Address`, `PIN`) VALUES ('$name','$number','$email','$address','$pincode')";

        $result = $conn->query($query);
        return $result;
    }
    //R
    public function read($conn){
        $query = "SELECT * FROM `Executive Table`";
        $result = $conn->query($query);
        echo json_encode($result);
        return $result;
    }
    //U
    public function update(){
        
    }
    //D
    public function delete(){}
}
?>