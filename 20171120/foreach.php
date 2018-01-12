<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);
echo "<table><tr><th>Name</th><th>Stock</th><th>Sold</th></tr>";
foreach($data as $d){
    echo "<tr>";
    foreach($d as $da){
        echo "<td>{$da}</td>";
    }
    echo "<tr>";
}
echo "</table>";
?>