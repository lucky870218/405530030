<?php
    $data=array(
        "first"=>array("Volvo",22,18),
        "second"=>array("BMW",15,13),
        "third"=>array("Saab",5,2),
        "forth"=>array("Land Rover",17,15)
    );
?>


<table border="1" width='250'>            
<tr>
    <th>Name</th>
    <th>Stock</th>
    <th>Sold</th>
</tr>
<?php

$keys=array_keys($data);
for($i=0;$i<count($keys);$i++){
    $key=$keys[$i];
    $row=$data[$key];
    echo "<tr>";
    for ($a=0; $a<count($row); $a++) {
        $col=$row[$a];
        echo "<td>$col</td>";
    }
    echo "</tr>";
}

?>       
</table>

<br>

<table border="1" width='250'>
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php
    foreach($data as $row){
        echo "<tr>";
        foreach($row as $col){
            echo "<td>$col</td>";
        }
        echo "<tr>";            
    }
    ?>
</table>

<br>

<?php
function parseRow($row)
{
    $row=join(array_map("parseCol", $row));
    return "<tr>$row</tr>";
}
function parseCol($col)
{
    return "<td>$col</td>";
}
$table=join("", array_map("parseRow", $data));
?>

<table border="1" width='250'>
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php echo $table; ?> 
</table>