/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('checkout1Controller', function ($scope, $http) {
        $scope.cart1 = "Buy Tickets";
        $scope.cart2 = "Buy Includes";
        $scope.tab_1 = "Tickets";
        $scope.tab_2 = "About Event";
        $scope.tab_3 = "Venue";
        $scope.tab_4 = "Gallery";
        $scope.tab_5 = "T & C";
        $scope.frindship_text = "HAPPY FRIENDSHIP DAY";
        $scope.lebel_consert = "concert";
        $scope.btn_calender = "ADD To calender";
        $scope.calender_li1 = "Another action";
        $scope.calender_li2 = "Something else here";
        $scope.calender_li3 = "Separated link";
        $scope.calender_li4 = "One more separated link";
        $scope.btn_direction = "GET DIRECTION";
        $scope.calender_li1 = "Buy Tickets";
        $scope.cart_tblH1 = "Ticket";
        $scope.cart_tblH2 = "Quantity";
        $scope.cart_tblH3 = "Unit Price";
        $scope.cart_tblH4 = "Total Price";
        $scope.share_cDetail = "Share your Contact Details";
        $scope.payment_text = "Make Payment With";
        $scope.btn_payment1 = "Online Payment";
        $scope.btn_payment2 = "Cash On Delivery";
        $scope.btn_payment3 = "Bkash Payment";

        
        
         $http.get('php/checkout1PhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });
    });