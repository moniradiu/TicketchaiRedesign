/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('sitemap_customar_supportController', function ($scope, $http) {
        $scope.title = "CUSTOMER SUPPORT";
        $scope.title2 = "TICKETCHAI TERMS OF SERVICE AGREEMENT";

        $scope.des1 = "Tell us more about your shopping needs to be connected with a sales specialist in the Country .";

        $scope.des2 = "Welcome to Ticketchai. Ticketchai enables people all over the world to plan, promote, and sell tickets to any event. And we make it easy for everyone to discover events, and to share the events they are attending with the people they know. The following pages contain our Terms of Service, which govern all use of our Services.";

        $scope.des3 = "Chat with an Ticketchai Home & Home Office US sales specialist before I buy, check my order status or get help with an order I already placed.";

        $scope.des4 = "Ticketchai Home & Home Office Email team provides sales and order assistance for customers purchasing from within the United States.";

        $scope.des5 = "To speak with a US sales specialist. Available 7 days a week, from 7 am to 1 am Eastern time.";

        $scope.p1 = "Chat";
        $scope.p2 = "CHAT";
        $scope.p3 = "Email";
        $scope.p4 = "EMAIL";
        $scope.p5 = "Call 800-565-9917";


        $scope.t_i_1 = "Terms &amp; Condition";
        $scope.t_i_2 = "how to buy";
        $scope.t_i_3 = "Customer Support";
        $scope.t_i_4 = "Our Sponsor";
        $scope.t_i_5 = "Sitemap";



        
        $http.get('php/sitemap-customar-supportPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });


    });