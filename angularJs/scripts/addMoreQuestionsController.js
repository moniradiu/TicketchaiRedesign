/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular
        .module('merchantaj')
        // controller start here
        .controller('addMoreQuestionsController', function($scope, $http){

            //Inputbox data function start here
            $scope.morequstion = function(e){

                  console.log($scope.questions);
                
                
                console.log($scope.addmorequestion);
                
                
                
                
                //Database data send php start here
                $http.post("./php/controller/addMoreQuestionsController.php",{'qustiontitle':addMoreQustion.qustiontitle,'QuestionType':addMoreQustion.QuestionType,
                    'Showfollowingtickets':addMoreQustion.Showfollowingtickets,'Required':addMoreQustion.Required,'Optional':addMoreQustion.Optional})
                        .success(function(data,status,heards,config){
                            $scope.flyshow="Data Insert Successfully";
                            
                        });//Database data send php start here 
            } //Inputbox data function end here
            
            
            
            //Input field Title show start here
            $scope.headeTitle="Let's Add Your Ticket Details";
            $scope.QuestionTitle="Question Title";
            $scope.QuestionType="Question Type";
            $scope.Showfollowingtickets="Show this question for the following tickets";
            $scope.EntryPass="Entry Pass";
            $scope.QuestionStatus="Question Status";
            $scope.required="Required";
            $scope.optional=" Optional";
            $scope.AddMoreQuestions="Add More Questions";
            $scope.Submit="Submit";
            //Input field Title show End here
        });// controller end here