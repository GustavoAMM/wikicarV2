<?php
include("conexion.php");

class BasicSelect extends Conexion{
    private $askedData;
    private $table;
    private $condition;
    private $result;
    private $query;
    private $connection;

    public function __construct ($askedData, $table, $condition){
        parent::__construct();
        $this -> createSelect($askedData, $table, $condition);
        $this -> executeSelect($this->query);

    }

    public function createSelect($askedData, $table, $condition){
        if($condition == ""){
            $this -> query = "SELECT " . $askedData . " FROM " . $table;
        }else{
            $this -> query = "SELECT " . $askedData . " FROM " . $table . " WHERE " . $condition;
        }
    }

    public function executeSelect($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }

    public function getBasicSelect(){
        return $this->result;
    }

}

?>