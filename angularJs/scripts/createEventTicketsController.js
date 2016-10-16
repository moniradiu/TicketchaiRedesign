/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
angular
        .module('merchantaj')
        .controller('createEventTicketsController', function ($scope, $http) {
            //insert function start here

            
            $scope.insert = function (mrchntNew) {
                //getInfo();
                
                //date start here
                $scope.stdate=$("#start-date").val();
                $scope.enddate=$("#end-date").val();
                //date end here
                
                //time start here
                $scope.sattime =$("#start-time").val();
                $scope.endtime =$("#end-time").val();
                //time end here
                
                //console.log($scope.stdate);D-Bug
                //console.log(mrchntNew);
                //end here
                
                /*DBfile Data insert here*/
                $http.post("./php/controller/createEventTicketsController.php", {'TicketName': mrchntNew.TicketName, 'Qty': mrchntNew.Qty, 'MinQty': mrchntNew.MinQty,
                    'MaxQty': mrchntNew.MaxQty, 'TicketType': mrchntNew.TicketType, 'Currency': mrchntNew.Currency, 'Price': mrchntNew.Price,
                    'Availability': mrchntNew.aid, 'WhowillpayTicketchaifee': mrchntNew.WhowillpayTicketchaifee, 'StartDate': $scope.stdate,
                    'EndDate':$scope.enddate, 'StartTime': $scope.sattime, 'EndTime': $scope.endtime, 'TicketDescription': mrchntNew.TicketDescription,
                    'MessageToAttendee': mrchntNew.MessageToAttendee})
                        .success(function (data, status, heards, config) {

                            $scope.msg = "Insert Value Submit successfully";

                        });

            }
            //insert function end

            $scope.aid = "0";
            $scope.availability = function (avd) {
                return $scope.aid = avd;
            }

//            //function cerate by Availability start here
//            $scope.availability = function (aid) {
//                $scope.sms = aid;
//                $scope.aid = aid;
//                console.log(aid);
//            }

            //function cerate by Availability end here

            //function create by who will pay tickets fee start here
            $scope.whowillpayfee = function () {

            }
            //function create by who will tickets fee end here

            /*Title show of Angular start Here*/
            $scope.newEventtickets = "Let's Add Your Ticket Details";
            $scope.TicketName = "Ticket Name";
            $scope.Qty = "Qty.";
            $scope.MinQty = "Min Qty.";
            $scope.MaxQty = "Max Qty.";
            $scope.TicketType = "Ticket Type";
            $scope.Currency = "Currency";
            $scope.Price = "Price";
            $scope.Availability = "Availability";
            $scope.WhowillpayTicketchaifee = "Who will pay Ticketchai fee";
            $scope.StartDate = "Start Date";
            $scope.StartTime = "Start Time";
            $scope.EndDate = "End Date";
            $scope.EndTime = "End Time";
            $scope.TicketDescription = "Ticket Description";
            $scope.MessageToAttendee = "Message To Attendee";
            $scope.Save = "Save";
            /*Title show of Angular END Here*/
        });



