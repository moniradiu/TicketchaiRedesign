/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('event_ticketsController', function ($scope, $http) {
        $scope.promotion = "No offers and promotion found.";
        $scope.tab_one = "Tickets";
        $scope.tab_two = "About Event";
        $scope.tab_three = "Venue";
        $scope.tab_four = "Gallery";
        $scope.tab_fives = "T & C";
        $scope.checkout_heading = "New Checkout Test Event";
        $scope.btn_calender = "ADD TO CALENDAR";
        $scope.c_li1 = "Action";
        $scope.c_li2 = "Another action";
        $scope.c_li3 = "Something else here";
        $scope.c_li4 = "Separated link";
        $scope.c_li5 = "One more separated link";
        $scope.lebel_consert = "Concert";
        $scope.lebel_music = "Music";
        $scope.panel_h1 = "Event Tickets";
        $scope.panel_h2 = "Event Includes";
        $scope.tbl_h1 = "Ticket Type";
        $scope.tbl_h2 = "Quantity";
        $scope.tbl_h3 = "Price";
        $scope.tbl_h4 = "Action";

       
//        $http.get('php/event_ticketsPhpController.php')
//        .then(function(response) {
//             $scope.name= response.data;
//            
//         
//        });
        $http.post('php/event_ticketsPhpController.php',{"Price":$scope.Price}) .then(function(response) {
             $scope.name= response.data;
        
         console.log(name)
        });
        
    });
    
    