<!-- Navbar -->
    <nav class="navbar navbar-fixed-top navbar-default" style="margin-bottom:0px;" >
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="<?php echo $cms->baseUrl('assets/img/white-shadow-logo.png'); ?>" alt="Ticketchai Logo" rel="tooltip" title="<b>Ticketchai.com</b>" data-placement="bottom" data-html="true" />
                        </div>
                        <!--<div class="brand">
                                <img src="assets/img/white-shadow-logo.png" alt="Ticketchai Logo" rel="tooltip" title="<b>Ticketchai.com</b>" data-placement="bottom" data-html="true" style="margin-top:-10px;"/>
                            </div>-->


                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-index">
                <ul class="nav navbar-nav navbar-right">
                    <li class="text-center hidden-sm">
                        <a href="#!" id="nav-search-btn"><i class="fa fa-search" aria-hidden="true">&nbsp;</i> Search Events</a>
                        <div id="nav-search-field" class="form-group" style="display: none;">
                            <input type="password" class="form-control" placeholder="Search For An Event">
                            <span class="floating-f-p">
                                    <a href="#!"  id="nav-search-close"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
                                </span>
                        </div>
                    </li>
                    <li class="text-center single-nav">
                        <a href="#!">Events</a>
                    </li>
                    <li class="text-center single-nav">
                        <a href="#!">Sports</a>
                    </li>
                    <li class="text-center single-nav">
                        <a href="#!">Theater</a>
                    </li>
                    <li class="text-center single-nav">
                        <a href="#!">Movies</a>
                    </li>
                    <li class="text-center single-nav">
                        <a href="#!">Music</a>
                    </li>
                    <li class="dropdown text-center">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Buses</a></li>
                            <li><a href="#">Launches</a></li>
                            <li><a href="#">Tourism</a></li>
                        </ul>
                    </li>
                    <li class="text-center hidden-sm">
                        <a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Log In</a>
                    </li>
                    <li class="dropdown text-center bd-ash-1 margin_right10 hidden-sm">
                        <a href="#!" class="dropdown-toggle cart-nav" data-toggle="dropdown">
                            <!--data-hover="dropdown" -->
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
                            <b class="total-price"> ৳ <span id="cartAmount">3000</span></b>
                        </a>
                        <ul class="dropdown-menu" id="wholeCart" ng-repeat="ww in data">
                            <li>
                                <div class="basket-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <div class="title">
                                                <a href="http://ticketchai.com/details/406/Social-Business-Youth-Summit-2016" target="_blank" class="cart-product-title">{{ww.event_title}}</a>
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
                                                <table>
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
                            <li class="checkout hidden-sm">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <a href="cart.php" class="btn btn-danger btn-raised btn-block">show cart</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a class="btn btn-info btn-raised btn-block" href="#!">checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->