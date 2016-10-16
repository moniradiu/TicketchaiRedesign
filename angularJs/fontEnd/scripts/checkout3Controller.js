/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global angular */

angular
    .module('frontEnd')
    .controller('checkout3Controller', function ($scope, $http) {
        $scope.checkoutOne = "CHECKOUT METHOD";
        $scope.checkoutTwo = "BILLING & SHIPPING";
        $scope.checkoutThree = "YOUR ORDER & PAYMENT ";
        $scope.signin_text = "Sign in";
        $scope.btn_fb = "Facebook";
        $scope.btn_g = "Google";
        $scope.or_text = "--------- OR ---------";
        $scope.btn_login = "Log in";
        $scope.lost_pass = "Lost your password?";
        $scope.createNewAcc = "Create New Account";
        $scope.terms = " Accept TicketChai";
        $scope.terms2 = "Terms And Conditions";
        $scope.signup = "Create Account";
        $scope.selectAdd = " Select Addresses: &nbsp;I want to...";
        $scope.have_tickets = "Have my ticket(s) delivered at home.";
        $scope.pick_from = "Pick from Ticketchai office.";
        $scope.venue = "Pick from Venue.";
        $scope.select_billingAdd = "Select Delivery &amp; Billing Address";
        $scope.your_add = "Your Address";
        $scope.checkbox_makeAdd = "Make this my delivery address";
        $scope.your_add2 = "Your Address";
        $scope.venue_add = "Our Venue Address";
        $scope.venue_add2 = " Razzak Plaza (8th Floor),1 New Eskaton Road, Moghbazar Circle, Dhaka-1217";
        $scope.btn_continue = "Continue";
        $scope.btn_continue2 = "Continue";
        $scope.office_add = "Our Office Adderss";
        $scope.office_add2 = " Razzak Plaza (8th Floor),1 New Eskaton Road, Moghbazar Circle, Dhaka-1217 ";
        $scope.office_add3 = " +880-1971-842538,+880-447-8009569";
        $scope.btn_continue3 = "Continue ";
        $scope.payment_method = "Payment Method";
        $scope.online_payment = "Online Payment";
        $scope.online_paymentText = "The easiest and safest way to send or receive money instantly on your mobile ";
        $scope.bkash_payment = "Bkash Payment";
        $scope.bkash_paymentText = "Bkash is one of the payment methods for making purchases on ticketchai.com. ";
        $scope.cash_onDelivery = "Cash On Delivery";
        $scope.cash_onDeliveryText = "Cash on Delivery is one of the payment methods for making purchases on ticketchai.com. ";
        $scope.cart_summary = "Cart Summary";
        $scope.cart_tblH1 = "Total Ticket Quantity";
        $scope.cart_tblH2 = "Total Ticket Price";
        $scope.cart_tblH3 = "Total Include Quantity";
        $scope.cart_tblH4 = "Total Include Price";
        $scope.cart_tblH5 = "Test(10.00%)";
        $scope.cart_tblH6 = "Extra API (5.00%)";
        $scope.cart_tblH7 = "Delivery Charge";
        $scope.cart_tblH8 = "asdasdsa(5%)";
        $scope.cart_tblH9 = "Payable Amount : ";


        $http.get('php/checkout3PhpController.php')
        .then(function(response) {
             $scope.name= response.data;
            console.log( $scope.name)
         
        });

    });