<?php 

//data base connection
require_once 'connection.php';

$query_Sum = "SELECT SUM(hours) AS sum FROM record_hours;";
$ex_result = mysqli_query($conn, $query_Sum);

while($row = mysqli_fetch_assoc($ex_result)){
    $output = "Total es:"." ".$row['sum'];
}
    echo $output;

?>
