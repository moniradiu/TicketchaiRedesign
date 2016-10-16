/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('sitemapController', function ($scope, $http) {
        $scope.title = "TICKETCHAI SITEMAP";
        $scope.title2 = "Company Information";
        $scope.title3 = "Community";
        $scope.title4 = "Choose Your Category";


        $scope.des1 = "Welcome to Ticketchai. Ticketchai enables people all over the world to plan, promote, and sell tickets to any event. And we make it easy for everyone to discover events, and to share the events they are attending with the people they know. The following pages contain our Terms of Service, which govern all use of our Services";



        $scope.p1 = "Ticketchai Home";
        $scope.p2 = "About";
        $scope.p3 = "Contact";


        $scope.t_i_1 = "Terms &amp; Condition";
        $scope.t_i_2 = "how to buy";
        $scope.t_i_3 = "Customer Support";
        $scope.t_i_4 = "Our Sponsor";
        $scope.t_i_5 = "Sitemap";


        $scope.p4 = "Events";
        $scope.p5 = "Movies";
        $scope.p6 = "Plays";
        $scope.p7 = "Sports";
        $scope.p8 = "Offers";

      
        $http.get('php/sitemapPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });