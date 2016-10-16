<?php 
include'../DBconnection/database_connections.php';

function utf8_encode_all($dat) // -- It returns $dat encoded to UTF8
{
  if (is_string($dat)) return utf8_encode($dat);
  if (!is_array($dat)) return $dat;
  $ret = array();
  foreach($dat as $i=>$d) $ret[$i] = utf8_encode_all($d);
  return $ret;
} 




$arrayUpcoming = array();
$sqlUpcome = "SELECT 
    events.event_id,
    events.event_title,
    events.event_category_id,
    events.event_web_logo, 
    events.event_web_banner, 
    events.event_is_free, 
    events.event_is_chairity, 
    events.event_is_featured, 
    events.event_status, 
    events.event_type_tag, 
    events.event_is_blockbuster, 
    event_movie_list.name, 
    event_movie_list.releasedate 
    FROM `events` 
    INNER JOIN `event_movie_list` ON 
    events.event_id = event_movie_list.id
    WHERE (events.event_is_featured='yes' AND events.event_status='active') OR events.event_status = 'info' OR events.event_id 
    IN (SELECT event_id FROM event_movie_list WHERE `status`='2' GROUP BY movie_id) ORDER BY events.event_featured_priority DESC 
     ";
$resultUpcome = mysqli_query($con, $sqlUpcome);
$chkresultUpcoming = mysqli_num_rows($resultUpcome);

if ($chkresultUpcoming > 0) {
    if ($resultUpcome) {
        while ($resultFeaturedObj = mysqli_fetch_object($resultUpcome)) {
            $arrayUpcoming[] = $resultFeaturedObj;
        }
    } else {
        if (true) {
            $err = "resultFeatured error: " . mysqli_error($con);
        } else {
            $err = "resultFeatured query failed.";
        }
    }
}
echo json_encode(utf8_encode_all($arrayUpcoming));
//echo json_encode(utf8_encode_all(array_merge($result1, $result2)));



?>