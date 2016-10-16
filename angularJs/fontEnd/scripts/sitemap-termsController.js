/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('sitemap-termsController', function ($scope, $http) {
        $scope.title1 = "TICKETCHAI TERMS OF SERVICE AGREEMENT";
        $scope.title2 = "Acceptance of Terms";
        $scope.title3 = "Content";
        $scope.title4 = "Ticketchai Communications";

        $scope.num1 = "01.";
        $scope.num2 = "02.";
        $scope.num3 = "03.";



        //            table element variable start
        $scope.t_i_1 = "Terms &amp; Condition";
        $scope.t_i_2 = "how to buy";
        $scope.t_i_3 = "Customer Support";
        $scope.t_i_4 = "Our Sponsor ";
        $scope.t_i_5 = "Sitemap ";
        //            table element variable end

        //            main content variables start


        $scope.des1 = "Welcome to Ticketchai. Ticketchai enables people all over the world to plan, promote, and sell tickets to any event. And we make it easy for everyone to discover events, and to share the events they are attending with the people they know. The following pages contain our Terms of Service, which govern all use of our Services.";

        $scope.des2 = "Ticketchai, Inc. ('Ticketchai') provides a collection of online resources, including search, browse, user profile pages, community pages, event detail pages, venue detail pages, performer detail pages, the Demand service, comments, link sharing, tags, calendar tools, data input tools, and Web Services application programming interfaces (APIs), (collectively referred to hereafter as 'the Service') subject to the following Terms of Service ('Terms'), which may be updated by Ticketchai from time to time. Ticketchai will provide notice of materially significant changes to the Term by posting notice on the Ticketchai site By using the Service in any way, you are agreeing to comply with these Terms. In addition, when using particular Ticketchai services, you agree to abide by any applicable posted guidelines for all Ticketchai services, which may change from time to time. Should you object to any term or condition of these Terms, any guidelines, or any subsequent modifications thereto or become dissatisfied with the Service in any way, your only recourse is to immediately discontinue use of the Service. ";



        $scope.des3 = "You understand that all postings, messages, text, files, images, photos, video, sounds, or other materials ('Content') posted on, transmitted through, or linked from the Service, are the sole responsibility of the person from whom such Content originated. More specifically, you are entirely responsible for all Content that you post, email or otherwise make available via the Service. You understand that Ticketchai does not control, and is not responsible for Content made available through the Service, and that by using the Service, you may be exposed to Content that is offensive, indecent, inaccurate, misleading, or otherwise objectionable. Furthermore, the Service and Content available through the Service may contain links to other websites, which are completely independent of Ticketchai. Ticketchai makes no representation or warranty as to the accuracy, completeness or authenticity of the information contained in any such site. Your linking to any other websites is at your own risk. You agree that you must evaluate, and bear all risks associated with, the use of any Content, that you may not rely on said Content, and that under no circumstances will Ticketchai be liable in any way for any Content or for any loss or damage of any kind incurred as a result of the use of any Content posted, emailed or otherwise made available via the Service. You acknowledge that Ticketchai does not pre-screen or approve Content, but that Ticketchai shall have the right (but not the obligation) in its sole discretion to refuse, delete or move any Content that is available via the Service, for violating the letter or spirit of the Terms or for any other reason.";

        $scope.des4 = "In the course of providing you services, Ticketchai will communicate with you via email. You agree to receive emails which are specific to your account and necessary for the normal functioning of the Ticketchai Service, including but not limited to notifications about performers and events you've expressed interest in. Ticketchai will use the email address you provide to register you to use our Services, to verify your authority to use certain features of our Site and Services, to deliver certain services and notices based on the email settings you have selected, or to improve and tailor the content and general administration of our Site and Services.";
        //            main content variables end


          
        $http.get('php/sitemap-termsPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });
    });