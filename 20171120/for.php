<?php

$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);

echo "<table>
<tr>
<th>Name</th>
<th>Stock</th>
<th>Sold</th>
</tr>";
for ($i=0; $i<count($data, 0); $i++)
{
    echo '<tr>';
    for ($j=0; $j<3; $j++)
    {
        echo '<td>'.$data[$i][$j].'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>