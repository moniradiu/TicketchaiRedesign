<?php 
header('Content-type: application/json; charset=UTF-8');
include'../DBconnection/database_connections.php';
$sql = "SELECT
order_list.id,
order_list.order_id,
order_list.order_billing_phone, 
order_list.name, 
order_list.address, 
order_list.order_created,
order_list.order_status, 
order_list.order_payment_type, 
order_list.total,
order_items.OI_item_id 
FROM order_list INNER JOIN order_items
  ON order_list.id = order_items.OI_id 
        ";
        
$result=mysqli_query($con,$sql);

$arr=array();
while($row=mysqli_fetch_array($result)){
	$arr[]=$row;
}

function utf8_encode_all($dat) // -- It returns $dat encoded to UTF8
{
  if (is_string($dat)) return utf8_encode($dat);
  if (!is_array($dat)) return $dat;
  $ret = array();
  foreach($dat as $i=>$d) $ret[$i] = utf8_encode_all($d);
  return $ret;
} 
echo json_encode(utf8_encode_all($arr));

?>