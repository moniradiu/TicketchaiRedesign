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


/*Data encoding start here*/
/*1st step working data submit start here*/
//$EventName =$data->EventName;
//$EventURL =$data->EventURL;
//$EventCategory =$data->EventCategory;
//$EventSubCategory =$data->EventSubCategory;
//$EventType =$data->EventType;
//$OrganizedBy =$data->OrganizedBy;/*1st step working data submit end here*/
//
///*2nd step working data submit start here*/
//$StartDate =$data->StartDate;
//$StartTime =$data->StartTime;
//$EndDate =$data->EndDate;
//$EndTime =$data->EndTime;/*2st step working data submit end here*/
//
///*3rd step working data submit start here*/
//$NameOfVenue =$data->NameOfVenue;
//$StreetLine1 =$data->StreetLine1;
//$StreetLine2 =$data->StreetLine2;
//$CityFrom =$data->CityFrom;
//$CountryFiled =$data->CountryFiled;/*3rd step working data submit end here*/
//
///*4th step working data submit start here*/
///* @var $data type */
//$EventDescription =$data->EventDescription;
//$EventTags =$data->EventTags;
//$PaymentGatewayAndServiceCharge =$data->PaymentGatewayAndServiceCharge;
//$ChangetheLabel =$data->ChangetheLabel;/*4th step working data submit end here*/
//
//
///*Data encoding end here*/
//
//echo $sql="INSERT INTO events SET event_title='$EventName',event_url='$EventURL',event_category_id='$EventCategory',eventSub_category='$EventSubCategory',event_type='$EventType',organized_by='$OrganizedBy',event_created_on='$StartDate $StartTime',event_created_end='$EndDate $EndTime',name_of_venue='$NameOfVenue',streetLine1='$StreetLine1',streetLine2='$StreetLine2',city_from='$CityFrom',country_filed='$CountryFiled',
//        event_description='$EventDescription',event_tag='$EventTags',payment_servicecge='$PaymentGatewayAndServiceCharge',change_Label='$ChangetheLabel'";
//       
//  
//$result=mysqli_query($con, $sql);
	if (!empty( $_FILES ) ) { 
	    $tempPath = $_FILES[ 'file' ][ 'tmp_name' ]; 
	    $uploadPath = "uploads/".$_FILES[ 'file' ][ 'name' ]; 
            move_uploaded_file($tempPath, $uploadPath); 
 	} else { 
	    echo "Error occurred!";
	} 