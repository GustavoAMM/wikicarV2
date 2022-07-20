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
            $this -> query = "SELECT $askedData FROM  $table";
        }else{
            $this -> query = "SELECT $askedData  FROM  $table WHERE $condition";
        }
    }

    public function executeSelect($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }

    public function getBasicSelect(){
        return $this->result;
    }
}


class BasicInsert extends Conexion{
    private $values;
    private $table;
    private $askedValues;
    private $result;
    private $query;
    private $connection;

    public function __construct ($values, $table, $askedValues){
        parent::__construct();
        $this -> createInsert($values, $table, $askedValues);
        $this -> executeInsert($this->query);

    }

    public function createInsert($values, $table, $askedValues){
        if($askedValues == ""){
            $this -> query = "INSERT INTO $table VALUES $values;";
            echo "Hecho";
        }else{
            $this -> query = "INSERT INTO $table($askedValues) VALUES $values;";
            echo "Hecho";
        }
    }

    public function executeInsert($query){
        $this -> result = mysqli_query($this->getConexion(),$query);
    }

    public function getBasicInsert(){
        return $this->result;
    }

}

?>