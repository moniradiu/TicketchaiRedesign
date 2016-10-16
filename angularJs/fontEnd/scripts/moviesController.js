/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('moviesController', function ($scope, $http) {
        $scope.movies = "Movies ";
        $scope.movies_showing = "Now Showing ";
        $scope.buy_eventTickets = "Book Tickets Shortly";
        $scope.buy_eventTickets2 = "Book Movie Tickets Shortly";
        $scope.btn_buy = "Ticket";
        $scope.btn_trailer = "Trailer";
        $scope.blockbuster = "Blockbuster Cinamas";
        //$scope.btn_2d = "2D";
        //$scope.genre_d = "Drama";
       // $scope.genre_a = "Action";
        //$scope.genre_s = "Sports";
        $scope.lan_h = "HINDI";
        $scope.btn_viewMore = "View More";
        $scope.btn_info = "Info";
        $scope.comig_soonTitle = "Movies";
        $scope.comig_soonSpan = "Coming Soon";

        
        $http.get('php/moviesPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });