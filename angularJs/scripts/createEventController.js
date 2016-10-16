/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
        .module('merchantaj')
        .directive('fileInput', function ($parse) {
            return{
                restrict: 'A',
                link: function (scope, elem, attrs) {
                    elem.bind('change', function () {
                        $parse(attrs.fileInput).assign(scope, elem[0].files);
                        scope.$apply();
                    });
                }
            }
        })
        .controller('createEventController', function ($scope, $http,$timeout) {

            $scope.createEvent = function (addEvent) {

                //date start here
                $scope.StartDate = $("#start-date").val();
                $scope.EndDate = $("#end-date").val();
                //date end here

                //time start here
                $scope.StartTime = $("#start-time").val();
                $scope.EndTime = $("#end-time").val();
                //time end here

//                console.log($scope.StartDate,$scope.EndDate,$scope.StartTime,$scope.EndTime);
                //console.log(addEvent);
                $http.post("./php/controller/createEventController.php", {'EventName': addEvent.EventName, 'EventURL': addEvent.EventURL,
                    'EventCategory': addEvent.EventCategory, 'EventSubCategory': addEvent.EventSubCategory, 'EventType': addEvent.EventType,
                    'OrganizedBy': addEvent.OrganizedBy, 'StartDate': $scope.StartDate, 'StartTime': $scope.StartTime, 'EndDate': $scope.EndDate, 'EndTime': $scope.EndTime,
                    'NameOfVenue': addEvent.NameOfVenue, 'StreetLine1': addEvent.StreetLine1, 'StreetLine2': addEvent.StreetLine2, 'CityFrom': addEvent.CityFrom, 'CountryFiled': addEvent.CountryFiled,
                    'EventDescription': addEvent.EventDescription, 'EventTags': addEvent.EventTags, 'PaymentGatewayAndServiceCharge': addEvent.PaymentGatewayAndServiceCharge, 'ChangetheLabel': addEvent.ChangetheLabel})
                        .success(function (data, status, heards, config) {
                            $scope.informatonSms = "Insert Value Submit successfully";




                        });
            }


            $scope.openexpo=function(){
                $("#upload").click();
            }

            $scope.imageUpload = function (event) {
                var files = event.target.files; //FileList object 
                var file = files[files.length - 1];
                $scope.file = file;
                var reader = new FileReader();
                reader.onload = $scope.imageIsLoaded;
                reader.readAsDataURL(file);
            }

            $scope.imageIsLoaded = function (e) {
                $scope.$apply(function () {
                    $scope.goCats = true;
                    $scope.step = e.target.result;
                });
            }

            $scope.upload = function () {
//                var name = $scope.name;
                var fd = new FormData();
                angular.forEach($scope.files, function (file) {
                    fd.append('file', file);
                });
               
                var request = $http({
                    method: 'POST',
                    url: './php/controller/createEventController.php',
                    data: fd,
                    transformRequest: angular.identity,
                    headers: {'Content-Type': undefined}

                });
                request.then(function (data, status, headers, config) {
                    $scope.msg = 'Insert Successfully';
                   // $scope.alert();
                }, function (error) {
                    $scope.msg = error.data;
                    //$scope.alert();
                });
            }
//     $scope.alert = function(){
//		$scope.showMsg = true;
//		$timeout(function() {
//			$scope.showMsg = false;
//		}, 3000); 
//	}








            //Field all Title show by angular start here 
            $scope.AddEventDetails = "Add Event Details";
            $scope.Basics = "Basics";
            $scope.DateAndTime = "Date & Time";
            $scope.Location = "Location";
            $scope.Description = "Description";
            $scope.Photos = "Photos";
            $scope.ProvideYBEventDetails = "Provide Your Basic Event Details";
            $scope.EventName = "Event Name";
            $scope.EventURL = "Event URL";
            $scope.EventCategory = "Event Category";
            $scope.EventSubCategory = "Event Sub-Category";
            $scope.EventType = "Event Type";
            $scope.OrganizedBy = "Organized By";
            /**1st part end here**/

            /***2nd part start here**/
            $scope.ProvideDateAndTime = "Provide Your Event Date And Time";
            $scope.StartDate = "Start Date";
            $scope.StartTime = "Start Time";
            $scope.EndDate = "End Date";
            $scope.EndTime = "End Time";
            /***2nd part end here**/

            /***3nd part start here**/
            $scope.Venue = "Provide Your Event Location / Venue";
            $scope.EventVenue = "Event Venue";
            $scope.NameOfVenue = "Name of Venue";
            $scope.StreetLine1 = "Street Line 1";
            $scope.StreetLine2 = "Street Line 2";
            $scope.CityFrom = "City";
            $scope.CountryFiled = "Country";
            $scope.LocationMapFixed = "Location Map";
            /***3nd part start here**/

            /**4th Part strat here**/
            $scope.PurEventDescription = "Provide Your Event Description";
            $scope.EventDescription = "Event Description";
            $scope.EventTags = "Event Tags";
            $scope.PaymentGatewayAndServiceCharge = "Payment Gateway & Service Charge";
            $scope.ChangetheLabel = "Change the Label";
            $scope.UploadYourEventPhotos = "Upload Your Event Photos";
            $scope.UploadCoverImage = "Upload Cover Image";
            $scope.UploadCardImage = "Upload Card Image";
            $scope.PREV = "PREV";
            $scope.NEXT = "NEXT";
            $scope.FINISH = "FINISH";
            /**4th part End here**/
            //Field all Title show by angular End here 
        });

