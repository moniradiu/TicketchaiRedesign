<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Including database connections start here
require_once '../../DBconnection/database_connections.php';
// Including database connections end here
$TicketName ="";
$MinQty ="";
$MaxQty ="";
$TicketType ="";
$T_Currency ="";
$Price ="";
$T_ability ="";
$T_tictfee ="";
$T_begiDate ="";
$T_finishDate ="";
$T_topTime ="";
$T_murderTime ="";
$TicketDescription ="";
$MessageToAttendee ="";


$data = json_decode(file_get_contents("php://input"));

$TicketName = $data->TicketName;
$Qty = $data->Qty;
$MinQty = $data->MinQty;
$MaxQty = $data->MaxQty;
$TicketType = $data->TicketType;
$T_Currency = $data->Currency;
$Price = $data->Price;
$T_ability = $data->Availability;
$T_tictfee = $data->WhowillpayTicketchaifee;
$T_begiDate = $data->StartDate;
$T_finishDate = $data->EndDate;
$T_topTime = $data->StartTime;
$T_murderTime = $data->EndTime;
$TicketDescription = $data->TicketDescription;
$MessageToAttendee = $data->MessageToAttendee;


//print_r($_POST); //(all data show of console)
//echo $TicketName$;(single data show of console)
$sql = "INSERT INTO event_ticket_types (TT_type_title,TT_ticket_quantity,TTmin_quantity,TT_per_user_limit,TT_type_id,TT_currency,TT_price,TT_availability,TT_WhowillpayTicketchaifee,TT_startDate,TT_endDate,TT_startTime,TT_endTime,TT_type_description,TT_MessageToAttendee) VALUES ('$TicketName','$Qty','$MinQty','$MaxQty',
         '$TicketType','$T_Currency','$Price','$T_ability','$T_tictfee','$T_begiDate','$T_finishDate','$T_topTime','$T_murderTime',
         '$TicketDescription','$MessageToAttendee')";

$result = mysqli_query($con, $sql);
