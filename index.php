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
        echo $cms->pageTitle("Ticket Chai | Buy Online Ticket...");
        ?>
            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

            <?php
        echo $cms->headCss(array("home"));
        ?>


    </head>

    <body class="index-page" ng-app="frontEnd" ng-controller="indexController">
        <?php echo $cms->FbSocialScript(); ?>
            <!-- Navbar -->
            <nav id="main-top-nav" class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
                <div class="container">
                    <div id="logo-nav" class="navbar-header">
                        <button type="button" class="navbar-toggle hidden-xs" data-toggle="collapse" data-target="#navigation-index">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html">
                            <div class="logo-container">
                                <div class="logo">
                                    <img class="main-logo" src="<?php echo $cms->baseUrl(" assets/img/white-shadow-logo.png "); ?>" alt="Ticketchai Logo" rel="tooltip" title="<b>Ticketchai.com</b>" data-placement="bottom" data-html="true" />
                                </div>
                                <!--<div class="brand">
                                <img src="assets/img/white-shadow-logo.png" alt="Ticketchai Logo" rel="tooltip" title="<b>Ticketchai.com</b>" data-placement="bottom" data-html="true" style="margin-top:-10px;"/>
                            </div>-->


                            </div>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="navigation-index">
                        <ul class="nav navbar-nav navbar-right">
                            <li id="login">
                                <a href="signin.php" class="btn bxsdw_none" target="_blank" style="color: #ffffff;">
                                    <!--<i class="material-icons">lock_open</i>-->
                                    <i class="icon-lock icon-2x"></i> Log In
                                </a>
                            </li>
                            <!--                        <li id="create">
                                                    <a href="#" class="btn bxsdw_none" target="_blank" style="color: #ffffff;">
                                                        <i class="material-icons">launch</i> 
                                                        <i class="fa fa-paper-plane" aria-hidden="true"></i> Create Event
                                                    </a>
                                                </li>-->
                            <li id="location">
                                <a href="#!" data-toggle="modal" data-target="#myModal" class="btn bxsdw_none" style="color: #ffffff;">
                                    <!--<i class="material-icons">lock_open</i>-->
                                    <i class="icon-location icon-2x"></i> Dhaka
                                </a>
                                <!-- Modal Core -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content text-center">
                                            <div id="city-search" class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <div class="form-group label-floating success">
                                                    <label class="control-label">Select Your City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="modal-title" id="myModalLabel">Top Cities</h4>
                                                <hr>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Dhaka</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Chittagong</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Rajshahi</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Khulna</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Sylhet</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Barishal</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Comilla</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-raised margin5">Rangpur</button>
                                                <hr>

                                            </div>
                                            <div class="modal-footer text-center" style="text-align: center !important; margin-bottom: 15px;">
                                                <!--                                            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>-->
                                                <button type="button" class="btn btn-success btn-raised">Explore Events !</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--./Modal Ends-->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="wrapper">
                <!-- header part starts here -->
                <div class="header header-filter">
                    <!-- style="background-image: url('assets/img/bg2.jpeg');"-->
                    <div class="crosscover">

                        <div class="crosscover-overlay">
                            <div class="crosscover-island">
                                <span class="crosscover-title"><a href="javascript:void(0);">Create Events and start selling tickets</a></span>
                                <!--neon1-->
                                <span class="clearfix"></span>
                                <br/>
                                <h4 class="crosscover-description">in less than a minute with Ticketchai</h4>
                                <span class="clearfix"></span>
                                <a href="javascript:void(0);" class="btn btn-danger btn-raised glow">
                                    <strong style="font-size:14px; letter-spacing: 1.2px;">
                                    <!--<i class="material-icons">launch</i>-->
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Create event
                                </strong>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-primary btn-raised glow">
                                    <strong style="font-size:14px; letter-spacing: 1.2px;">
                                    <!--<i class="material-icons">shopping_cart</i>-->
                                    <i class="fa fa-ticket" aria-hidden="true"></i> Buy Tickets
                                </strong>
                                </a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 crosscover-caption hidden-xs">
                                <div class="col-sm-8">
                                    <p class="padding_top10">Getting registrations for your Treks and Trips is hassle-free with Ticketchai </p>
                                </div>
                                <div class="col-sm-4">
                                    <a href="javascript:void(0);" class="btn btn-raised btn-shiw btn-block btn-sm glow">See How It Works</a>
                                </div>
                            </div>
                        </div>

                        <div class="crosscover-list">
                            <div class="crosscover-item">
                                <img class="cb-slideshow1 img-responsive" src="<?php echo $cms->baseUrl(" assets/img/slider/Banner-2015-03-04-10-58-42.jpg ")?>" alt="image01" style="display:block !important;" />
                            </div>
                            <div class="crosscover-item">
                                <img class="cb-slideshow2 crosscover-animation img-responsive" src="<?php echo $cms->baseUrl(" assets/img/slider/Banner-2015-03-04-11-14-33.jpg "); ?>" alt="image02" style="display:block !important;" />
                            </div>
                            <div class="crosscover-item">
                                <img class="cb-slideshow3 crosscover-animation img-responsive" src="<?php echo $cms->baseUrl(" assets/img/slider/Banner-2015-03-04-11-16-26.jpg "); ?>" alt="image03" style="display:block !important;" />
                            </div>
                            <div class="crosscover-item">
                                <img class="cb-slideshow4 crosscover-animation img-responsive" src="<?php echo $cms->baseUrl(" assets/img/slider/Banner-2015-03-04-11-49-01.jpg "); ?>" alt="image04" style="display:block !important;" />
                            </div>
                            <div class="crosscover-item">
                                <img class="cb-slideshow5 crosscover-animation img-responsive" src="<?php echo $cms->baseUrl(" assets/img/slider/Banner-2015-04-13-11-27-05.jpg ");?>" alt="image05" style="display:block !important;" />
                            </div>
                        </div>

                    </div>
                </div>
                <!-- header part ends here -->
                <!-- main content part starts here -->
                <div class="main">
                    <!-- homepage main search section starts here -->
                    <!-- Search Navigation Starts Here -->
                    <nav id="second-top-nav" class="navbar navbar-success margin-bottom-0" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search-nav">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a id="search-label2" class="navbar-brand bold h3-responsive visible-xs text-cente" href="#"><i class="fa fa-ticket" aria-hidden="true">&nbsp;</i> Book Ticket</a>
                                <a id="site-logo" href="index.html" style="display: none;">
                                    <div class="logo-container">
                                        <div class="logo">
                                            <img class="main-logo" src="tc-merchant-template/assets/img/white-shadow-logo.png" alt="Ticketchai Logo" rel="tooltip" title="<b>Ticketchai.com</b>" data-placement="bottom" data-html="true" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="search-nav">
                                <ul id="homepage-nav-2" class="nav navbar-nav navbar-right" style="margin:0 auto;">
                                    <li id="search-labelt" class="text-center hidden-sm">
                                        <a href="#!" class="navbar-brand bold h4-responsive">LOOKING FOR A NEW EXPERIENCE ?</a>
                                    </li>
                                    <li id="home-nav-search" class="text-center hidden-sm">
                                        <div class="home-search-section col-xs-12">
                                            <div class="form-group has-success">
                                                <input id="home-search" type="text" placeholder="Search for an Event" data-ng-model="search.$" class="form-control form--inverted" />
                                                <span class="form-control-feedback">
                                                <i class="fa fa-search text-white" style="margin-top:5px !important;"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="text-center single-nav">
                                        <a href="events.php"><i class="icon-calendar icon-2x nav-icon"></i> Events</a>
                                    </li>
                                    <li class="text-center single-nav">
                                        <a href="events.html"><i class="icon-pitch icon-2x nav-icon"></i> Sports</a>
                                    </li>
                                    <li class="text-center single-nav">
                                        <a href="events.html"><i class="icon-theatre icon-2x nav-icon"></i> Theater</a>
                                    </li>
                                    <li class="text-center single-nav">
                                        <a href="movies.php"><i class="icon-cinema icon-2x nav-icon"></i> Movies</a>
                                    </li>
                                    <li class="text-center single-nav">
                                        <a href="events.html"><i class="icon-music icon-2x nav-icon"></i> Music</a>
                                    </li>
                                    <li class="dropdown text-center">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="bus_tickets.php">Buses</a></li>
                                            <li><a href="bus_tickets.php">Launches</a></li>
                                            <li><a href="bus_tickets.php">Tourism</a></li>
                                        </ul>
                                    </li>
                                    <li id="create-event" class="text-center single-nav hidden-sm" style="display: none;">
                                        <a href="merchant-dashboard/create_event.html"><i class="fa fa-paper-plane" aria-hidden="true"></i> Create event</a>
                                    </li>
                                    <li id="cart-menu" class="dropdown text-center margin_right10 margin_left10 hidden-sm" style="display: none;">
                                        <a href="#!" class="dropdown-toggle cart-nav" data-toggle="dropdown">
                                            <!--data-hover="dropdown" -->
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
                                            <b class="total-price"> ৳ <span id="cartAmount">3000</span></b>
                                        </a>
                                        <ul class="dropdown-menu" id="wholeCart">
                                            <li>
                                                <div class="basket-item">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <div class="title">
                                                                <a href="http://ticketchai.com/details/406/Social-Business-Youth-Summit-2016" target="_blank" class="cart-product-title">Social Business Youth Summit 2016</a>
                                                                <a href="#!" id="del-cart-item"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-2 col-md-4 text-center">
                                                            <div class="thumb">
                                                                <img alt="Social Business Youth Summit 2016" src="http://ticketchai.com/upload/event_web_logo/ewl_2016-06-01-19-13-44.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-10 col-md-8">

                                                            <div class="col-xs-12">
                                                                <table style="color:#000 !important">
                                                                    <thead>
                                                                        <tr class="cart_tbl">
                                                                            <td style="width: 60%">Title</td>
                                                                            <td style="width: 20%">Qnt.</td>
                                                                            <td style="width: 20%">Price</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Student</td>
                                                                            <td>1</td>
                                                                            <td>৳3000.00</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="basket-item">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <div class="title">
                                                                <a href="http://ticketchai.com/details/406/Social-Business-Youth-Summit-2016" target="_blank" class="cart-product-title">Social Business Youth Summit 2016</a>
                                                                <a href="#!" id="del-cart-item"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-2 col-md-4 text-center">
                                                            <div class="thumb">
                                                                <img alt="Social Business Youth Summit 2016" src="http://ticketchai.com/upload/event_web_logo/ewl_2016-06-01-19-13-44.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-10 col-md-8">

                                                            <div class="col-xs-12">
                                                                <table style="color:#000 !important">
                                                                    <thead>
                                                                        <tr>
                                                                            <td style="width: 60%">Title</td>
                                                                            <td style="width: 20%">Qnt.</td>
                                                                            <td style="width: 20%">Price</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Student</td>
                                                                            <td>1</td>
                                                                            <td>৳3000.00</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--                                        <h4 class="text-center" style="margin: 15px 0px;">Cart is now empty.</h4>-->
                                            <li class="checkout">
                                                <div class="col-xs-12">
                                                    <div class="col-xs-6">
                                                        <a href="cart.php" class="btn btn-danger btn-raised btn-block">show cart</a>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <a class="btn btn-info btn-raised btn-block" href="checkout1.php">checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- Search Navigation Ends Here -->
                    <!-- homepage main search section ends here -->

                    <!-- featured events section starts here -->
                    <div class="section section-featured">
                        <div class="container">
                            <div class="row section_padd60 ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading">
                                    <h2><span class="section-topic">{{featured}}</span> {{events}}</h2>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30 animated wow fadeIn" data-wow-duration="1s" >

                                    <div class="card-box col-md-3 col-sm-6 col-xs-12" ng-repeat="x in featuredEvents | limitTo : 8 ">
                                        <div class="card">
                                            <div class="header">
                                                <img class="ch-image" src="upload/event_web_banner/New_folder/{{x.event_web_banner}}" />
                                                <!--<div class="filter"></div>-->
                                                <div class="category">
                                                    <span class="category-label label label-info">{{x.event_type_tag }}</span>
                                                </div>

                                                <div class="actions">
                                                    <a href="event_tickets.php?id={{x.event_id}}" class="btn btn-success btn-raised btn-round">
                                                        <i class="fa fa-cart-plus" aria-hidden="true">&nbsp;</i> {{btn_buy}}
                                                    </a>
                                                </div>

                                                <div class="social-line" data-buttons="3">
                                                    <button class="btn btn-social btn-facebook">
                                                        <i class="fa fa-facebook-square">&nbsp;</i>{{btn_fb}}
                                                    </button>
                                                    <button class="btn btn-social btn-twitter">
                                                        <i class="fa fa-twitter-square">&nbsp;</i>{{btn_tw}}
                                                    </button>
                                                    <button class="btn btn-social btn-google">
                                                        <i class="fa fa-google-plus-square">&nbsp;</i>{{btn_g}}
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="content" style="height: 200px !important;">
                                                <h6 class="title bold" style="font-size:12px !important;"><a class="glow2" href="#">{{x.event_title | limitTo : 100   | filter : search}}</a></h6>
                                                <hr>
                                                <p class="description">
                                                    <span class="margin5 text-danger bold"><i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i> DHAKA</span>
                                                </p>
                                                <p class="description">
                                                    <span class="margin5 text-primary bold"><i class="fa fa-calendar" aria-hidden="true">&nbsp;</i> {{x.venue_start_date}} - {{x.venue_end_date}}</span>
                                                </p>
                                                <p class="description">
                                                    <span class="margin5 text-warning bold"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;</i> {{x.venue_start_time}} - {{x.venue_end_time}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- single card end -->
                                   
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-4 section-footer text-center section_padd60">
                                    <button type="button" class="btn btn-block success-rounded-outline waves-effect"><i class="fa fa-arrow-circle-o-down" aria-hidden="true">&nbsp;</i> {{btn_viewMore}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featured events section ends here -->
                    <div class="clearfix"></div>
                    <!-- Covered events section starts here -->
                    <div class="section section-featured">
                        <div class="container">
                            <div class="row section_padd30">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading animated wow fadeIn" data-wow-delay="0.02s">
                                    <h2><span class="section-topic">{{covered}}</span> {{events}}</h2>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.02s" id="social-reveal">
                                     <!-- single card starts -->
                                    <div class="card-box col-md-3 col-sm-6 col-xs-12" ng-repeat="x in featuredEvents | limitTo : 4">
                                        <!--Card-->
                                        <div class="card hm-zoom">

                                            <!--Card image-->
                                            <div class="view overlay hm-white-slight">
                                                <img src="upload/event_web_banner/{{x.event_web_banner}}" class="img-fluid mdbc-img" alt="">
                                                <a>
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <!--/.Card image-->
                                            <!--Social buttons-->
                                            <div class="card-share">
                                                <div class="social-reveal">
                                                    <!--Facebook-->
                                                    <a href="javascript:void(0);" class="btn-floating btn-fb"><i class="fa fa-facebook"></i></a>
                                                    <!--Twitter-->
                                                    <a href="javascript:void(0);" class="btn-floating btn-tw"><i class="fa fa-twitter"></i></a>
                                                    <!--Google -->
                                                    <a href="javascript:void(0);" class="btn-floating btn-gplus"><i class="fa fa-google-plus"></i></a>
                                                </div>
                                                <a class="btn-floating btn-action share-toggle primary-color-dark"><i class="fa fa-share-alt"></i></a>
                                            </div>
                                            <!--/Social buttons-->

                                            <!--Card content-->
                                            <div class="content" style="height:200px;">
                                                <h6 class="title bold"><a href="#">{{x.event_title | limitTo : 100}}</a> 
                                                <span class="category-label badge badge-primary">{{x.event_type_tag}}</span></h6>
                                                <hr>
                                                <a href="javascript:void(0);" class="btn success-rounded-outline btn-block waves-effect">{{btn_readMore}} <i class="fa fa-arrow-circle-o-right" aria-hidden="true">&nbsp;</i></a>
                                            </div>
                                            <!--/.Card content-->

                                        </div>
                                        <!--/.Card-->
                                    </div>
                                    <!-- single card ends -->
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-4 section-footer text-center section_padd60">
                                    <button type="button" class="btn btn-block success-rounded-outline waves-effect"><i class="fa fa-arrow-circle-o-down" aria-hidden="true">&nbsp;</i> {{btn_viewMore}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Covered events section ends here -->
                    <div class="clearfix"></div>
                    <!-- Upcoming events section starts here -->
                    <div class="section section-featured">
                        <div class="container">
                            <div class="row section_padd30 ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading animated wow fadeIn" data-wow-duration="1s" data-wow-delay="0.02s">
                                    <h2><span class="section-topic">{{upcoming}}</span> {{events}}</h2>
                                </div>
               

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.02s" id="social-reveal">
                                    <!-- single card starts -->
                                    <div class="card-box col-md-3 col-sm-6 col-xs-12" ng-repeat="up in upcomingEvents | filter:{name:'!!'} | limitTo : 4">
                                        <!--Card-->
                                        <!--Collection card-->
                                        <div class="card collection-card">
                                            <!--Card image-->
                                            <div class="view  hm-zoom" >
                                                <img src="upload/event_web_banner/{{up.event_web_banner}}" class="img-fluid mdbpc-img" alt="">
                                                <div class="stripe dark">
                                                    <h6 class="title bold"><a href="#" class="glow txt_sdw2">{{up.name | limitTo : 100}}-{{x.releasedate}}</a></h6>
                                                    <a class="btn btn-success btn-raised btn-round waves-effect txt-white">{{btn_moreInfo}} <i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <!--/.Card image-->
                                        </div>
                                        <!--/.Collection card-->
                                        <!--/.Card-->
                                    </div>
                                    <!-- single card ends -->


                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-4 section-footer text-center section_padd60">
                                    <button type="button" class="btn btn-block success-rounded-outline waves-effect"><i class="fa fa-arrow-circle-o-down" aria-hidden="true">&nbsp;</i> {{btn_viewMore}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Upcoming events section ends here -->
                    <div class="clearfix"></div>
                    <!-- Client Testimonial Carousel section starts here -->
                    <div class="section section-testimonial">
                        <div class="container">
                            <div class="row section_padd30 ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.02s">
                                    <h2>{{our_c}} <span class="section-topic">{{customar_say}}</span></h2>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30">
                                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                        <!-- Bottom Carousel Indicators -->
                                        <ol class="carousel-indicators hidden-xs animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.02s">
                                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive" src="<?php echo $cms->baseUrl(" assets/img/1.jpg ");?>" alt=""></li>
                                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="<?php echo $cms->baseUrl(" assets/img/avatar.jpg "); ?>" alt=""></li>
                                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="<?php echo $cms->baseUrl(" assets/img/christian.jpg ");?>" alt=""></li>
                                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="<?php echo $cms->baseUrl(" assets/img/kendall.jpg ");?>" alt=""></li>
                                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="<?php echo $cms->baseUrl(" assets/img/marc.jpg ");?>" alt=""></li>
                                        </ol>

                                        <!-- Carousel Slides / Quotes -->
                                        <div class="carousel-inner text-center animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.02s">

                                            <!-- Quote 1 -->
                                            <div class="item active">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>{{customar_comments}}</p>
                                                            <small>{{some_famous}}</small>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 2 -->
                                            <div class="item" title="Demo Testimonial">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>{{customar_comments}}</p>
                                                            <small>{{some_famous}}</small>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 3 -->
                                            <div class="item" title="Demo Testimonial">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>{{customar_comments}}</p>
                                                            <small>{{some_famous}}</small>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 4 -->
                                            <div class="item" title="Demo Testimonial">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>{{customar_comments}}</p>
                                                            <small>{{some_famous}}</small>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 5 -->
                                            <div class="item" title="Demo Testimonial">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>{{customar_comments}}</p>
                                                            <small>{{some_famous}}</small>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                        </div>

                                        <!-- Carousel Buttons Next/Prev -->
                                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Client Testimonial Carousel section ends here -->
                    <!-- Customers Logo Carousel section starts here -->
                    <div class="section section-clients">
                        <div class="container">
                            <div class="row section_padd30 padd_btm_30">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.02s">
                                    <h2>
                                    {{clients}} <span class="section-topic">{{clients}}</span><br/>
                                    <small>{{client_span}}</small>
                                </h2>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.02s">
                                    <div id="owl-demo" class="owl-carousel owl-theme client_section animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.02s" style="border: 1px solid #ccc;">
                                        <div class="item" title="Cadet Forum" ng-repeat="c in clientsController">
                                            <a href="" class="thumbnail client_thumbnail">
                                                <img class="img-responsive client_logo" src="<?php echo $cms->baseUrl("assets/img/clients/1.jpg "); ?>" alt="3" />
                                            </a>
                                        </div>
                                      
                                    </div>
                                    <div class="customNavigation hidden-xs">
                                        <a id="prev" class="prev pull-left">
                                            <img src="<?php echo $cms->baseUrl("assets/img/arrow-left.png");?>" alt="Prev" />
                                        </a>
                                        <a id="next" class="next pull-right">
                                            <img src="<?php echo $cms->baseUrl("assets/img/arrow-right.png");?>" alt="Next" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Customers Logo Carousel section ends here -->
                    <!-- How Ticketchai Works section starts here -->
                    <div class="section section-testimonial">
                        <div class="container">
                            <div class="row section_padd30 padd_btm_30">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.02s">
                                    <h2>
                                    {{HTW}} <span class="section-topic">{{HTW1}}</span> ?<br/>
                                </h2>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.02s">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center ticketchai-steps">
                                        <img class="img-responsive" src="tc-merchant-template/assets/img/ts_step_01.png" alt="3" />
                                        <br/>
                                        <p class="tcinfo-grid">
                                            <span class="tcinfo-hw">{{CEPE}}</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center ticketchai-steps">
                                        <img class="img-responsive" src="tc-merchant-template/assets/img/ts_step_03.png" alt="3" />
                                        <br/>
                                        <p class="tcinfo-grid">
                                            <span class="tcinfo-hw">{{sell_ticket}}</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center ticketchai-steps">
                                        <img class="img-responsive" src="tc-merchant-template/assets/img/ts_step_4.png" alt="3" />
                                        <br/>
                                        <p class="tcinfo-grid">
                                            <span class="tcinfo-hw">{{manage_text}}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-4 section-footer text-center section_padd60">
                                    <button type="button" class="btn btn-block success-rounded-outline waves-effect">{{btn_learnMore}} &nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- How Ticketchai Works section ends here -->
                    <!-- ticketchai information section starts here -->
                    <div class="section section-tcinfo hidden-xs">
                        <div class="container">
                            <div class="row section_padd30">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading">
                                    <h2><span class="section-topic-ol">{{we_g}}</span></h2>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <h2 class="tcinfo-grid">
                                        <span id="odometer1" class="tcinfo-qty odometer odometer-theme-default" data-theme="default">0</span>
                                        <br/>
                                        <small class="tcinfo-head">{{city}}</small>
                                    </h2>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <h2 class="tcinfo-grid">
                                        <span id="odometer2" class="tcinfo-qty odometer odometer-theme-default" data-theme="default">0</span>
                                        <br/>
                                        <small class="tcinfo-head">{{organizers}}</small>
                                    </h2>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <h2 class="tcinfo-grid">
                                        <span id="odometer3" class="tcinfo-qty odometer odometer-theme-default" data-theme="default">0</span>
                                        <br/>
                                        <small class="tcinfo-head">{{events_created}}</small>
                                    </h2>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <h2 class="tcinfo-grid">
                                        <span id="odometer4" class="tcinfo-qty odometer odometer-theme-default" data-theme="default">0</span>
                                        <br/>
                                        <small class="tcinfo-head">{{registrations}}</small>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ticketchai information section ends here -->
                    <!-- ticketchai simple section starts here -->
                    <div class="section section-simple">
                        <div class="container">
                            <div class="row section_padd30">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-heading">
                                    <h2>{{feeling}} <span class="section-topic">{{interested}}</span> {{about_us}}</h2>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-content section_padd30 text-center">
                                    <!--                                <button type="button" class="btn btn-success-outline waves-effect">Create Event - It's Free!</button>-->
                                    <a href="javascript:void(0);" class="btn btn-danger btn-raised glow">
                                        <strong style="font-size:14px; letter-spacing: 1.2px;">
                                        <!--<i class="material-icons">launch</i>-->
                                        <i class="fa fa-paper-plane" aria-hidden="true">&nbsp;</i> {{create_freeEvent}}
                                    </strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-simple-close">
                        <div class="container">
                            <div class="row section_padd30">
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

            <!-- Sart Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">clear</i>
                            </button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-simple">Nice Button</button>
                            <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

    </body>



    <?php
    echo $cms->fotterJs(array("home"));
    echo $cms->angularJs(array("index"));
    ?>
        <script>
            new WOW().init();
        </script>
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
        <script>
            $(document).ready(function () {

                var owl = $("#owl-demo");

                owl.owlCarousel({
                    items: 5, //10 items above 1000px browser width
                    itemsDesktop: [1000, 4], //5 items between 1000px and 901px
                    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                    itemsTablet: [600, 2], //2 items between 600 and 0
                    itemsMobile: [300, 1], // itemsMobile disabled - inherit from itemsTablet option
                    autoPlay: 4000,
                    pagination: false,
                    //navigation:true
                });

                // Custom Navigation Events
                $(".next").click(function () {
                    owl.trigger('owl.next');
                });
                $(".prev").click(function () {
                    owl.trigger('owl.prev');
                });

                $("#owl-demo").mouseover(function () {
                    $(".next").addClass('active-prev');
                    $(".prev").addClass('active-next');
                });
                $("#owl-demo").mouseout(function () {
                    $(".next").removeClass('active-prev');
                    $(".prev").removeClass('active-next');
                });


                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
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

    </html>