/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
angular
        .module('merchantaj')
        //Controller function start here
        .controller('registerController', function ($scope, $http) {

            //Function Submit from start here.
            $scope.registerinsert = function (registerData) {
                
                console.log(registerData);
                
                $http.post('./php/controller/registerController.php', {'firstName': registerData.firstName, 'lastName': registerData.lastName,
                    'email': registerData.email,'yourAddress':registerData.yourAddress, 'password': registerData.password, 'confirmPassword': registerData.confirmPassword,
                    'phoneMobileNo': registerData.phoneMobileNo,'CaptchaCode': registerData.CaptchaCode})
                        .success(function (data, status, heards, config) {

                            $scope.flyshow = "Insert Value Submit successfully";

                        });
            }
            //Function Submit from end here.






            //show Field label code start here
            $scope.merchantUp = "Merchant Sign Up / Registration";
            $scope.Step01 = "Step01";
            $scope.Step02 = "Step - 02";
            $scope.Step03 = "Step - 03";
            $scope.RegistrationApproval = "Dear Merchant, Please Provide Your Credential - For Login / Registration Approval";
            $scope.FirstName = "First Name";
            $scope.LastName = "Last Name";
            $scope.Email = "Email";
            /**1st step end here***/

            /**2nd step start here**/
            $scope.YourAddress = "Your Address";
            $scope.Password = "Password";
            $scope.ConfirmPassword = "Confirm Password";
            $scope.PhoneMobileNo = "Phone/Mobile No.";
            $scope.CaptchaCode = "Captcha Code";
            $scope.Back = "Back";
            $scope.Next = "Next";
            /**2nd step end here**/

            /**3rd step start here**/
            $scope.Finish = "Finish";
            $scope.thankYou = "Thank You!";
            /**3rd step end here**/
            //show Field label code END here

        });//Controller function end here

