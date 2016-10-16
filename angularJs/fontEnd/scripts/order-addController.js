/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('order_addController', function ($scope, $http) {

        $scope.m_i_1 = "Dashboard";
        $scope.m_i_2 = "Address";
        $scope.m_i_3 = "Favorite Event";
        $scope.m_i_4 = "Order";


        $scope.p1 = "Edit";
        $scope.p2 = "Delete";
        $scope.p3 = "Default Delivery ";
        $scope.p4 = "Default Billing ";
        $scope.p5 = "ADD ADDRESS";
        $scope.p6 = "Phone:";
        $scope.p7 = "Address:";
        $scope.p8 = "Zip/Postal Code:";
        $scope.p9 = "Area:";
        $scope.p10 = "City:";
        $scope.p11 = "Country:";
        $scope.p12 = "Save";
        $scope.p13 = "Add New Address";


        
        
        $http.get('php/order-addPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });
    });