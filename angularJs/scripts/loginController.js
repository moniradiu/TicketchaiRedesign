/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular
        .module('merchantaj')
        .controller('loginController', function ($scope) {
            //Function Submit from start here.
            $scope.loginInsert = function (loginData) {
                $http.post('./php/controller/loginController.php', {'Emailaddress': loginData.Emailaddress,'Password':loginData.Password,'Subscri':loginData.Subscri})
                        .success(function (data, status, heards, config) {

                            $scope.msg = "Insert Value Submit successfully";

                        });


            }






            //Data show Title code start here  
            $scope.sineUp = "Login";
            $scope.Ifyoualreadyhaveanaccount = "(If you already have an account)";
            $scope.Emailaddress = "Email address";
            $scope.Password = "Password";
            $scope.Subscribetonewsletter = " Subscribe to newsletter";
            $scope.Login = "Login";
        });
