/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
        .module('frontEnd')
        .controller('wishlistController', function ($scope, $http) {
            //            page title start variables start
            $scope.your = "Your";
            $scope.Wishlist = "Wishlist";
            //            page title start variables end    

            //            table iteam variables start
            $scope.Item = "Item";
            $scope.Item_name = "Item name";

            $scope.Quantity = "Quantity";

            $scope.Date = "Date";

            $scope.Action = "Action";
            //            table iteam variables end 


            // $scope.wistList = function () {
            //    $http.post("php/wishlistPhpController.php", {'id':'1'}).success(function (data, status, heards, config) {
            //        $scope.name = data;

            //        console.log($scope.name);


            //    });

            // $scope.wistList = function () {
            //     $http.post("http://192.168.1.48/ticketchai_aj/php/wishlistPhpController.php")
            //     .success(function (data, status, heards, config) {
            //         $scope.names = data;

            //         console.log($scope.names);
            //     });

            // }

            // $http.post('php/wishlistPhpController.php') 
            // .success(function (response) {
            //     $scope.name = response.data.records;
            //     console.log($scope.name);
            // });

            // $http.get("php/wishlistPhpController.php")
            //     .success(function(data){
            //         $scope.name = data;
            //     })
            //     .error(function() {
            //         $scope.name = "error in fetching data";
            //     });
            //  $scope.wistList();

            $http.get('php/wishlistPhpController.php')
                    .then(function (response) {
                        $scope.data = response.data;
                        console.log($scope.data)
                    });

            $scope.ShowAlert = function () {
                alert("Added with cart successfully");
                hide();
            }


            $scope.deleteInfo = function (info) {
                var retVal = confirm("Do you want to delete data?");

                if (retVal == true) {
                    $http.post("php/wishlistPhpController.php", {"del_id": info.WL_id})
                            .success(function (data) {
                                $scope.msg = 'Delete successfully';
                            });
                }

            }

            $scope.wishlistAddToCart = function (info) {
              var msg = confirm("Added with cart successfully");
             
              if(msg == true){
                  $http.post("php/wishlistPhpController.php", {"cart_id": info.WL_id}
                          
                          );
              }
              
            }


        })