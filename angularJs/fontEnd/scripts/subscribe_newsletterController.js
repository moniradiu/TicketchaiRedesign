/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('subscribe_newsletterController', function ($scope, $http) {
        $scope.title = "Not Subscribed Our Weekly Newsletter Yet ?";
        $scope.p1 = "Let's Subscribe And Stay Tuned For Exciting Events !";
        $scope.label = "Email";
        $scope.button = "Subscribe";
        $scope.p2 = " Already Subscribed?";
        $scope.p3 = "Unsubscribe";

        
        $http.get('php/subscribe_newsletterPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });