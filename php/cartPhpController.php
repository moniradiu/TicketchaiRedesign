<?php 
include'../DBconnection/database_connections.php';

function utf8_encode_all($dat) // -- It returns $dat encoded to UTF8
{
  if (is_string($dat)) return utf8_encode($dat);
  if (!is_array($dat)) return $dat;
} 

//$sessionID = session_id();
$sessionID ="5";
$totalItemCount = 0;

$arrTmpCartBigItem = array();
$strTicketID = '';
$strIncludeID = '';
$strSeatID = '';
$totalCartAmount = 0;
$totalDiscount = 0; 
$sqlGetTmpCartItem = "
SELECT * FROM event_item_temp_cart 
WHERE EITC_session_id='5'
";
$resultGetTmpCartItem = mysqli_query($con, $sqlGetTmpCartItem);
if ($resultGetTmpCartItem) {
    while ($resultGetTmpCartItemObj = mysqli_fetch_object($resultGetTmpCartItem)) {
        $arrTmpCartBigItem[] = $resultGetTmpCartItemObj;
        $totalCartAmount += $resultGetTmpCartItemObj->EITC_total_price;
        $totalDiscount += $resultGetTmpCartItemObj->EITC_total_discount;
        $totalItemCount += $resultGetTmpCartItemObj->EITC_quantity;
        if ($resultGetTmpCartItemObj->EITC_item_type == 'ticket') {
            $strTicketID .= $resultGetTmpCartItemObj->EITC_item_id . ',';
        } elseif ($resultGetTmpCartItemObj->EITC_item_type == 'include') {
            $strIncludeID .= $resultGetTmpCartItemObj->EITC_item_id . ',';
        } elseif ($resultGetTmpCartItemObj->EITC_item_type == 'seat') {
            $strSeatID .= $resultGetTmpCartItemObj->EITC_item_id . ',';
        }
    }
} else {
    if (DEBUG) {
        echo "resultGetTmpCartItem error: " . mysqli_error($con);
    } else {
        echo "resultGetTmpCartItem query failed.";
    }
}

$strTicketID = trim($strTicketID, ',');
$strIncludeID = trim($strIncludeID, ',');
$strSeatID = trim($strSeatID, ',');

if ($strTicketID != "") {
    $arrCartSelectedTicket = array();
    $sqlGetSelectedTicket = "SELECT * FROM event_ticket_types "
            . "LEFT JOIN event_venues ON venue_id=TT_venue_id "
            . "LEFT JOIN events ON event_id=venue_event_id "
            . "WHERE TT_id IN ($strTicketID)";
    $resultGetSelectedTicket = mysqli_query($con, $sqlGetSelectedTicket);
    if ($resultGetSelectedTicket) {
        while ($resultGetSelectedTicketObj = mysqli_fetch_object($resultGetSelectedTicket)) {
            $arrCartSelectedTicket[$resultGetSelectedTicketObj->TT_id] = $resultGetSelectedTicketObj;
        }
    } else {
        if (DEBUG) {
            echo "resultGetSelectedTicket error: " . mysqli_error($con);
        } else {
            echo "resultGetSelectedTicket query failed.";
        }
    }
}


if ($strIncludeID != "") {
    $arrCartSelectedInclude = array();
    $sqlGetSelectedInclude = "SELECT * FROM event_includes "
            . "LEFT JOIN event_venues ON venue_id=EI_venue_id "
            . "LEFT JOIN events ON event_id=EI_event_id "
            . "WHERE EI_id IN ($strIncludeID)";
    $resultGetSelectedInclude = mysqli_query($con, $sqlGetSelectedInclude);
    if ($resultGetSelectedInclude) {
        while ($resultGetSelectedIncludeObj = mysqli_fetch_object($resultGetSelectedInclude)) {
            $arrCartSelectedInclude[$resultGetSelectedIncludeObj->EI_id] = $resultGetSelectedIncludeObj;
        }
    } else {
        if (DEBUG) {
            echo "resultGetSelectedInclude error: " . mysqli_error($con);
        } else {
            echo "resultGetSelectedInclude query failed.";
        }
    }
}

if ($strSeatID != "") {
    $arrCartSelectedSeat = array();
    $sqlGetSelectedSeat = "SELECT * FROM seat_place_coordinate "
            . "LEFT JOIN event_seat_plan ON ESP_template_id=SPC_id "
            . "LEFT JOIN event_venues ON venue_id=ESP_venue_id "
            . "LEFT JOIN events ON event_id=ESP_event_id "
            . "WHERE SPC_id IN ($strSeatID)";
    $resultGetSelectedSeat = mysqli_query($con, $sqlGetSelectedSeat);
    if ($resultGetSelectedSeat) {
        while ($resultGetSelectedSeatObj = mysqli_fetch_object($resultGetSelectedSeat)) {
            $arrCartSelectedSeat[$resultGetSelectedSeatObj->SPC_id] = $resultGetSelectedSeatObj;
        }
    } else {
        $checkStatus++;
        if (DEBUG) {
            echo "resultGetSelectedSeat error: " . mysqli_error($con);
        } else {
            echo "resultGetSelectedSeat query failed.";
        }
    }
}
echo json_encode(array_merge($arrTmpCartBigItem, $arrCartSelectedTicket ));
//echo json_encode($arrTmpCartBigItem);
	?>