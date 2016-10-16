<?php
include './cms/plugin.php';
$cms = new plugin();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/fav1.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <?php 
        echo $cms->pageTitle("events | Ticket Chai");
        ?>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <?php
        echo $cms->headCss(array("events"));
        ?>           
 
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <!--        <style type="text/css">
                *,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-size:14px;line-height:1.42857;color:#333;background-color:#fff;font-family:'Open Sans',sans-serif}body,html{height:100%}
                </style>-->
    </head>

    <body class="index-page signin" ng-app="frontEnd" ng-controller="eventsController"><!--style="background-color: #FFF !important;"-->
        <?php echo $cms->FbSocialScript(); ?>
        <?php include 'include/navbar.php';?>

        <div class="clearfix"></div>
        <div class="wrapper">
            <!-- main content part starts here -->
            <div class="main" style="background-color: transparent; margin-top:70px !important;">
                <!-- Carousel Starts Here -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-30">

                            <!--Carousel Wrapper-->
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators hidden-xs">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="<?php echo $cms->baseUrl('assets/img/events/CELEBRATION-WEB1170X3701469428243.jpg'); ?>" class="img-fluid img-responsive carousel-img-bd" style="width:100%; height: 100%;">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo $cms->baseUrl('assets/img/events/big1455621492.jpg'); ?>" class="img-fluid img-responsive carousel-img-bd" alt="" style="width:100%; height:100%;">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo $cms->baseUrl('assets/img/events/banner-banner14664192201468213812.jpg'); ?>" class="img-fluid img-responsive carousel-img-bd" alt="" style="width:100%; height: 100%;">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo $cms->baseUrl('assets/img/events/Cycling-event1466588004.jpg'); ?>" class="img-fluid img-responsive carousel-img-bd" alt="" style="width:100%; height: 100%;">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo $cms->baseUrl('assets/img/events/Sonu-b-banner14695109771469511113.png'); ?>" class="img-fluid img-responsive carousel-img-bd" alt="" style="width:100%; height: 100%; max-height:400px;">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="prev" style="color: #88C659 !important;">
                                    <span class="icon-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="next" style="color: #88C659 !important;">
                                    <span class="icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--/.Carousel Wrapper-->
                            <div class="clearfix"></div>
                            <!-- Search Navigation Starts Here -->
                            <nav class="navbar navbar-success margin-top-15" role="navigation">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search-nav">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand bold h4-responsive visible-xs text-cente" href="order.php"><i class="fa fa-ticket" aria-hidden="true">&nbsp;</i> {{buyTickets}}</a>
                                    </div>

                                    <div class="collapse navbar-collapse" id="search-nav">
                                        <ul class="nav navbar-nav">
                                            <div class="col-md-4 col-sm-12 col-xs-12 text-center hidden-xs">
                                                <li class="text-center">
                                                    <a class="navbar-brand bold h4-responsive" href="order.php"><i class="fa fa-ticket" aria-hidden="true">&nbsp;</i> {{buy_eventTickets}}</a>
                                                </li>
                                            </div>
                                            <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                                                <li>
                                                    <select name="1" class="selectpicker show-menu-arrow search-nav-select" data-live-search="true" data-title="Select A Location" data-style="btn-default btn-block" data-menu-style="dropdown-white">
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Chittagong</option>
                                                        <option value="3">Rajshahi</option>
                                                        <option value="4">Khulna</option>
                                                        <option value="5">Barishal</option>
                                                        <option value="6">Sylhet</option>
                                                    </select>
                                                </li>
                                            </div>
                                            <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                                                <li>
                                                    <select name="1" class="selectpicker show-menu-arrow search-nav-select" data-live-search="true" data-title="Select A Category">
                                                        <option value="1">Events</option>
                                                        <option value="2">Sports</option>
                                                        <option value="3">Theater</option>
                                                        <option value="4">Movies</option>
                                                        <option value="5">Music</option>
                                                        <option value="6">Buses</option>
                                                        <option value="7">Launches</option>
                                                        <option value="8">Tourism</option>
                                                    </select>
                                                </li>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-xs-12 text-center">
                                                <li>
                                                    <button class="btn btn-nav-search btn-block"><i class="fa fa-search" aria-hidden="true">&nbsp;</i> Search</button>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- Search Navigation Ends Here -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Ends Here -->

                <div class="clearfix"></div>
                <!-- Featured Events section starts here -->
                <div class="container">
                    <div class="row">
                        <!-- Left Sidebar Starts Here -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="panel panel-default panel-featured">
                                <div class="panel-heading">
                                    <h1 class="panel-name h1-responsive">{{pnael_title}}<strong>{{pnael_titleStrong}} </strong></h1>
                                </div>
                                <div class="panel-body">
                                    <h4 class="panel-title h4-responsive padding-10">{{events_title}}</h4>
                                    <ul class="list-group" ng-repeat="x in name | limitTo : 5">
                                        <li class="list-group-item media">
                                            <div class="media-left">
                                                <a href="#!">
                                                    <img class="media-object img-responsive" src="<?php echo $cms->baseUrl('assets/img/gallery-2/1.jpg'); ?>" alt="1" style="display: block; height: 120px; width: 120px;">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="event-title">
                                                    <b><a href="#" class="glow2">{{x.event_title}}</a></b>
                                                </div>
                                                <button class="btn btn-success-outline waves-effect pull-right hidden-xs"><i aria-hidden="true" class="fa fa-cart-plus">&nbsp;</i> {{btn_buy}}</button>
                                                <div class="event-detail">
                                                    <span class="text-danger margin5"><i aria-hidden="true" class="fa fa-map-marker">&nbsp;</i> {{x.venue_title}}</span><br/>
                                                    <span class="text-primary margin5"><i aria-hidden="true" class="fa fa-calendar">&nbsp;</i> {{x.venue_valid_from}} - {{x.venue_valid_till}}</span><br/>
                                                    <span class="text-success margin5"><i aria-hidden="true" class="fa fa-clock-o">&nbsp;</i> {{x.venue_start_date}} - {{x.venue_end_time}}</span><br/>
                                                    <a href="#!" class="btn btn-info btn-xs btn-raised text-info waves-effect margin5 hidden-xs">{{more_info}} <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                                                    <a href="wishlist.php" class="btn btn-danger btn-xs btn-raised hidden-xs"><i class="fa fa-heart" aria-hidden="true"></i> {{addTo_wishlist}}</a>
                                                </div>
                                            </div>
                                            <button class="btn btn-success-outline btn-sm btn-block waves-effect pull-right visible-xs"><i aria-hidden="true" class="fa fa-cart-plus">&nbsp;</i> {{btn_buy}}</button>
                                        </li>
                                        </ul>           
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#!" class="btn btn-sm pf-btn waves-effect"><i class="fa fa-arrow-circle-o-down" aria-hidden="true">&nbsp;</i> {{btn_viewAllFeture}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- ./Left Sidebar Starts Here -->
                        <!-- Right Sidebar Starts Here -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <a href="#!" class="figure img-thumbnail z-depth-1">
                                <img src="<?php echo $cms->baseUrl('assets/img/events/Sonu-b-banner14695109771469511113.png'); ?>" data-src="..." class="figure-img img-fluid img-responsive" alt="...">
                            </a>

                            <a href="#!" class="figure img-thumbnail z-depth-1">
                                <img src="<?php echo $cms->baseUrl('assets/img/events/Cycling-event1466588004.jpg'); ?>" data-src="..." class="figure-img img-fluid img-responsive" alt="...">
                            </a>

                            <a href="#!" class="figure img-thumbnail z-depth-1">
                                <img src="<?php echo $cms->baseUrl('assets/img/events/CELEBRATION-WEB1170X3701469428243.jpg'); ?>" data-src="..." class="figure-img img-fluid img-responsive" alt="...">
                            </a>

                            <a href="#!" class="figure img-thumbnail z-depth-1">
                                <img src="<?php echo $cms->baseUrl('assets/img/events/Regina-b1469532329.png'); ?>" data-src="..." class="figure-img img-fluid img-responsive" alt="...">
                            </a>
                        </div>
                        <!-- ./Right Sidebar Starts Here -->
                    </div>
                </div>
                <!-- ./Featured Events section ends here -->
                <div class="clearfix"></div>
                <!-- Events Upcoming section starts here -->
                <div class="container">
                    <div class="row">
                        <!-- Left Sidebar Starts Here -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="panel panel-default panel-upcoming">
                                <div class="panel-heading">
                                    <h1 class="panel-name h1-responsive">{{pnael2_title}} <strong>{{pnael2_titleStrong}}</strong></h1>
                                </div>
                                <div class="panel-body">
                                    <h4 class="panel-title h4-responsive padding-10">{{up_commingEvents}}</h4>
                                    <ul class="list-group" ng-repeat="x in name">
                                        <li class="list-group-item media">
                                            <div class="media-left">
                                                <a href="#!">
                                                    <img class="media-object img-responsive" src="<?php echo $cms->baseUrl('assets/img/gallery-2/1.jpg'); ?>" alt="1" style="display: block; height: 120px; width: 120px;">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="event-title">
                                                    <b><a href="#" class="glow2">{{x.event_title}}</a></b>
                                                </div>
                                                <button class="btn btn-success-outline waves-effect pull-right hidden-xs"><i aria-hidden="true" class="fa fa-cart-plus">&nbsp;</i> {{btn_buy}}</button>
                                                <div class="event-detail">
                                                    <span class="text-danger margin5"><i aria-hidden="true" class="fa fa-map-marker">&nbsp;</i> {{x.venue_title}}</span><br/>
                                                    <span class="text-primary margin5"><i aria-hidden="true" class="fa fa-calendar">&nbsp;</i> {{x.venue_valid_from}} - {{x.venue_valid_till}}</span><br/>
                                                    <span class="text-success margin5"><i aria-hidden="true" class="fa fa-clock-o">&nbsp;</i> {{x.venue_start_date}} - {{x.venue_end_time}}</span><br/>
                                                    <a href="#!" class="btn btn-info btn-xs btn-raised text-info waves-effect margin5 hidden-xs">{{more_info}} <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                                                    <a href="wishlist.php" class="btn btn-danger btn-xs btn-raised hidden-xs"><i class="fa fa-heart" aria-hidden="true"></i> {{addTo_wishlist}}</a>
                                                </div>
                                            </div>
                                            <button class="btn btn-success-outline btn-sm btn-block waves-effect pull-right visible-xs"><i aria-hidden="true" class="fa fa-cart-plus">&nbsp;</i> {{btn_buy}}</button>
                                        </li>
                                        </ul>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#!" class="btn btn-sm pf-btn waves-effect"><i class="fa fa-arrow-circle-o-down" aria-hidden="true">&nbsp;</i> {{btn_viewAllFeture}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- ./Left Sidebar Starts Here -->
                        <!-- Right Sidebar Starts Here -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="panel panel-default panel-covered">
                                <div class="panel-heading">
                                    <h1 class="panel-name h1-responsive">{{pnael3_title}} <strong>{{pnael3_titleStrong}}</strong></h1>
                                </div>
                                <div class="panel-body">
                                    <h4 class="panel-title h4-responsive padding-10">{{panel3_text}}</h4>
                                    <ul class="list-group" ng-repeat="x in name">
                                        <li class="list-group-item media">
                                            <div class="media-left">
                                                <a href="#!">
                                                    <img class="media-object img-responsive" src="<?php echo $cms->baseUrl('assets/img/gallery-2/1.jpg'); ?>" alt="1" style="display: block; height: 120px; width: 120px;">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="event-title">
                                                    <b><a href="#" class="glow2">{{x.event_title}}</a></b>
                                                </div>
                                                <button class="btn btn-success-outline waves-effect pull-right hidden-xs"><i aria-hidden="true" class="fa fa-cart-plus">&nbsp;</i> {{btn_buy}}</button>
                                                <div class="event-detail">
                                                    <span class="text-danger margin5"><i aria-hidden="true" class="fa fa-map-marker">&nbsp;</i> {{x.venue_title}}</span><br/>
                                                    <span class="text-primary margin5"><i aria-hidden="true" class="fa fa-calendar">&nbsp;</i> {{x.venue_valid_from}} - {{x.venue_valid_till}}</span><br/>
                                                    <span class="text-success margin5"><i aria-hidden="true" class="fa fa-clock-o">&nbsp;</i> {{x.venue_start_date}} - {{x.venue_end_time}}</span><br/>
                                                    <a href="#!" class="btn btn-info btn-xs btn-raised text-info waves-effect margin5 hidden-xs">{{more_info}} <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                                                    <a href="wishlist.php" class="btn btn-danger btn-xs btn-raised hidden-xs"><i class="fa fa-heart" aria-hidden="true"></i> {{addTo_wishlist}}</a>
                                                </div>
                                            </div>
                                            <button class="btn btn-success-outline btn-sm btn-block waves-effect pull-right visible-xs"><i aria-hidden="true" class="fa fa-cart-plus">&nbsp;</i> {{btn_buy}}</button>
                                        </li>
                                        </ul>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#!" class="btn btn-sm pf-btn waves-effect"><i class="fa fa-arrow-circle-o-down" aria-hidden="true">&nbsp;</i> {{btn_viewAllFeture}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- ./Right Sidebar Starts Here -->
                    </div>
                </div>
                <!-- ./Events Upcoming section starts here -->
                <div class="clearfix"></div>
                <!-- ticketchai simple section starts here -->
                <div class="section section-simple-close">
                    <div class="container">
                        <div class="row section_padd60">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading"></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30 text-center"></div>
                        </div>
                    </div>
                </div>
                <!-- ticketchai simple section ends here -->
            </div>
                <!-- main content part ends here -->
 
        <?php include 'include/footer.php';?>
          
        </div>
   
    
     <?php echo $cms->fotterJs(array('events'));?>
     <?php echo $cms->angularJs(array('events_angular'));?>
    <script type="text/javascript">

            $(document).ready(function () {
                // the body of this function is in assets/material-kit.js
                //materialKit.initSliders();
                $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

                window_width = $(window).width();

                if (window_width >= 768) {
                    big_image = $('.wrapper > .header');

                    $(window).on('scroll', materialKitDemo.checkScrollForParallax);
                }

            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#subscription').hide();
                setTimeout(function (a) {
                    $('#subscription').slideDown(1000);
                }, 15000);
                setTimeout(function (b) {
                    $('#subscription').slideUp(3000);
                }, 30000);
                $('#btn-sclose').click(function () {
                    $('#subscription').slideUp(1000);
                });

                $('#nav-search-btn').click(function () {
                    $('#nav-search-field').show();
                    $('#nav-search-btn').hide();
                });
                $('#nav-search-close').click(function () {
                    $('#nav-search-field').hide();
                    $('#nav-search-btn').show();
                });
            });

            setTimeout(function () {
                $('#odometer1').html('50');
                $('#odometer2').html('100');
                $('#odometer3').html('200');
                $('#odometer4').html('10000');
            }, 1000);

        </script>
        <!--  Select Picker Plugin -->
</body>    
    
</html>
