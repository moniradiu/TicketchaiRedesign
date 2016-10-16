<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of plugin
 *
 * @author MD MAHAMUDUR ZAMAN BHUYIAN <fahad at fahadbhuyian.com>
 */
class plugin {
    /* /////////////////////////// */

//      page Title start
    /* /////////////////////////// */
    public function pageTitle($title = '') {
        $page_title = '';
        if (empty($title)) {
            $page_title .='Ticketchai | Home ';
        } else {
            $page_title .=$title;
        }

        return "<title>" . $page_title . "</title>";
    }

    /* /////////////////////////// */

//      page Title  end
    /* /////////////////////////// */

    /* /////////////////////////// */
//      public css start
    /* /////////////////////////// */
    public function headCss($array = array()) {
        if (!empty($array)) {
            if (in_array("home", $array)) {
                $css = '';
                $css .=$this->SiteBasicCss();
                $css .=$this->owlCss();
                return $css;
            } elseif (in_array("bus", $array)) {
                $css = '';
                $css .=$this->SiteBasicCss();
                $css .=$this->bus_tctCss();
                return $css;
            } elseif (in_array("cart", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->cartCss();
                $css .= $this->checkout1Css();
                return $css;
            } elseif (in_array("checkout1", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->checkout1Css();
                return $css;
            } elseif (in_array("checkout3", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->checkout3Css();
                return $css;
            } elseif (in_array("contactPage", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->contactPageCss();
                return $css;
            } elseif (in_array("unsubscribe_newsletter", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                return $css;
            } elseif (in_array("eventTickets", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->eventTicketsCss();
                return $css;
            } elseif (in_array("events", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->events();
                return $css;
            } elseif (in_array("movies", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->owlCss();
                $css .= $this->moviesCss();
                return $css;
            } elseif (in_array("moviesPurchase", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->moviesCss();
                return $css;
            } elseif (in_array("order", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->orderCss();
                return $css;
            } elseif (in_array("sitemap", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->sitemap();
                return $css;
            } elseif (in_array("sitemapBuy", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->sitemap();
                return $css;
            } elseif (in_array("sitemapCustomarSupport", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->sitemap();
                return $css;
            } elseif (in_array("sitemapSponsor", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->sitemap();
                $css .= $this->bootstarpSocial();
                return $css;
            } elseif (in_array("sitemapTerms", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->sitemap();
                return $css;
            } elseif (in_array("wishList", $array)) {
                $css = '';
                $css .= $this->SiteBasicCss();
                $css .= $this->wishlistCss();
                return $css;
            }
        } else {
            return $this->SiteBasicCss();
        }
    }

    /* /////////////////////////// */

//      public css end
    /* /////////////////////////// */


    /* /////////////////////////// */
//      public js start
    /* /////////////////////////// */
    public function fotterJs($array = array()) {
        if (!empty($array)) {
            if (in_array("home", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            } elseif (in_array("checkout1", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->checkout1Js();
                $js .=$this->bootstrapselectpickerJs();
                $js . -$this->bootstrapdatePickerJs();
                $js .=$this->CountDownJS();
                return $js;
            } elseif (in_array("checkout3", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->coreJs();
                $js .=$this->cardJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->bootstrapselectpickerJs();
                return $js;
            } elseif (in_array("signup", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("signin", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("reset_password", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("order", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("bus_tickets", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("events", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("event_tickets", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("contact_page", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("contact3", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("contact1", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            
            elseif (in_array("order_favorite", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("order_dashboard", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("order_add", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("wishlist", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("unsubscribeNewsletter", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("subscribeNewsletter", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("sitemap", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("sitemap_terms", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("sitemap_sponsor", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("sitemap_custome_support", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("sitemap_buy", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            }
            elseif (in_array("cart", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->bootstrapdatePickerJs();
                $js .=$this->crossOverJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->cardJs();
                return $js;
            } elseif (in_array("movie", $array)) {
                $js = '';
                $js .=$this->SiteBasicJs();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("movies", $array)) {
                $js = '';
                $js .=$this->coreJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->bootstrapselectpickerJs();
                $js .=$this->cardJs();
                $js .=$this->crossOverJs();
                $js .=$this->materialkitJs();
                return $js;
            }
            elseif (in_array("movies_purchase", $array)) {
                $js = '';
                $js .=$this->coreJs();
                $js .=$this->OwlcarouselJs();
                $js .=$this->bootstrapselectpickerJs();
                $js .=$this->cardJs();
                $js .=$this->crossOverJs();
                $js .=$this->materialkitJs();
                return $js;
            }
        } else {
            $js = '';
            $js .=$this->SiteBasicJs();
            return $js;
        }
    }

    /* /////////////////////////// */

//      public js end
    /* /////////////////////////// */


    /* /////////////////////////// */
//      pivate CSS & JS binding start
    /* /////////////////////////// */
    private function SiteBasicCss() {
        $basiccss = '';
        $basiccss .=$this->coreCss();
        $basiccss .=$this->siteFonts();
        //$basiccss .=$this->otherCss();
        return $basiccss;
    }

    private function SiteBasicJs() {
        $basicjs = '';
        $basicjs .=$this->coreJs();
        $basicjs .=$this->materialkitJs();
        $basicjs .=$this->crossOverJs();
        return $basicjs;
    }

    /* /////////////////////////// */

//      pivate CSS & JS binding end
    /* /////////////////////////// */


    /* /////////////////////////// */
//      Font CSS file include start 
    /* /////////////////////////// */
    private function siteFonts() {
        $fontcss = '';
        $fontcss .='<!-- Fonts and icons -->
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/icon.css") . '" />
        <link rel="stylesheet" type="text/css" href="' . $this->baseUrl("assets/css/fonts.css") . '" />
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/fontello-2910d963/css/fontello.css") . '" />
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/font-awesome-4.6.3/css/font-awesome.min.css") . '" />
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/pe-icon-7-stroke.css") . '" />';

        return $fontcss;
    }

    /* /////////////////////////// */
//      Font CSS file include end
    /* /////////////////////////// */
    
    
        /* /////////////////////////// */
//      bootstrap social file include start 
    /* /////////////////////////// */
    private function bootstarpSocial() {
        $css = '';
        $css .= '<link rel="stylesheet" href="' . $this->baseUrl("plugins/bootstrap-social-gh-pages/bootstrap-social.css") . '">
                ';
        return $css;
    }
            /* /////////////////////////// */
//      bootstrap social file include end
    /* /////////////////////////// */


    /* /////////////////////////// */
//      Core CSS file include start 
    /* /////////////////////////// */
    private function coreCss() {
        $corecss = '';
        $corecss .= ' <!-- CSS Files -->
        <link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/normalize.css") . ' ">
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/bootstrap.min.css") . '"/>
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/material-kit.css") . '"/>
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/animate.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/link-effects.css") . '">
        
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/mdb/css/mdb.min62d0.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/Simple-Background-Carousel-Plugin-with-jQuery-and-Animate-css-Crosscover/dist/css/crosscover.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/x-hipster-as-f-cards-v1.1/assets/css/hipster_cards.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/Waves-master/dist/waves.min.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/odometer-master/odometer-theme-default.css") . '">    
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.css") . '"> 
        
        ';

        return $corecss;
    }

    /* /////////////////////////// */

//      Core CSS file include end 
    /* /////////////////////////// */


    /* /////////////////////////// */
//      Other CSS file include start 
    /* /////////////////////////// */
    private function otherCss() {
        $otherCss = '';
        $otherCss .= '
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/demo.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/fontello-codes.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/fontello-embedded.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/fontello-ie7-codes.css") . '"> 
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/fontello-ie7.css") . '"> 
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/fontello.css") . '">';
        return $otherCss;
    }

    /* /////////////////////////// */

//      Other CSS file include end 
    /* /////////////////////////// */


    /* /////////////////////////// */
//      page CSS file include start 
    /* /////////////////////////// */
    private function eventTicketsCss() {
        $eventTicketsCss = "";
        $eventTicketsCss .= '    
                <link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/eventTickets.css") . ' ">
                <link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/mediaQuery.css") . ' ">    
                 ';
        return $eventTicketsCss;
    }

    private function bus_tctCss() {
        $bus_tctCss = '';
        $bus_tctCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/bus_tct.css") . ' ">';
        return $bus_tctCss;
    }

    private function checkout1Css() {
        $checkout1Css = '';
        $checkout1Css .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/checkout1.css") . ' ">';
        return $checkout1Css;
    }

    private function checkout3Css() {
        $checkout3Css = '';
        $checkout3Css .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/checkout3.css") . ' ">';
        return $checkout3Css;
    }

    private function moviesCss() {
        $moviesCss = '';
        $moviesCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/movies.css") . ' ">';
        return $moviesCss;
    }

    private function sitemapCss() {
        $sitemapCss = '';
        $sitemapCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/sitemap.css") . ' ">';
        return $sitemapCss;
    }

    private function orderCss() {
        $orderCss = '';
        $orderCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/order.css") . ' ">';
        return $orderCss;
    }

    private function wishlistCss() {
        $wishlistCss = '';
        $wishlistCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/wishlist.css") . ' ">';
        return $wishlistCss;
    }

    private function owlCss() {
        $owlcss = '';
        $owlcss .=' <!-- For Owl Carousel -->
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/owl.carousel/owl-carousel/owl.carousel.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/owl.carousel/owl-carousel/owl.theme.css") . '">
        <link rel="stylesheet" href="' . $this->baseUrl("plugins/owl.carousel/owl-carousel/owl.transitions.css") . '">';
        return $owlcss;
    }

    private function cartCss() {
        $cartCss = '';
        $cartCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/cart.css") . ' ">';
        return $cartCss;
    }

    private function contactPageCss() {
        $contactPageCss = '';
        $contactPageCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/contactPage.css") . ' ">';
        return $contactPageCss;
    }

    private function eventTickets() {
        $eventTicketsCss = '';
        $eventTicketsCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/eventTickets.css") . ' ">';
        return $eventTicketsCss;
    }

    private function events() {
        $eventTicketsCss = '';
        $eventTicketsCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/events.css") . ' ">';
        return $eventTicketsCss;
    }

    private function sitemap() {
        $eventTicketsCss = '';
        $eventTicketsCss .= '<link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/sitemap.css") . ' ">';
        return $eventTicketsCss;
    }


    /* /////////////////////////// */

//      page CSS file include end 
    /* /////////////////////////// */

    /* /////////////////////////// */
//      page JS file include start 
    /* /////////////////////////// */
     
    
    private function coreJs() {
        $corejs = '';
        $corejs .= '
        <script src="' . $this->baseUrl("assets/js/jquery.min.js") . '" type="text/javascript"></script>
        <script src="' . $this->baseUrl("assets/js/bootstrap.min.js") . '" type="text/javascript"></script>
        <script src="' . $this->baseUrl("assets/js/bootstrap-hover-dropdown.min.js") . '" type="text/javascript"></script>
        <script src="' . $this->baseUrl("assets/js/material.min.js") . '"></script>
        <script src="' . $this->baseUrl("assets/js/nouislider.min") . '"></script>
        <script src="' . $this->baseUrl("plugins/mdb/js/mdb.min.js") . '"></script>
        <script src="' . $this->baseUrl("plugins/mdb/js/tether.min.js") . '"></script>
        <script src="' . $this->baseUrl("plugins/x_lbd_free_v1.3/assets/js/pro/bootstrap-selectpicker.js") . '"></script>';

        return $corejs;
    }

    private function materialkitJs() {
        $materialkitjs = '';
        $materialkitjs = ' <!-- material-kit js-->    
        <script src="' . $this->baseUrl("assets/js/material-kit.js") . '" type="text/javascript"></script>';
        return $materialkitjs;
    }

    private function cardJs() {
        $cardjs = '';
        $cardjs = '<!--Card sector Js -->  
        <script src="' . $this->baseUrl("plugins/x-hipster-as-f-cards-v1.1/assets/js/hipster-cards.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("plugins/Waves-master/dist/waves.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("plugins/odometer-master/odometer.min.js") . '" type="text/javascript"></script>
        <script src="' . $this->baseUrl("plugins/WOW-master/dist/wow.min.js") . '" type="text/javascript"></script>';
        return $cardjs;
    }

    private function bootstrapselectpickerJs() {
        $bootstrapselectpickerjs = '';
        $bootstrapselectpickerjs = '<!--Bootstrap Select Picker -->  
        <script src="' . $this->baseUrl("assets/js/pro/bootstrap-selectpicker.js") . '" type="text/javascript"></script>';
        return $bootstrapselectpickerjs;
    }

    private function bootstrapdatePickerJs() {
        $bootstrapdatepickerjs = '';
        $bootstrapdatepickerjs = '<!--Bootstrap Date Picker -->  
        <script src="' . $this->baseUrl("assets/js/bootstrap-datepicker.js") . '" type="text/javascript"></script>';
        return $bootstrapdatepickerjs;
    }

    private function crossOverJs() {
        $meta = "";
        $meta .= '<!-- Crosscoverjs-->    
                  <script src="' . $this->baseUrl("plugins/Simple-Background-Carousel-Plugin-with-jQuery-and-Animate-css-Crosscover/dist/js/crosscover.js") . '" charset="utf-8"></script>';
        $meta .="<script>
                $(document).on('ready', function () {
                        $('.crosscover').crosscover({
                            dotsNav: false
                        });
                    });
                </script>";
        return $meta;
    }

    private function OwlcarouselJs() {
        $Owlcarouseljs = '';
        $Owlcarouseljs.='<!-- For Owl Carousel Js -->
                <script src="' . $this->baseUrl("plugins/owl.carousel/owl-carousel/owl.carousel.min.js") . '" type="text/javascript"></script>';
        return $Owlcarouseljs;
    }

    private function bus_tctJs() {
        $bus_tctJs = '';
        $bus_tctJs .= '<!--Core JS Files-->
        <script src="' . $this->baseUrl("plugins/FlipClock-master/compiled/jquery.min.js") . '"></script>
        <script src="' . $this->baseUrl("plugins/FlipClock-master/compiled/flipclock.js") . '"></script>';

        return $bus_tctJs;
    }

    private function checkout1Js() {
        $checkout1Js = '';
        $checkout1Js .= '<!--Checkout1 JS Files-->
       <script src="http://maps.googleapis.com/maps/api/js"></script>';
        return $checkout1Js;
    }

    private function CountDownJS() {
        $CountDownjs = '';
        $CountDownjs = '<!--CountDownJS  -->  
        <script src="' . $this->baseUrl("Countdown/CountDownJS.js") . '" type="text/javascript"></script>';
        return $CountDownjs;
    }

    /* /////////////////////////// */

//      page JS file include end 
    /* /////////////////////////// */


    /* /////////////////////////// */
//      Base URL start 
    /* /////////////////////////// */
    public function baseUrl($suffix = '') {
        $protocol = strpos($_SERVER['SERVER_SIGNATURE'], '443') !== false ? 'https://' : 'http://';
        //$web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "Dropbox/odesk/pos/";
        if ($_SERVER['HTTP_HOST'] == "localhost") {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "ticketchai_aj/tc-merchant-template/";
        } elseif ($_SERVER['HTTP_HOST'] == "192.168.1.48") {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "ticketchai_aj/tc-merchant-template/";
        } else {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "";
        }

        $suffix = ltrim($suffix, '/');
        return $web_root . trim($suffix);
    }

    /* /////////////////////////// */

//      Base URL end 
    /* /////////////////////////// */

    public function FbSocialScript() {
        $cms = '';
        $cms .='<div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                fjs.parentNode.insertBefore(js, fjs);
            }(document,"script","facebook-jssdk"));
        </script>';
        return $cms;
    }


    ###################################################
       ## Angular js start
    ###################################################

    public function baseUrlAngular($suffix = '') {
        $protocol = strpos($_SERVER['SERVER_SIGNATURE'], '443') !== false ? 'https://' : 'http://';
        //$web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "Dropbox/odesk/pos/";
        if ($_SERVER['HTTP_HOST'] == "localhost") {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "ticketchai_aj/angularJs/";
        } elseif ($_SERVER['HTTP_HOST'] == "192.168.1.48") {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "ticketchai_aj/angularJs/";
        } else {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "";
        }

        $suffix = ltrim($suffix, '/');
        return $web_root . trim($suffix);
    }
    
    public function angularJs($array = array()) {
        if (!empty($array)) {
            if (in_array("index", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this-> indexAngular();
                return $js;
            } elseif (in_array("bus_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->busAngular(); 
                return $js;
            } elseif (in_array("cart_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->cartAngular(); 
                return $js;
            } elseif (in_array("checkout1_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->checkout1Angular(); 
                return $js;
            } elseif (in_array("checkout3_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->checkout3Angular(); 
                return $js;
            } elseif (in_array("contact_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->contactAngular(); 
                return $js;
            } elseif (in_array("events_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->eventsAngular(); 
                return $js;
            } elseif (in_array("eTickets_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->event_ticketAngular(); 
                return $js;
            } elseif (in_array("movie_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->movieAngular(); 
                return $js;
            } elseif (in_array("mPurchase_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->movie_purchaseAngular(); 
                return $js;
            } elseif (in_array("oAdd_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->order_addAngular(); 
                return $js;
            } elseif (in_array("oDashboard_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->order_dashboardAngular(); 
                return $js;
            } elseif (in_array("oFavorite_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->order_favoriteAngular(); 
                return $js;
            } elseif (in_array("order_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->orderAngular(); 
                return $js;
            } elseif (in_array("resetPass_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->reset_passAngular(); 
                return $js;
            } elseif (in_array("signin_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->signinAngular(); 
                return $js;
            } elseif (in_array("signup_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->signupAngular(); 
                return $js;
            } 
             elseif (in_array("sitemapBuy_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->sitemap_buyAngular(); 
                return $js;
            } 
             elseif (in_array("sitemapCustomar_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->sitemap_customarAngular(); 
                return $js;
            } 
             elseif (in_array("sitemapSponsor_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->sitemap_sponsorAngular(); 
                return $js;
            } 
             elseif (in_array("sitemapTerms_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->sitemap_termsAngular(); 
                return $js;
            } 
             elseif (in_array("sitemap_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->sitemapAngular(); 
                return $js;
            } 
             elseif (in_array("subscribeNewsletter_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->subscribe_newsletterAngular(); 
                return $js;
            } 
             elseif (in_array("unsubscribeNewsletter_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->unsubscribe_newsletterAngular(); 
                return $js;
            } 
             elseif (in_array("wishlist_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->wishlistAngular(); 
                return $js;
            }
            elseif (in_array("header_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->headerAngular(); 
                return $js;
            }
            elseif (in_array("footer_angular", $array)) {
                $js = '';
                $js .=$this->coreAngular();
                $js .=$this->footerAngular(); 
                return $js;
            } 

        } else {
            $js = '';
            $js .=$this->coreAngular();
            return $js;
        }
    }
            
    private function coreAngular() {
        $corejs = '';
         $corejs .=$this->angular_js();
         //$corejs .=$this->angularBootstrapJs();
        return $corejs;
    }
    
    /* Angular LIBRARY Js  start Here */

    private function angular_js() {
        $angularlibrJs = '';
        $angularlibrJs .='<!--Angular LIBRARY Js--->
        <script src="https://code.angularjs.org/snapshot/angular.js"></script>
        ';
        return $angularlibrJs;
    }

    /*     * *********Angular LIBRARY Js End Here*********** */


    /* Angular Bootstrap Js start */

    private function angularBootstrapJs() {
        $angularBootJs = '';
        $angularBootJs .= '
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap-tpls.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
        return $angularBootJs;
    }

    /*     * ***********Angular Bootstrap Js End Here************ */

    private function busAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/busController.js") . '"></script>';
        return $jsangu;
    }
     private function cartAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/cartController.js") . '"></script>';
        return $jsangu;
    }
     private function checkout1Angular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/checkout1Controller.js") . '"></script>';
        return $jsangu;
    }
     private function checkout3Angular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/checkout3Controller.js") . '"></script>';
        return $jsangu;
    }
     private function contactAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/contact_pageController.js") . '"></script>';
        return $jsangu;
    }
     private function eventsAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/eventsController.js") . '"></script>';
        return $jsangu;
    }
     private function event_ticketAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/event_ticketsController.js") . '"></script>';
        return $jsangu;
    }
     private function indexAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/indexController.js") . '"></script>';
        return $jsangu;
    }
     private function movieAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/moviesController.js") . '"></script>';
        return $jsangu;
    }
     private function movie_purchaseAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/movies_purchaseController.js") . '"></script>';
        return $jsangu;
    }
     private function order_addAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/order-addController.js") . '"></script>';
        return $jsangu;
    }
     private function order_dashboardAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/order-dashboardController.js") . '"></script>';
        return $jsangu;
    }
     private function order_favoriteAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/order-favoriteController.js") . '"></script>';
        return $jsangu;
    }
     private function orderAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/orderController.js") . '"></script>';
        return $jsangu;
    }
     private function reset_passAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/reset_passwordController.js") . '"></script>';
        return $jsangu;
    }
     private function signinAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/signinController.js") . '"></script>';
        return $jsangu;
    }
     private function signupAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/signupController.js") . '"></script>';
        return $jsangu;
    }
     private function sitemap_buyAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/sitemap-buyController.js") . '"></script>';
        return $jsangu;
    }
     private function sitemap_customarAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/sitemap-customar-supportController.js") . '"></script>';
        return $jsangu;
    }
     private function sitemap_sponsorAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/sitemap-sponsorController.js") . '"></script>';
        return $jsangu;
    }
     private function sitemap_termsAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/sitemap-termsController.js") . '"></script>';
        return $jsangu;
    }
     private function sitemapAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/sitemapController.js") . '"></script>';
        return $jsangu;
    }
     private function subscribe_newsletterAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/subscribe_newsletterController.js") . '"></script>';
        return $jsangu;
    }
     private function unsubscribe_newsletterAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/unsubscribe_newsletterController.js") . '"></script>';
        return $jsangu;
    }
    private function wishlistAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/wishlistController.js") . '"></script>';
        return $jsangu;
    }
    private function headerAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/headerController.js") . '"></script>';
        return $jsangu;
    }
    private function footerAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrlAngular("fontEnd/scripts/footerController.js") . '"></script>';
        return $jsangu;
    }



 
    
    
}