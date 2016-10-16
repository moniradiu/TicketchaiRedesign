/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('signupController', function ($scope, $http) {
        $scope.title = "Let's create your Free account !";


        $scope.des = "Let's Sign Up In Few Minutes And Enjoy Our Awsome Services";

        $scope.p1 = "I agree to Ticketchai";
        $scope.p2 = "T&C and Privacy Policy.";
        $scope.p3 = "Sign Up";
        $scope.p4 = "Already Registered?";
        $scope.p5 = "Login";
        $scope.p6 = "OR";
        $scope.p7 = "Sign in with Facebook";
        $scope.p8 = "Sign in with Twitter";
        $scope.p9 = "Sign in with Google";


        
        
        $http.get('php/signupPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });