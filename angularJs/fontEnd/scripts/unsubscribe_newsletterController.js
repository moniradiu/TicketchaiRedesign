/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('unsubscribe_newsletterController', function ($scope, $http) {

        $scope.title = " Bored Of Our Weekly Newsletters ?";
        $scope.p1 = " Let's Unubscribe And Keep Smiling !";
        $scope.label = "Email";
        $scope.button = "Unsubscribe";
        $scope.p2 = "Not Subscribed Yet?";
        $scope.p3 = " Subscribe";


//        $http.post("php/unsubscribe_newsletterPhpController.php").success(function (data) {
//            $scope.name = data;
//        });

        $http.get('php/unsubscribe_newsletterPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });