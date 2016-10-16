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


$username = $data->username;
$emailaddress = $data->emailaddress;
$firstName = $data->firstName;
$lastName = $data->lastName;
$address = $data->address;
$city = $data->city;
$country = $data->country;
$postalCode = $data->postalCode;
$company = $data->company;
$password = $data->password;
$adminfullname= $firstName." ".$lastName;/** same field one data save so concat**/

$sql= "INSERT INTO admins SET admin_user='$username',admin_email='$emailaddress',
       admin_full_name='$adminfullname',admin_address='$address',
       admin_city='$city',admin_country='$country',postal_code='$postalCode',admin_company='$company',admin_password='$password'";
$result=  mysqli_query($con, $sql);

