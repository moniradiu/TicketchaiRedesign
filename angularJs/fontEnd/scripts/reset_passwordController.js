/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('reset_passwordController', function ($scope, $http) {
        $scope.title = "Forgot your password ?";

        $scope.des = "Let's Recover It Quickly And Start Again";
        $scope.p2 = "Reset";
        $scope.p3 = "Return To";
        $scope.p4 = "Login";

        $http.get('php/reset_passwordPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });
    });