/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('orderController', function ($scope, $http) {

        $scope.m_i_1 = "Dashboard";
        $scope.m_i_2 = "Address";
        $scope.m_i_3 = "Favorite Event";
        $scope.m_i_4 = "Order";

        $scope.title = " Order List ";

        $scope.p1 = "Order ID";
        $scope.p2 = "No. of items";
        $scope.p3 = "Invoice";
        $scope.p4 = "Payment Method";
        $scope.p5 = "Status";
        
        $scope.p6 = "Done";
        $scope.p7 = "Price: ";
        $scope.p8 = "Date: ";
        $scope.p9 = "Address: ";
        $scope.p10 = "Phone: ";
        $scope.p11 = "Action";
        $scope.buy_ticket="Buy Ticket";

        $http.get('php/orderPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });
    });