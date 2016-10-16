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

// Featured Event Start
$arrayFeatured = array();
$sqlFeatured = "SELECT events.event_id,
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
    event_venues.venue_start_time,
    event_venues.venue_end_time,
    event_venues.venue_start_date,
	event_venues.venue_end_date
    FROM events INNER JOIN event_venues
 	ON events.event_id = event_venues.venue_id 
    WHERE (events.event_is_featured='yes' AND events.event_status='active') OR events.event_status = 'info' OR events.event_id IN (SELECT event_id FROM event_movie_list WHERE `status`='1' GROUP BY movie_id) ORDER BY events.event_featured_priority DESC LIMIT 16

     ";
$resultFeatured = mysqli_query($con, $sqlFeatured);
    if ($resultFeatured) {
        while ($resultFeaturedObj = mysqli_fetch_object($resultFeatured)) {
            $arrayFeatured[] = $resultFeaturedObj;
        }
    } else {
        if (true) {
            $err = "resultFeatured error: " . mysqli_error($con);
        } else {
            $err = "resultFeatured query failed.";
        }
    }



/* Featured Event Start
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
	IN (SELECT event_id FROM event_movie_list WHERE `status`='1' GROUP BY movie_id) ORDER BY events.event_featured_priority DESC 
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

$arrayClient = array();
$sqlClient="SELECT clients_id, clients_name, clients_image FROM clients GROUP BY clients_id";
$resultClient = mysqli_query($con, $sqlClient);
$chkresultClient = mysqli_num_rows($resultClient);

if ($chkresultClient > 0) {
    if ($resultClient) {
        while ($resultClientObj = mysqli_fetch_object($resultClient)) {
            $arrayClient[] = $resultClientObj;
        }
    } else {
        if (true) {
            $err = "resultFeatured error: " . mysqli_error($con);
        } else {
            $err = "resultFeatured query failed.";
        }
    }
}



$arrayTestimonialGal = array();
$sqltestimoniaGall = "SELECT 
                mt.id,
                mt.merchant_id,
                mt.title,
                mt.photo,
                mt.testimonial_des,
                clients.clients_name
                FROM merchant_testimonial as mt
                LEFT JOIN clients ON clients.clients_id = mt.merchant_id
                ORDER BY mt.id DESC";
$resultTestimonial = mysqli_query($con, $sqltestimoniaGall);
if ($resultTestimonial) {
    while ($resultTestimonialObj = mysqli_fetch_object($resultTestimonial)) {
        $arrayTestimonialGal[] = $resultTestimonialObj;
    }
} else {
    
        echo "TestimonialGallery error: " . mysqli_error($con);
    
}

*/
//$result1= array_merge($arrayFeatured, $arrayUpcoming);
//$result2= array_merge($arrayClient, $arrayTestimonialGal);

 //echo "<pre>";
  //print_r($arrayClient);
echo json_encode(utf8_encode_all($arrayFeatured));
//echo json_encode(utf8_encode_all(array_merge($result1, $result2)));



?>