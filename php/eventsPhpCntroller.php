
<?php 
include'../DBconnection/database_connections.php';
$sql="SELECT * FROM wishlists";
$result=mysqli_query($con,$sql);
$arr=array();
while($row=mysqli_fetch_array($result)){
	$arr[]=$row;
}
print(json_encode($arr));
?>