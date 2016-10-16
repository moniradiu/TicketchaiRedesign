/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('indexController', function ($scope, $http) {
        $scope.panelHeading = "Share your Contact Details";
        $scope.featured ="Featured";
        $scope.covered ="Covered";
        $scope.upcoming ="Upcoming";
        $scope.events ="Events";
        $scope.btn_buy ="Bye Ticket";
        $scope.btn_fb ="Facebook";
        $scope.btn_tw ="Tweet";
        $scope.btn_g ="Google+";
        $scope.btn_viewMore="View More";
        $scope.btn_readMore="Read more";
        $scope.btn_moreInfo="More Info";
        $scope.our_c="What Our";
        $scope.customar_say="Customers Say";
        $scope.customar_comments="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !";
        $scope.some_famous="Someone famous";
        $scope.clients="Our Valuable";
        $scope.clients1="Clients";
        $scope.client_span="Our clients who hosted their events through our platform ";
        $scope.HTW="How Ticketchai";
        $scope.HTW1="Works";
        $scope.CEPE="CREATE EVENT PAGE EASILY";
        $scope.sell_ticket="SELL TICKETS ONLINE";
        $scope.manage_text="MANAGE FUNDS & REGISTRATIONS";
        $scope.btn_learnMore="Learn More";
        $scope.we_g="We are growing & how!";
        $scope.city="Cities";
        $scope.organizers="organizers";
        $scope.events_created="events created";
        $scope.registrations="registrations";
        $scope.feeling="Feeling";
        $scope.interested="Interested";
        $scope.about_us="About Us?";
        $scope.create_freeEvent="Create Event - It's Free!";


        $http.get('php/featuredEventController.php')
        .then(function(response) {
             $scope.featuredEvents= response.data;
            
         
        });

        $http.get('php/upcomingEventController.php')
        .then(function(response) {
             $scope.upcomingEvents= response.data;
           
         
        });
        $http.get('php/clientsController.php')
        .then(function(response) {
             $scope.clientsController= response.data;
           
         
        });
        $http.get('php/testimonialController.php')
        .then(function(response) {
             $scope.testimonialController= response.data;
           
         
        });

    });