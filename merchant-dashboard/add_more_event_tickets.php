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
        <?php
        echo $cms->pageTitle("Add More Event Tickets | Buy Online Ticket...");
        ?>
        <!--./Title Part end Here-->

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        
        <!--CSS Part start here-->
        <?php
        echo $cms->headCss(array("addMoreEventTickets"));
        ?>
         <!--./CSS Part end here-->
         
    </head>

    <body ng-app="merchantaj" ng-controller="addmoreEventTicketsController">
        <div class="wrapper">
             <?php include ('includes/sidebar.php'); ?>

            <div class="main-panel">
                 <?php include ('includes/top_navigation.php'); ?> 

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- Wizard Sarts Here -->
                                 <?php include ('includes/box_ticketsDetails.php'); ?> 
                                <!--./ Wizard Ends Here -->
                            </div>
                        </div>
                    </div>
                </div>
               <?php include ('includes/footer.php'); ?> 
            </div>
        </div>
    </body>



<!-- Footer Js start here--->
 <?php
    echo $cms->footerJs(array("addMoreEventTickets"));
    ?>
<!--./Footer Js End Here-->




    <script type="text/javascript">
        $(document).ready(function () {
            // Init Sliders
            demo.initFormExtendedSliders();
            // Init DatetimePicker
            demo.initFormExtendedDatetimepickers();

            $('#start-date-box').click(function () {
                $('#start-date').keyup();
            });
            $('#start-time-box').click(function () {
                $('#start-time').keyup();
            });
            $('#end-date-box').click(function () {
                $('#end-date').keyup();
            });
            $('#end-time-box').click(function () {
                $('#end-time').keyup();
            });


        });


    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            demo.initOverviewDashboard();
            demo.initCirclePercentage();

        });
    </script>
    
    <script type="text/javascript">
        // jQuery
        $("form#event-cover-photo").dropzone({url: "/file/post"});
        // Dropzone class:
        //var myDropzone = new Dropzone("form#event-cover-photo", { url: "/file/post"});
    </script>

   

    <script>
        $(function () {
            pageLoadScript();
        });


        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style12';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');


            $('.tsf-wizard-1').tsfWizard({
                stepEffect: 'basic',
                stepStyle: 'style3',
                navPosition: 'top',
                stepTransition: true,
                showButtons: true,
                showStepNum: true,
                height: 'auto'
            });
        }
    </script>
</html>
