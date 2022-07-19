<?php

include("select.php");

$prueba = new BasicSelect("*", "user", "");
$result = $prueba->getBasicSelect();
echo "<table border>\n";

while($row = mysqli_fetch_row($result)){
    echo "<tr>\n";
    foreach($row as $field){
        echo "<td>$field</td>\n";
    }
    echo"</tr>\n";
}
echo "</table>\n";

?>