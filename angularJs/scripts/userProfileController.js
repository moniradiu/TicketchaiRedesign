/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular
        .module('merchantaj')
        //Controller function start here
        .controller('userProfileController', function ($scope, $http) {
            //Function Submit from start here.
            $scope.userinsert = function(userprofileData){
                $http.post('./php/controller/userProfileController.php',{'username':userprofileData.username,'emailaddress':userprofileData.emailaddress,
                    'firstName':userprofileData.firstName,'lastName':userprofileData.lastName,'address':userprofileData.address,'city':userprofileData.city,
                    'country':userprofileData.country,'postalCode':userprofileData.postalCode,'company':userprofileData.company,'password':userprofileData.password})
                      .success(function (data, status, heards, config) {

                            $scope.flyshow = "Insert Value Submit successfully";

                        });
                
            }//Function Submit from end here.
            
            
            
            
            
            
            
            
            //show Field label code start here
            $scope.PersonalDetails = "Personal/Profile Details";
            $scope.Username = "Username";
            $scope.Emailaddress = "Email address";
            $scope.FirstName = "First Name";
            $scope.LastName="Last Name";
            $scope.Address="Address";
            $scope.City="City";
            $scope.Country="Country";
            $scope.PostalCode="Postal Code";
            $scope.Company="Company";
            $scope.Password="Password";
            $scope.UpdateProfile="Update Profile";
             //show Field label code END here
        });//Controller function end here
