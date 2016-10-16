<?php 
include'../DBconnection/database_connections.php';
$UA_first_name = "";
$UA_last_name = "";
$UA_phone = "";
$UA_title = "";
$UA_address = "";
$UA_zip = "";
$UA_country_id = "";
$UA_city_id = "";
$UA_user_id = "";
$defaultShipping = 0;
$defaultBilling = 0;

//if (!checkUserLogin()) {
//    redirect('index.php');
//} else {
   // $userID = getSession('user_id');
   $userID = 2;
    //$user_email = getSession('user_email');
//}
$userAddress = array();
$userAddressSql = "SELECT user_addresses.*, countries.country_name, cities.city_name FROM user_addresses LEFT JOIN countries ON user_addresses.UA_country_id = countries.country_id LEFT JOIN cities ON user_addresses.UA_city_id = cities.city_id WHERE UA_user_id = $userID ORDER BY user_addresses.UA_id DESC";
$userAddressResult = mysqli_query($con, $userAddressSql);
$countUserAddress = mysqli_num_rows($userAddressResult);
if ($countUserAddress > 0) {
    while ($rowAddress = mysqli_fetch_object($userAddressResult)) {
        $userAddress[] = $rowAddress;
    }
}
print(json_encode($userAddress));
?>