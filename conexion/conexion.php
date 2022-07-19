<?php
class Conexion{
private $servername = "localhost:3306";
private $database = "wikicar";
private $username = "root";
private $password = "";
private $conn;

public function __construct(){
    $this->setConnection($this->servername,$this->database,$this->username,$this->password);
}

    public function setServerName($servername){
    $this->servername=$servername;}
    public function getServerName($servername){
        return $this->servername;}

    public function setDatabase($database){
        $this->database=$database;}
    public function getDatabase($database){
        return $this->database;}

    public function setUsername($username){
        $this->username=$username;}
    public function getUsername($username){
        return $this->username;}

    public function setPassword($password){
        $this->password=$password;}
    public function getPassword($password){
        return $this->password;}

    public function setConnection($servername,$database,$username,$password){
        $this->conn=mysqli_connect($servername, $username, $password, $database);
    
        if(!$this->conn){
            die("Conexion fallida: ". mysqli_connect_error());
        }}

    public function getConexion(){
        return $this->conn;
    }
    public function setClose($conn){
        mysqli_close($conn);
    }
}
?>