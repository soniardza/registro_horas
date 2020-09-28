<?php 

//data base connection
require_once 'connection.php';

$query_Sum = "SELECT SUM(hours) AS sum FROM record_hours;";
$ex_result = mysqli_query($conn, $query_Sum);

while($row = mysqli_fetch_assoc($ex_result)){
    $output = "El equivalente de horas en yuanes es:"." ".($row['sum']*25)." yuanes";
}

    echo $output;

?>
