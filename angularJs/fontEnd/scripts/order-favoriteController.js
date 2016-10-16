/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('order-favoriteController', function ($scope, $http, $timeout) {
        $scope.m_i_1 = "Dashboard";
        $scope.m_i_2 = "Address";
        $scope.m_i_3 = "Favorite Event";
        $scope.m_i_4 = "Order";

        $scope.selectAll = "SelectAll";

        $scope.p1 = "Photo";
        $scope.p2 = "Events Details";
        $scope.p3 = "Price";
        $scope.p4 = "Option";

        $scope.p7 = "Share";
        $scope.p8 = "Delete";

        $scope.p9 = "More info";
function getInfo(){
        $http.get('php/order-favoritePhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name);
         
        });
}

$scope.deleteInfo = function(info){
     var retVal = confirm("Do you want to delete data?");

    if (retVal==true) {
        $http.post("php/order-favoritePhpController.php",{"del_id":info.WL_id})
        .success(function(data){
            getInfo();
            $scope.msg ='Delete successfully';
            $scope.alert();
        });
     }

}



$scope.alert = function(){
        $scope.showMsg = true;
        $timeout(function() {
            $scope.showMsg = false;
        }, 3000); 
    }





getInfo();

    });