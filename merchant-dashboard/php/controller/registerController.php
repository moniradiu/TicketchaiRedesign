<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Including database connections start here
require_once '../../DBconnection/database_connections.php';
// Including database connections end here


/* Data convert by jeson start here */
$data = json_decode(file_get_contents("php://input"));
/* ./Data convert by jeson end here */

$firstName = $data->firstName;
$lastName = $data->lastName;
$email = $data->email;
$urAddress= $data->yourAddress;
$password = $data->password;
$confirmPassword = $data->confirmPassword;
$phoneMobileNo = $data->phoneMobileNo;
$CaptchaCode = $data->CaptchaCode;
//$adminName = $firstName." ".$lastName;/** same field one data save so concat**/

echo $sql="INSERT INTO merchant_info SET MI_first_name='$firstName',MI_last_name='$lastName',MI_email_address='$email',	MI_address='$urAddress',
      MI_password='$password',MI_confirmPassword='$confirmPassword',MI_number='$phoneMobileNo',	MI_post_code='$CaptchaCode'";

$result=  mysqli_query($con, $sql);