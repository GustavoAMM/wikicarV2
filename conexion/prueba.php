<?php
include("queries.php");

$pruebaInsert = new BasicInsert(" ('', 'Raul', 'Alvares', 'rraull', 'raulito@gmail.com', 'M')", "user", "");
$result = $pruebaInsert->getBasicInsert();

$prueba = new BasicSelect("User_name, Id_user", "user", "");
$result = $prueba->getBasicSelect();

echo "<form >";
echo '<select name="name" id="">';
echo "<option> Seleccionar </option>\n";

while($row = mysqli_fetch_row($result)){
    foreach($row as $field){
        echo "<option>$field</option>\n";
    }
}

echo "</select>";
echo "</form>";


?>