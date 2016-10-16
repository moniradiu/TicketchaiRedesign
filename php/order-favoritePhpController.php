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

$wlistUserID = "2";
$arrFavorite = array();
if (1==true) {
    //$wlistUserID = getSession('user_id');
    $sqlGetFavorite = "SELECT WL_id,event_id,event_title,event_web_logo,venue_start_date,venue_title,event_status, "
            . "(SELECT MIN(TT_current_price) FROM event_ticket_types WHERE TT_venue_id=venue_event_id) AS MinimumPrice, "
            . "(SELECT MAX(TT_current_price) FROM event_ticket_types WHERE TT_venue_id=venue_event_id) AS MaximumPrice "
            . "FROM wishlists "
            . "LEFT JOIN events ON event_id=WL_product_id "
            . "LEFT JOIN event_venues ON venue_event_id=event_id "
            . "WHERE WL_user_id=$wlistUserID ";
    $resultGetFavorite = mysqli_query($con, $sqlGetFavorite);

    if ($resultGetFavorite) {
        while ($resultGetFavoriteObj = mysqli_fetch_object($resultGetFavorite)) {
            $arrFavorite[] = $resultGetFavoriteObj;
        }
    } else {
        if ($resultGetFavorite==0) {
            echo "resultGetFavorite error: " . mysqli_error($con);
        } else {
            echo "resultGetFavorite query failed.";
        }
    }
}


echo json_encode(utf8_encode_all($arrFavorite));


@$data = json_decode(file_get_contents("php://input")); 
 @$id=$data->del_id;
if ($id !=0) {
	$query = "DELETE FROM wishlists WHERE WL_id=$id";
	mysqli_query($con, $query);
	echo "Delete successfully";
}


//Wishlist end
?>