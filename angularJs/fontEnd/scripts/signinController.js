/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('signinController', function ($scope, $http) {
        $scope.signin = "HAPPY TO SEE YOU BACK !";
        $scope.signin_span = "Let's Sign In And Have Fun";
        $scope.btn_login = "Login";
        $scope.signup_text = " Don't Have An Account? ";
        $scope.btn_signup = "Signup";
        $scope.singin_or = "OR";
        $scope.signin_fb = "Sign in with Facebook ";
        $scope.signin_tw = "Sign in with Twitter ";
        $scope.singin_g = "Sign in with Google ";
        $scope.remembar_pass = "Remember My Password On This Device. ";


        
        $http.get('php/signinPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });