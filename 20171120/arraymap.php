<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);

function zz($var) {
    echo '<tr><td>'.$var[0].'</td><td>'.$var[1].'</td><td>'.$var[2].'</td></tr>';
}


echo "<table>
<tr>
<th>Name</th>
<th>Stock</th>
<th>Sold</th>
</tr>";


$data2=array_map("zz",$data);

$result=join("",$data2);

echo $result;


echo "</table>";
?>