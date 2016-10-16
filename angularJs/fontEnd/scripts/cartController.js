/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('cartController', function ($scope, $http) {
        $scope.item = "Item";
        $scope.i_name = "Item name";
        $scope.price = "Unit Price";
        $scope.quntity = "Quantity";
        $scope.total = "SubTotal";
        $scope.cart_summary = "Cart Summary";
        $scope.st_item = "Totals Iteams";
        $scope.st_price = "Total Price";
        $scope.st_discount = "Discount";
        $scope.st_tax = "Tax";
        $scope.st_shopping = "Shopping";
        $scope.st_subtotal = "Subtotal";
        $scope.btn_apply = "Apply ";
        $scope.btn_checkout = "CHECKOUT";
        $scope.btn_ctext = "You can review this order before it's final";

       
        
         $http.get('php/cartPhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });