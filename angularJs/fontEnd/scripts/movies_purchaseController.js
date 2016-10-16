/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('movies_purchaseController', function ($scope, $http) {
        $scope.movieHeading = "Showing Now On ";
        $scope.movieHeading_span = " Blockbuster Cinemas";
        $scope.booking_tickets = "Please Start Booking Tickets Here !";
        $scope.request_date = "Current Requested Date: ";
        $scope.select_date = "Please select a date :";
        $scope.tbl_H1 = "SL";
        $scope.tbl_H2 = "THEATRE";
        $scope.tbl_H3 = "TIME";
        $scope.tbl_H4 = "TICKET";
        $scope.backTo_moviePage = "Get Back To All Movies Page";
        $scope.ticket_details = "Ticket";
        $scope.ticket_detailsSpan = "Detail";
        $scope.ticket_detailsText = "Your Ticket Details Here !";
        $scope.get_tickets = "Get Ticket";
        $scope.tickets_type = "Ticket Type";
        $scope.tickets_price = "Ticket Price";
        $scope.tickets_quantity = "Quantity";
        $scope.tickets_amount = "Ticket Amount";
        $scope.tickets_APIcharge = "API Charge";
        $scope.tickets_deliveryCharge = "Delivery Charge";
        $scope.tickets_Tamount = "Total Amount";
        $scope.seat_num = "Seat Number";
        $scope.seat_holdTime = "Seat Hold Time";

        
        $http.get('php/movies_purchasePhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });