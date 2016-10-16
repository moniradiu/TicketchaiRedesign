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
        echo $cms->pageTitle("Order | Ticket Chai");
    ?>

            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

            <?php
        echo $cms->headCss(array("order"));
    ?>

    </head>

    <body class="index-page signin" ng-app="frontEnd" ng-controller="orderController">
        <?php echo $cms->FbSocialScript(); ?>
            <?php include 'include/navbar.php';?>

                <div class="clearfix"></div>
                <div class="wrapper">
                    <!-- main content part starts here -->
                    <div class="main" style="background-color: transparent; margin-top:70px;">
                        <div class="clearfix"></div>
                        <!-- sitemap section starts here -->
                        <div class="section-simple2 ">
                            <div class="container">
                                <div class="row custom_menu">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
                                        <ul class="nav nav-pills nav-justified  nav-tab-bar">
                                            <li class=""><a href="merchant-dashboard/dashboard.php"><span class="fa fa-dashboard"></span> {{m_i_1}}</a> </li>
                                            <li class=""><a href="order-add.php"><span class="fa fa-map-marker"></span> {{m_i_2}}</a> </li>
                                            <li class=""><a href="order-favorite.php"><span class="fa fa-heart"></span> {{m_i_3}}</a> </li>
                                            <li class="active"><a href="order.php"><span class="fa fa-heart"></span> {{m_i_4}}</a> </li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu_content table-responsive">
                                        <div class="table-responsive">
                                            <div class="heading">
                                                <h2 class="title-2 pull-left"><i class="fa fa-server"></i>{{title}}</h2>
                                            </div>
                                             <table class="table table-bordered table-hover" style="border-collapse:collapse;">
                                                <thead>
                                                    <tr>
                                                        <th>{{p1}}</th>
                                                        <th>{{p2}}</th>
                                                        <th>{{p3}}</th>
                                                        <th>{{p4}}</th>
                                                        <th>{{p5}} </th>
                                                        <th>{{p11}} </th>
                                                    </tr>
                                                </thead>

                                                <tbody ng-repeat="x in name | limitTo: 10">
                                                    <tr data-toggle="collapse" data-target="#demo{{$index + 1}}" class="accordion-toggle">
                                                        <td id="package1">
                                                            <i class="tbl-icon-indicator fa fa-plus"></i> {{x.order_id}}
                                                        </td>
                                                        <td>{{x.OI_item_id}}</td>
                                                        <td>{{x.name}}</td>
                                                        <td>{{x.order_payment_type}}</td>
                                                        <td><span class="label label-success btn-xs">{{x.order_status}}</span></td>
                                                        <td><a href="event_tickets.php" class="btn btn-success btn-raised btn-round">
                                                        <i class="fa fa-cart-plus" aria-hidden="true">&nbsp;</i> {{buy_ticket}} </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="12" class="hiddenRow">
                                                            <div class="accordian-body collapse" id="demo{{$index + 1}}" id="accordion{{$index + 1}}">
                                                                <div class="footable-row-detail-inner">
                                                                    <div class="footable-row-detail-row  col-sm-4">
                                                                        <h3 class=" text-left">Billing Details</h3>
                                                                        <p>{{p7}}{{x.total}}</p>
                                                                    </div>
                                                                    <div class="footable-row-detail-row  col-sm-4">
                                                                        <h3 class=" text-left">Shipping Details</h3>
                                                                        <p>{{p8}}</p>
                                                                        <p>{{x.order_created}}</p>
                                                                    </div>
                                                                    <div class="footable-row-detail-row  col-sm-4">
                                                                    <h3 class=" text-left">Order details</h3>
                                                                        <p>{{p9}}</p>
                                                                        <p></p>
                                                                                {{x.address}}<br>
                                                                                {{x.order_billing_phone}}
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                    </div>

                    <?php include 'include/footer.php';?>
                </div>

                <?php echo $cms->fotterJs(array('order'));?>
                    <?php echo $cms->angularJs(array('order_angular'));?>
                        <!--for table collapse icon change -->
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('tr').on('shown.bs.collapse', function () {
                                    $(this).prev('tr').find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
                                }).on('hidden.bs.collapse', function () {
                                    $(this).prev('tr').find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
                                });
                            });
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