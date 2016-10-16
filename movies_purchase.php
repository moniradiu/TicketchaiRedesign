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
        echo $cms->pageTitle("movies_purchase | Ticket Chai");
        ?>

            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

            <?php
        echo $cms->headCss(array("moviesPurchase"));
        ?>
    </head>

    <body class="index-page signin" ng-app="frontEnd" ng-controller="movies_purchaseController">
        <?php echo $cms->FbSocialScript(); ?>
            <?php include 'include/navbar.php';?>

                <div class="clearfix"></div>
                <div class="wrapper">
                    <!-- main content part starts here -->
                    <div class="main" style="background-color: transparent; margin-top: 70px;">
                        <!-- Carousel Starts Here -->
                        <div id="imageShowCase" class="owl-carousel">
                            <div class="item">
                                <img src="<?php echo $cms->baseUrl('assets/img/movies/web-showcase_tmrw_movie-page.jpg'); ?>" alt="1" class="banner-img img-fluid img-responsive" style="opacity: 0.7;" />
                                <div class="carousel-item-overlay hidden-xs">
                                    <a href="#" name="uvi6WZKHCJ0" id="play-button" data-toggle="modal" data-target="#myModal" class="dtplay"></a>
                                    <a href="#!" class="movie-thumb">
                                <img class="ch-image-reflect img-thumbnail"  src="<?php echo $cms->baseUrl('assets/img/movies/small-thumbs/ET00032119.jpg'); ?>"/>
                            </a>
                                    <div class="ci-overlay-bottom">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-3">
                                            <h1 title="21st" id="eventTitle" class="bold movie_title padding_top10"><i class="fa fa-film" aria-hidden="true">&nbsp;</i> Dishoom</h1>
                                            <p class="text-white text-capitalize bold"> <i class="fa fa-language" aria-hidden="true"></i>&nbsp; English</p>
                                            <button type="button" class="btn success-rounded-outline btn-sm btn-round waves-effect movie_genre_btn">Horror</button>
                                            <button type="button" class="btn success-rounded-outline btn-sm btn-round waves-effect movie_genre_btn">Romance</button>
                                            <br/>
                                            <span class="margin5 text-white text-capitalize bold"><i aria-hidden="true" class="fa fa-calendar">&nbsp;</i> 30 JUN 2016</span>
                                            <span class="margin5 text-white text-capitalize bold"><i aria-hidden="true" class="fa fa-clock-o">&nbsp;</i> 11:30AM</span>
                                        </div>
                                        <div class="col-md-4 text-left">
                                            <h6 class="text-left text-white bold">DIRECTOR: </h6>
                                            <p class="text-left text-white">Duncan Jones</p>
                                            <h6 class="text-left text-white bold">CAST: </h6>
                                            <p class="text-left text-white">Duncan Jones</p>
                                        </div>
                                        <div class="col-md-2 text-right">
                                            <div class="social-share">
                                                <button class="btn btn-fab btn-fab-mini btn-round btn-facebook">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-fab btn-fab-mini btn-round btn-twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-fab btn-fab-mini btn-round btn-google">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Core -->
                        <!-- Modal -->
                        <div class="modal modal-fullscreen fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <!--Content-->
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header text-right">
                                        <button type="button" class="btn btn-fab" data-dismiss="modal">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
                                        <div id="player"></div>

                                        <!-- The Play-Link will appear in that div after the video was loaded -->
                                        <div id="play"></div>



                                        <!--<iframe id="video" width="100%" height="500px" src="https://www.youtube.com/embed/uvi6WZKHCJ0?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">


                                    </div>
                                </div>
                                <!--/.Content-->
                            </div>
                        </div>
                        <!-- /.Live preview-->
                        <!-- ./Modal Core -->
                        <!-- Carousel Ends Here -->
                        <div class="clearfix"></div>
                        <!-- Movie Ticket Purchase section starts here -->
                        <div class="section-simple2">
                            <div class="container-fluid">
                                <div class="row section_padd30">
                                    <!-- Here Goes Custom Movie Information Only Visible At Extra Small Devices-->
                                    <!--                            <div class="">
                                                            <div class="col-xs-4">
                                                                <h1  title="21st" id="eventTitle" class="bold movie_title padding_top10"><i class="fa fa-film" aria-hidden="true">&nbsp;</i> Dishoom</h1>
                                                                <p class="text-white text-capitalize bold"> <i class="fa fa-language" aria-hidden="true"></i>&nbsp; English</p>
                                                                <button type="button" class="btn success-rounded-outline btn-sm btn-round waves-effect movie_genre_btn">Horror</button>
                                                                <button type="button" class="btn success-rounded-outline btn-sm btn-round waves-effect movie_genre_btn">Romance</button>
                                                                <br/>
                                                                <span class="margin5 text-white text-capitalize bold"><i aria-hidden="true" class="fa fa-calendar">&nbsp;</i> 30 JUN 2016</span>
                                                                <span class="margin5 text-white text-capitalize bold"><i aria-hidden="true" class="fa fa-clock-o">&nbsp;</i> 11:30AM</span>
                                                            </div>
                                                            <div class="col-xs-4 text-left">
                                                                <h4 class="text-left text-white bold">DIRECTOR</h4>
                                                                <p class="text-white">Duncan Jones</p>
                                                                <h4 class="text-left text-white bold">CAST</h4>
                                                                <p class="text-white">Duncan Jones</p>
                                                                <h4 class="text-left text-white bold">RUNTIME</h4>
                                                                <p class="text-white">Duncan Jones</p>
                                                            </div>
                                                            <div class="col-xs-4 text-left">
                                                                <h4 class="text-left text-white bold">RELEASE DATE</h4>
                                                                <p class="text-white">Duncan Jones</p>
                                                                <h4 class="text-left text-white bold">RATING</h4>
                                                                <p class="text-white">Duncan Jones</p>
                                                                <h4 class="text-left text-white bold">RATING</h4>
                                                                <p class="text-white">Duncan Jones</p>
                                                            </div>
                                                        </div>-->
                                    <!-- ./Here Ends Custom Movie Information Only Visible At Extra Small Devices-->
                                    <!-- Here goes custom Html from movie ticket purchase page -->
                                    <div id="movie-detail-tp" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <!-- left part starts here -->
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="panel panel-default panel-movies">
                                                <div class="panel-heading">
                                                    <h1 class="panel-name h1-responsive">{{movieHeading}}<strong>{{movieHeading_span}}</strong></h1>
                                                </div>

                                               


                                                <div class="panel-body">
                                                    <h4 class="panel-title h4-responsive padding-10">{{booking_tickets}}</h4>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-12">
                                                                    <h4 class="currnt-rqt pull-left"><b>{{request_date}}</b> <br/><b class="text-success pull-left h4-responsive">2016-08-06</b> </h4>
                                                                </div>
                                                                <div class="col-md-7 col-sm-12">
                                                                    <h4 class="text-left"> <b>{{select_date}}</b> </h4>
                                                                    <div class="padding_bottom10">
                                                                        <button class="btn btn-success btn-fab btn-round bold">5 Aug</button>
                                                                        <button class="btn btn-danger btn-fab btn-round bold">6 Aug</button>
                                                                        <button class="btn btn-success btn-fab btn-round bold">7 Aug</button>
                                                                        <button class="btn btn-success btn-fab btn-round bold">8 Aug</button>
                                                                        <button class="btn btn-success btn-fab btn-round bold">9 Aug</button>
                                                                        <button class="btn btn-success btn-fab btn-round bold">10 Aug</button>
                                                                        <button class="btn btn-success btn-fab btn-round bold">11 Aug</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item table-responsive">
                                                            <table class="table table-bordered seat-tbl">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th class="text-center">{{tbl_H1}}</th>
                                                                        <th class="text-center">{{tbl_H2}}</th>
                                                                        <th class="text-center">{{tbl_H3}}</th>
                                                                        <th class="text-center">{{tbl_H4}}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td class="bg-primary">1</td>
                                                                        <td class="text-danger">mohol</td>
                                                                        <td class="text-info">12:00 PM</td>
                                                                        <td>
                                                                            <button class="btn success-rounded-outline waves-effect btn-tkt-tbl" type="button"><i class="fa fa-ticket" aria-hidden="true">&nbsp;</i> {{get_tickets}}</button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="bg-primary">2</td>
                                                                        <td class="text-danger">pingira</td>
                                                                        <td class="text-info">3:00 PM</td>
                                                                        <td>
                                                                            <button class="btn success-rounded-outline waves-effect btn-tkt-tbl" type="button"><i class="fa fa-ticket" aria-hidden="true">&nbsp;</i> {{get_tickets}}</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="panel-footer text-center">
                                                    <a href="movies.php" class="btn btn-sm pf-btn waves-effect"><i class="fa fa-arrow-circle-o-left" aria-hidden="true">&nbsp;</i> {{backTo_moviePage}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./left part ends here -->
                                        <!-- right part starts here -->
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div id="movie_cart">
                                                <div class="panel panel-ticket">
                                                    <div id="headingTwo" role="tab" class="panel-heading bg-success">
                                                        <h1 class="panel-name h1-responsive">
                                                    {{ticket_details}} <strong>{{ticket_detailsSpan}}</strong>
                                                </h1>
                                                    </div>
                                                    <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse in" id="collapseTwo">
                                                        <div class="panel-body">
                                                            <h4 class="panel-title h4-responsive padding-10">{{ticket_detailsText}}</h4>
                                                            <table class="table table-movie-rate text-left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><i class="fa fa-ticket"></i></td>
                                                                        <td>{{tickets_type}} <b>:</b></td>
                                                                        <td id="s_ticket_type">0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><i class="fa fa-ticket"></i></td>
                                                                        <td>{{tickets_price}} <b>:</b></td>
                                                                        <td id="s_ticket_price">0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><i class="fa fa-ticket"></i></td>
                                                                        <td>{{tickets_quantity}} <b>:</b></td>
                                                                        <td id="s_ticket_quantity">0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><i class="fa fa-ticket"></i></td>
                                                                        <td>{{tickets_amount}} <b>:</b></td>
                                                                        <td id="s_ticket_total_amount">0.00</td>
                                                                    </tr>
                                                                    <tr style="display: none;" class="hidecost">
                                                                        <td><i class="fa fa-ticket"></i></td>
                                                                        <td>{{tickets_APIcharge}} <b>:</b></td>
                                                                        <td>2.50%</td>
                                                                    </tr>
                                                                    <input type="hidden" value="2.50" id="cost_amount_array">
                                                                    <input type="hidden" value="2" id="cost_deduct_array">
                                                                    <input type="hidden" value="0" id="hidden_cost_total">
                                                                    <tr style="display: none;" class="hidecost_city_delivery">
                                                                        <td><i class="fa fa-ticket"></i></td>
                                                                        <td>{{tickets_deliveryCharge}} <b>:</b></td>
                                                                        <td id="delivery_cost">0.00</td>
                                                                    </tr>
                                                                    <tr id="s_total_amount_row" style="border-bottom: 2px solid #000000; border-top: 2px solid #000000;">
                                                                        <td colspan="2" class="bold">{{tickets_Tamount}} <b>:</b></td>
                                                                        <td id="s_total_amount">0.00</td>
                                                                    </tr>
                                                                    <input type="hidden" value="2.5" id="total_invoice" />
                                                                    <tr>
                                                                        <td><i class="fa fa-bed"></i></td>
                                                                        <td>{{seat_num}} <b>:</b></td>
                                                                        <td><a href=""><i class="fa fa-ticket"></i> <span id="s_seat_no">0,0</span></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><i class="fa fa-arrow-circle-down"></i></td>
                                                                        <td>{{seat_holdTime}} <b>:</b></td>
                                                                        <td><a href=""><i class="fa fa-clock-o"></i> 20 Min </a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./right part ends here -->
                                    </div>
                                    <!-- ./Here goes custom Html from movie ticket purchase page -->
                                </div>
                            </div>
                        </div>
                        <!-- Movie Ticket Purchase section ends here -->
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



                <?php echo $cms->fotterJs(array('movies_purchase'));?>
                    <?php echo $cms->angularJs(array('mPurchase_angular'));?>
                        <script>
                            new WOW().init();
                            $('.selectpicker').selectpicker();
                        </script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $("#imageShowCase").mouseenter(function () {
                                    $('#ts-prev').addClass('active-ps-nav');
                                    $('#ts-next').addClass('active-ps-nav');
                                }).mouseleave(function () {
                                    $('#ts-prev').removeClass('active-ps-nav');
                                    $('#ts-next').removeClass('active-ps-nav');
                                });
                                /*$('.hidden-buttons').hide();
                                 $(".movie").mouseenter(function () {
                                 $('.hidden-buttons').show();
                                 }).mouseleave(function () {
                                 $('.hidden-buttons').hide();
                                 });*/
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
                            $(document).ready(function (e) {
                                $('a.tplay').on('click', function () {
                                    player.playVideo();
                                    $('.navbar-fixed-top').hide();
                                });

                                $('#myModal').on('click', function () {
                                    player.stopVideo();
                                    $('.navbar-fixed-top').show();
                                    location.reload();
                                });

                            });
                        </script>

                        <script>
                            $(document).ready(function (n) {
                                $('a.tplay').click(function () {
                                    var ytvidid = $(this).attr("name");
                                    //alert(ytvidid);
                                });
                            });
                            // 2. This code loads the IFrame Player API code asynchronously.
                            var tag = document.createElement('script');

                            tag.src = "https://www.youtube.com/iframe_api";
                            var firstScriptTag = document.getElementsByTagName('script')[0];
                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                            // 3. This function creates an <iframe> (and YouTube player)
                            //    after the API code downloads.
                            var player;

                            function onYouTubeIframeAPIReady() {
                                player = new YT.Player('player', {
                                    height: '500',
                                    width: '100%',
                                    videoId: 'uvi6WZKHCJ0',
                                    events: {
                                        'onClick': onPlayerReady,
                                        'onStateChange': onPlayerStateChange
                                    }
                                });



                            }

                            // 4. The API will call this function when the video player is ready.
                            function onPlayerReady(event) {
                                event.target.playVideo();
                            }



                            // 5. The API calls this function when the player's state changes.
                            //    The function indicates that when playing a video (state=1),
                            //    the player should play for six seconds and then stop.
                            var done = false;

                            function onPlayerStateChange(event) {
                                if (event.data == YT.PlayerState.PLAYING && !done) {
                                    //stopVideo;
                                    //setTimeout(stopVideo, 6000);
                                    done = true;
                                }
                            }

                            function stopVideo() {
                                player.stopVideo();
                            }
                        </script>
                        <script>
                            $(document).on('ready', function () {
                                $('.crosscover').crosscover({
                                    dotsNav: false
                                });
                            });
                        </script>
                        <script>
                            $(document).ready(function () {
                                var imageShowCase = $("#imageShowCase");

                                imageShowCase.owlCarousel({
                                    autoPlay: 4000,
                                    stagePadding: 50,
                                    loop: true,
                                    margin: 10,
                                    stopOnHover: true,
                                    navigation: false,
                                    pagination: true,
                                    paginationSpeed: 1000,
                                    goToFirstSpeed: 2000,
                                    singleItem: true,
                                    autoHeight: true
                                });

                                // Custom Navigation Events
                                $("#ts-next").click(function () {
                                    imageShowCase.trigger('owl.next');
                                })
                                $("#ts-prev").click(function () {
                                    imageShowCase.trigger('owl.prev');
                                })

                                /*$(".play").click(function () {
                                 owl.trigger('owl.play', 1000);
                                 })
                                 $(".stop").click(function () {
                                 owl.trigger('owl.stop');
                                 })
                                 
                                 $("#imageShowCase").mouseover(function () {
                                 $("#ps-next").addClass('active-ps-nav-next');
                                 $("#ps-prev").addClass('active-ps-nav-prev');
                                 });
                                 $("#imageShowCase").mouseout(function () {
                                 $("#ps-next").removeClass('active-ps-nav-next');
                                 $("#ps-prev").removeClass('active-ps-nav-prev');
                                 });*/




                                $(function () {
                                    $('[data-toggle="tooltip"]').tooltip()
                                })

                                $(".modal-fullscreen").on('show.bs.modal', function () {
                                    setTimeout(function () {
                                        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
                                    }, 0);
                                });
                                $(".modal-fullscreen").on('hidden.bs.modal', function () {
                                    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
                                });
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
    </body>

    </html>