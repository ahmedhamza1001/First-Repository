<?php


$server="localhost";
$username="root";
$password="";
$db_name="sales";

$conn=mysqli_connect($server,$username,$password,$db_name);


class connection 
{ 
    private $server;
    private $username;
    private $password;
    private $db_name;

    protected function connectt()
    { 
        $this->server="localhost";
        $this->username="root";
        $this->password="";
        $this->db_name="sales";

        $conn = new mysqli($this->server,$this->username,$this->password,$this->db_name);
        return $conn;
    }
}