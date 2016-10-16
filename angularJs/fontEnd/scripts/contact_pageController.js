/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('contact_pageController', function ($scope, $http) {
        $scope.contact_title = "Please Get in Touch With Us";
        $scope.title_span = "Please feel free to contact us any time we will get back to you asp.";
        $scope.btn_send = "Send";
        $scope.question = "Have Any Question?";
        $scope.share = "Share";
        $scope.c_info = "Contact Info";
        $scope.c_infoText1 = "You can contact or visit us in our office from Saturday to Thursday from 10:00 AM - 06:00 PM";
        $scope.c_infoText2 = "Razzak Plaza (8th Floor),1 New Eskaton Road, Moghbazar Circle, Dhaka-1217";
        $scope.c_infoText3 = "+880-1971-842538";
        $scope.c_infoText4 = "+880-1971-842538";
        $scope.c_infoText5 = "support@ticketchai.com";
        $scope.contact_title = "Please Get in Touch With Us";

        
        $http.get('php/contact_pagePhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });
    });