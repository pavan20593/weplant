<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "we_plant";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
        
        $this->conn = null;
 
        // try{
        //     $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        //     $this->conn->exec("set names utf8");
          
        // }catch(PDOException $exception){
        //     echo "Connection error: " . $exception->getMessage();
        // }

        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
        if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
 
        return $this->conn;
    }
}
?>