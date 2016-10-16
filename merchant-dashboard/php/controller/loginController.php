<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Including database connections start here
require_once '../../DBconnection/database_connections.php';
// Including database connections end here




/*Data convert by jeson start here*/
$data = json_decode(file_get_contents("php://input"));
/*./Data convert by jeson end here*/

$EmailAddress = $data->Emailaddress;
$Password = $data->password;
$Subscri = $data->Subscri;
print_r($data);