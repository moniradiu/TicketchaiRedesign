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


//Wishlist start
   $arrayWishlist = array();
   $wishlistUserID = "284";
   $sqlWishlist = "SELECT
                  WL.WL_id,
                  WL.WL_created,
                  EV.event_id,
                  EV.event_title,
                  EV.event_web_logo,
                  EV.event_status,
                  EVE.venue_start_date,
                  EVE.venue_title,
                  (SELECT MIN(TT_current_price) FROM event_ticket_types WHERE TT_venue_id=venue_event_id) AS MinimumPrice,
                  (SELECT MAX(TT_current_price) FROM event_ticket_types WHERE TT_venue_id=venue_event_id) AS MaximumPrice                      From `wishlists` AS WL
                  LEFT JOIN events AS EV ON EV.event_id = WL.WL_product_id LEFT JOIN event_venues AS EVE ON EVE.venue_event_id = EV.event_id
                  WHERE WL.WL_user_id = $wishlistUserID 
                  ";
//                  ORDER BY WL.WL_created
   
   $resultWishlist = mysqli_query($con, $sqlWishlist);
   if($resultWishlist){
       while($resultWishlistObj = mysqli_fetch_object($resultWishlist)){
           $arrayWishlist[] = $resultWishlistObj;
       }
   } else {
         if (TRUE) {
             echo "resultGetFavorite error: " . mysqli_error($con);
         } else {
             echo "resultGetFavorite query failed.";
         }
     }


//    echo json_encode(utf8_encode_all($arrFavorite));
    echo json_encode(utf8_encode_all($arrayWishlist));
    
    
    
    @$data = json_decode(file_get_contents("php://input")); 
 @$id=$data->del_id;
if ($id !=0) {
	$query = "DELETE FROM wishlists WHERE WL_id=$id";
	mysqli_query($con, $query);
	echo "Delete successfully";
}
//Wishlist end
    
    
    


?>