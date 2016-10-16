<?php
include '../cms/merchantPlugin.php';
$cms = new plugin();
?>




<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/fav1.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--Title Part start Here-->
        <?php echo $cms->pageTitle("Login | Buy Online Ticket... "); ?>
        <!--./Title Part end Here-->


        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!--CSS Part start here-->
        <?php echo $cms->headCss(array("login")); ?>
        <!--./CSS Part end here-->

    </head>

    <body ng-app="merchantaj" ng-controller="loginController">
        
        <?php include ('includes/login-navigation.php'); ?> 
        
        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" data-color="green" data-image="assets/img/background/background-2.jpg">   
                <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="content">
                    <div class="container">
                        <div class="row">                   
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <?php include ('includes/box_login.php'); ?> 

                            </div>                    
                        </div>
                    </div>
                </div>
                 <?php include ('includes/footer.php'); ?> 
              
            </div>
        </div>
    </body>

    <!--   Core JS Files. Extra: PerfectScrollbar + TouchPunch libraries inside jquery-ui.min.js   -->

    <!-- Footer Js start here--->
    <?php
    echo $cms->footerJs(array("login"));
    ?>
    <!--./Footer Js End Here-->

    <script type="text/javascript">
        $().ready(function () {
            demo.checkFullPageBackgroundImage();

            setTimeout(function () {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>


    <!-- Mirrored from demos.creative-tim.com/paper-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Aug 2016 07:34:30 GMT -->
</html>
