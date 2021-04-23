<?php 
class database{
    private $servername="localhost";
    private $username="root";
    private $password="";
    private $dbname="moviezone";
    protected $conn;

    public function open()
    {
        $conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if ($conn->connect_error) {
            echo "connection error".$conn2->connect_error;
        }
        else {
            echo "connection with database successful<br>";
        }
    
        return $conn;
    }
}

$obj=new database();









?>