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
echo json_encode(utf8_encode_all($arrayTestimonialGal));
//echo json_encode(utf8_encode_all(array_merge($result1, $result2)));



?>