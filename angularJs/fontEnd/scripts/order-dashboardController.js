/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('order-dashboardController', function ($scope, $http) {

        $scope.m_i_1 = "Dashboard";
        $scope.m_i_2 = "Address";
        $scope.m_i_3 = "Favorite Event";
        $scope.m_i_4 = "Order";

        $scope.p1 = "My details";
        $scope.p2 = "First Name";
        $scope.p3 = "Last name";
        $scope.p4 = "Email";
        $scope.p5 = "Address";
        $scope.p6 = "Phone";
        $scope.p7 = "Postcode";
        $scope.p8 = "Update";
        $scope.p9 = "Settings";
        $scope.p10 = "Comments are enabled on My Events";
        $scope.p11 = "New Password";
        $scope.p12 = "Confirm Password";
        $scope.p13 = "Update";
        $scope.p14 = "Preferences";
        $scope.p15 = "I want to receive newsletter.";
        $scope.p16 = "I want to receive advice on buying and selling.";

        
        $http.get('php/order-dashboardPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });


    });