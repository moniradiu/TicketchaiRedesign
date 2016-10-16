/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('sitemap-sponsorController', function ($scope, $http) {
        $scope.t_i_1 = "Terms &amp; Condition";
        $scope.t_i_2 = "how to buy";
        $scope.t_i_3 = "Customer Support";
        $scope.t_i_4 = "Our Sponsor";
        $scope.t_i_5 = "Sitemap";

        $scope.title = "OUR SPONSORS";
        $scope.des1 = "Welcome to Ticketchai.  Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.";




        $scope.req1 = " Listing as Platinum Level Sponsor on the Ticketchai website";

        $scope.req11 = " Listing as Gold Level Sponsor on the Ticketchai website";

        $scope.req1111 = " Listing as Silver Level Sponsor on the Ticketchai website";


        $scope.req9 = " Prominent logo positioning on Ticketchai sponsorship page linking to the sponsor homepage or designated URL";

        $scope.req3 = " Press Release announcing sponsorship of Ticketchai";

        $scope.req4 = " Feature in Ticketchai annual magazine";


        $scope.req5 = " Sponsorship placard at Ticketchai booth during industry events";

        $scope.req6 = " Company signage at Ticketchai sponsored events";

        $scope.req7 = " Option to use the Ticketchai logo on your company’s promotional material for one year*";

        $scope.req8 = " Complimentary admission to Ticketchai events**";



        $scope.req12 = " Our Platinum Level Sponsors";

        $scope.req13 = "Our Gold Level Sponsors";

        $scope.req14 = " Our Sliver Level Sponsors";




         $http.get('php/sitemap-sponsorPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });


    });