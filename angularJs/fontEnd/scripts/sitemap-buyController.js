/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('sitemap-buyController', function ($scope, $http) {
        $scope.title = "HOW TO BUY";


        $scope.des1 = "Welcome to Ticketchai. Ticketchai enables people all over the world to plan, promote, and sell tickets to any event. And we make it easy for everyone to discover events, and to share the events they are attending with the people they know. The following pages contain our Terms of Service, which govern all use of our Services.";

        $scope.des2 = " North American Contractors Association was established in 1985 to help contractors pass their difficult municipal and state examinations. We have licensed instructors and current and complete information";
        $scope.des3 = " North American Contractors Association was established in 1985 to help contractors pass their difficult municipal and state examinations. We have licensed instructors and current and complete information";
        $scope.des4 = " North American Contractors Association was established in 1985 to help contractors pass their difficult municipal and state examinations. We have licensed instructors and current and complete information";


        $scope.p1 = "Add to cart your item";
        $scope.p2 = "Register and process to cart";
        $scope.p3 = "Checkout";

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