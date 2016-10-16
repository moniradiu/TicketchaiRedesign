<?php 
include'../DBconnection/database_connections.php';
 $user=json_decode(file_get_contents('php://input'));
 echo json_encode($user->Price);
function utf8_encode_all($data){
    if(is_string($data)){
        return utf8_encode($data);
    }
    if(!is_string($data)){
        return $data;
    }
    $slice =array();
    foreach($data as $i => $d){
        $slice[$i] = utf8_encode_all($d);
        return $slice;
    }
}



$arrayFeatured = array();
$sql = "SELECT events.event_id,
       events.event_title,   
       events.event_status,   
       events.event_web_banner from events 
       WHERE events.event_id = 26 AND events.event_status = 'active'  
       ";
$result = mysqli_query($con, $sql);
   if($result){
       while($resultobj = mysqli_fetch_object($result)){
           $arrayFeatured[] = $resultobj;
       }
   }else {
        if (true) {
            $err = "resultFeatured error: " . mysqli_error($con);
        } else {
            $err = "resultFeatured query failed.";
        }
    }

//print json_encode(utf8_encode_all($arrayFeatured));
?>