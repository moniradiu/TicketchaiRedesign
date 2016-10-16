<?php
include './cms/plugin.php';
$cms = new plugin();
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="<?php $cms->baseUrl(" assets/img/fav1.png "); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


        <?php
        echo $cms->pageTitle("Cart | Ticketchai.com...");
        ?>

            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

            <?php
             echo $cms->headCss(array("cart"));
            ?>




                <!-- CSS Just for demo purpose, don't include it in your project -->
                <!--        <style type="text/css">
                *,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-size:14px;line-height:1.42857;color:#333;background-color:#fff;font-family:'Open Sans',sans-serif}body,html{height:100%}
                </style>-->
    </head>

    <body class="index-page signin" ng-app="frontEnd" ng-controller="cartController">
        <?php echo $cms->FbSocialScript(); ?>

            <?php        include 'include/navbar.php';?>

                <div class="wrapper">

                    <!-- main content part of cart starts here -->
                    <div class="main" style="background-color: transparent;">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 ">
                                    <h2>Cart</h2>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">

                                </div>
                            </div>
                        </div>



                        <div class="container">
                            <div class="row">
                                <!--left part starts here-->
                                <div class=" col-lg-9 col-md-9 col-sm-9 col-xm-12">
                                    <div class="table-responsive">
                                        <table class="custom_table2">
                                            <thead>
                                                <tr>
                                                    <th>{{item}}</th>
                                                    <th>{{i_name}}</th>
                                                    <th>{{price}}</th>
                                                    <th>{{quntity}}</th>
                                                    <th>{{total}}</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="<?php echo $cms->baseUrl(" assets/img/ts_step_01.png "); ?>" class="img-rounded" alt="Image missing" width="104" height="100"></td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">play 'Titoudao' returns in March</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">TK. 130</p>
                                                        </div>
                                                    </td>

                                                    <td class="sprinoff">
                                                        <div class="input-group">
                                                            <span class="input-group-addon minus">-</span>
                                                            <input type="text" value="0" class="form-control">
                                                            <span class="input-group-addon plus">+</span>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <p id="cart_Left_Table_p">৳ 100.00 </p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-fab btn-fab-mini btn-round danger-rounded-outline waves-effect"><i class="fa fa-close" aria-hidden="true">&nbsp;</i></button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="<?php echo $cms->baseUrl(" assets/img/ts_step_01.png "); ?>" class="img-rounded" alt="Image missing" width="104" height="100"></td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">play 'Titoudao' returns in March</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">TK. 130</p>
                                                        </div>
                                                    </td>

                                                    <td class="sprinoff">
                                                        <div class="input-group">
                                                            <span class="input-group-addon minus">-</span>
                                                            <input type="text" value="0" class="form-control">
                                                            <span class="input-group-addon plus">+</span>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <p id="cart_Left_Table_p">৳ 100.00 </p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-fab btn-fab-mini btn-round danger-rounded-outline waves-effect"><i class="fa fa-close" aria-hidden="true">&nbsp;</i></button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="<?php echo $cms->baseUrl(" assets/img/ts_step_01.png "); ?>" class="img-rounded" alt="Image missing" width="104" height="100"></td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">play 'Titoudao' returns in March</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">TK. 130</p>
                                                        </div>
                                                    </td>

                                                    <td class="sprinoff">
                                                        <div class="input-group">
                                                            <span class="input-group-addon minus">-</span>
                                                            <input type="text" value="0" class="form-control">
                                                            <span class="input-group-addon plus">+</span>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <p id="cart_Left_Table_p">৳ 100.00 </p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-fab btn-fab-mini btn-round danger-rounded-outline waves-effect"><i class="fa fa-close" aria-hidden="true">&nbsp;</i></button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="<?php echo $cms->baseUrl(" assets/img/ts_step_01.png "); ?>" class="img-rounded" alt="Image missing" width="104" height="100"></td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">play 'Titoudao' returns in March</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-group">
                                                            <p id="cart_Left_Table_p">TK. 130</p>
                                                        </div>
                                                    </td>

                                                    <td class="sprinoff">
                                                        <div class="input-group">
                                                            <span class="input-group-addon minus">-</span>
                                                            <input type="text" value="0" class="form-control">
                                                            <span class="input-group-addon plus">+</span>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <p id="cart_Left_Table_p">৳ 100.00 </p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-fab btn-fab-mini btn-round danger-rounded-outline waves-effect"><i class="fa fa-close" aria-hidden="true">&nbsp;</i></button>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>

                                    

                                </div>
                                <!--Left part ends here-->
                                <!--Right part starts here-->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xm-12 rightPart">
                                    <div class="table-responsive">
                                        <h3>{{cart_summary}}</h3>
                                        <table class="table custom_table2">

                                            <tr>
                                                <td>{{st_item}}</td>
                                                <td class="text-right">5</td>
                                            </tr>

                                            <tr>
                                                <td>{{st_price}}</td>
                                                <td class="text-right">TK. 1280</td>
                                            </tr>

                                            <tr>
                                                <td>{{st_discount}}</td>
                                                <td class="text-right">TK. 200</td>
                                            </tr>

                                            <tr>
                                                <td>{{st_tax}}</td>
                                                <td class="text-right">TK. 100</td>
                                            </tr>

                                            <tr>
                                                <td>{{st_shopping}}</td>
                                                <td class="text-right"><b>FREE!</b></td>
                                            </tr>

                                            <tr>
                                                <td>{{st_subtotal}}</td>
                                                <td class="text-right">TK. 980</td>
                                            </tr>

                                        </table>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                                <div class="form-group label-floating success">
                                                    <label class="control-label">Copne Code</label>
                                                    <input type="text" class="form-control" name="senderName" id="senderNameId">
                                                </div>
                                                <br>
                                                <div class="">
                                                    <button class="btn btn-raised btn-success btn-block btn-login waves-effect text-center" type="button">{{btn_apply}}<i class="fa fa-check-square" aria-hidden="true"></i>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <a href="checkout3.php">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                    <button class="btn btn-raised btn-success btn-block btn-login waves-effect text-center" type="button">{{btn_checkout}}<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </a>
                                            <p class="text-center">{{btn_ctext}}</p>
                                        </div>
                                    </div>


                                </div>
                                <!--Right part ends here-->

                            </div>
                        </div>
                        <!-- Cart section ends here -->

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
                    <!-- main content part of cart ends here -->

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
                <!--  End Modal -->
                <!--Please Don't Remove This Part-->
                <!--<div id="checkRadios"  style="display: none !important;">
            <div class="row">
                <div style="display: none;" class="col-sm-3">
                    <div class="title">
                        <h3>Sliders</h3>
                    </div>

                    <div id="sliderRegular" class="slider"></div>
                    <div id="sliderDouble" class="slider slider-info"></div>
                </div>
            </div>
        </div>-->

                <?php echo $cms->angularJs(array('cart_angular'));?>
                <?php echo $cms->fotterJs(array('cart'));?>
                    
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