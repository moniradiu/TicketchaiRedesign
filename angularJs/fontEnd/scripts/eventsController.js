/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. "http://www.w3schools.com/angular/customers.php"
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('eventsController', function ($scope, $http) {
        $scope.events_title = "Hottest events specially selected just for you!";
        $scope.buyTickets = "Buy Tickets Shortly";
        $scope.buy_eventTickets = "Buy Event Tickets Shortly";
        $scope.pnael_title = "Featured";
        $scope.pnael_titleStrong = " Events";
        $scope.btn_buy = "Buy Ticket";
        $scope.map = "DHAKA";
        $scope.more_info = "More Info";
        $scope.addTo_wishlist = "Add To Wishlist";
        $scope.btn_viewAllFeture = "View All Featured Events";
        $scope.pnael2_title = "Upcoming";
        $scope.pnael2_titleStrong = " Events";
        $scope.up_commingEvents = "Some awesome events waiting to go live soon!";
        $scope.pnael3_title = "Covered";
        $scope.pnael3_titleStrong = " Events";
        $scope.panel3_text = "Some Successful Events Hosted Through Our Platform !";

      
         $http.get('php/eventsPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });