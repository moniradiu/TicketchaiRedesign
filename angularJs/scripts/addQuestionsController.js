/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular
        .module('merchantaj')
        .controller('addQuestionsController', function($scope){
            
            
            $scope.TicketsDetails="Let's Add Your Event Question Details";
            $scope.NameMandatory="Name (Mandatory)";
            $scope.EmailMandatory="Email (Mandatory)";
            $scope.AddMoreQuestions="Save & Add More Questions";
        });
