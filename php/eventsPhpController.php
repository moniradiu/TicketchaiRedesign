<?php 
header('Content-type: application/json; charset=UTF-8');
include'../DBconnection/database_connections.php';
$sql = "SELECT
events.event_id,
events.event_title, 
events.event_web_banner, 
event_venues.venue_title, 
event_venues.venue_valid_from,
event_venues.venue_valid_till, 
event_venues.venue_start_date, 
event_venues.venue_end_time 
FROM events INNER JOIN event_venues
  ON events.event_id = event_venues.venue_id ORDER BY event_id DESC
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