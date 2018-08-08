<?php
class adminLogin{

    // Connection instance
    private $connection;

    // table name
    private $table_name = "Admin Table";

    // table columns
    public $USERNAME;
    public $Password;
    
    public function __construct($connection){
        $this->connection = $connection;
    }
    //C
    public function create(){
    }
    //R
    public function read($conn,$username, $password){
        $this->username = $username;
        $this->password = $password;
        // $query = "SELECT Password as password FROM" . $this->table_name . "WHERE USERNAME=".$this->username;
        $query = "SELECT * FROM `Admin Table` WHERE `USERNAME` = '".$username."'";
        // $stmt = $this->connection->prepare($query);
        // $stmt->execute();
        // return $stmt;

        $result = $conn->query($query);
        // if ($result) {
        //   
        //     while($row = $result->fetch_assoc()) {
        //         return json_encode($row);
        //     }
        // } else {
        //     return  "0 results";
        // }
        return $result;
        
    }
    //U
    public function update(){}
    //D
    public function delete(){}
}