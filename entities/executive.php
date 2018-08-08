<?php
class adminLogin{

    // Connection instance
    private $connection;
 
    public function __construct($connection){
        $this->connection = $connection;
    }
    //C
    public function create(){
    }
    //R
    public function read($conn,$executiveId){
        $this->executiveId = $executiveId;
        $query = "SELECT * FROM `Executive Table` WHERE `EID` = '".$executiveId."'";
        $result = $conn->query($query);
        return $result;
    }
    //U
    public function update(){
        
    }
    //D
    public function delete(){}
}