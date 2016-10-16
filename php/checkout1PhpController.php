<?php 
include'../DBconnection/database_connections.php';

$query = "SELECT * from wishlists";

$result = mysqli_query($con,$query);

$array = array();

while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
}

print(json_encode($array));

?>