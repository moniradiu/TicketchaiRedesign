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
echo json_encode(utf8_encode_all($arrayClient));
//echo json_encode(utf8_encode_all(array_merge($result1, $result2)));



?>