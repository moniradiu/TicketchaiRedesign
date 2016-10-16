<?php 
include'../DBconnection/database_connections.php';

// $user_first_name = " ";
// $user_last_name = "";
// $user_phone = "";
// $user_street_address = "";
// $user_zip = "";
// $user_social_type = "";
$userInfo = array();

// if (/* !checkUserLogin() */true) {
//    // redirect('index.php');
// } else {
   // $userID = getSession('user_id');
    //$user_email = getSession('user_email');

    $userInfoQuery = "SELECT * FROM users WHERE user_id = '1' AND user_email = 'fakrulalam@gmail.com'";
    $userInfoResult = mysqli_query($con, $userInfoQuery);
    if ($userInfoResult) {
    	 while ($resultMoviedObj = mysqli_fetch_object($userInfoResult)) {
            $userInfo[] = $resultMoviedObj;
        }
        // $userInfo= mysqli_fetch_object($userInfoResult);
        // $user_first_name = $userInfo->user_first_name;
        // $user_last_name = $userInfo->user_last_name;
        // $user_phone = $userInfo->user_phone;
        // $user_street_address = $userInfo->user_street_address;
        // $user_zip = $userInfo->user_zip;
        // $user_social_type = $userInfo->user_social_type;
        // $user_verification = $userInfo->user_verification;
    } else {
        if (true) {
            $err = "userInfoResult error: " . mysqli_error($con);
        } else {
            $err = "userInfoResult query failed";
        }
    }
//}
    
print(json_encode($userInfo));
?>