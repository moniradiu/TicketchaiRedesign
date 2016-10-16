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
    /*  page Title start */

    public function pageTitle($title = '') {
        $page_title = '';
        if (empty($title)) {
            $page_title .='Ticketchai | Home ';
        } else {
            $page_title .=$title;
        }

        return "<title>" . $page_title . "</title>";
    }

    /*     * ********page Title  end********* */


    /* public css start */

    public function headCss($array = array()) {
        if (!empty($array)) {
            if (in_array("addMoreEventTickets", $array)) {
                $css = '';
                $css .=$this->siteFonts();
                $css .=$this->coreCss();
                return $css;
            } elseif (in_array("addMoreQustions", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("addQuestions", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("analystics", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("createEvent", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("createEventTickets", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("dashboard", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("login", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("register", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } elseif (in_array("userProfile", $array)) {
                $css = '';
                $css .=$this->coreCss();
                $css .=$this->siteFonts();
                return $css;
            } else {

                return $this->coreCss();
            }
        }
    }

    /*     * *********** public css end************** */



    /* public js start */

    public function footerJs($array = array()) {
        if (!empty($array)) {
            if (in_array("addMoreEventTickets", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->AddMoreEventAngular();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("addMoreQustions", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->AddMoreQuestionsAngular();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("addQuestions", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->AddQuestionsAngular();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("analystics", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->AnalysticsAngular();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("createEvent", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->CreateEventAngular();
                $js .=$this->coreJs();

                return $js;
            } elseif (in_array("createEventTickets", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->CreateEventTicketsAngular();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("dashboard", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->dashboardAngular();
                $js .=$this->coreJs();

                return $js;
            } elseif (in_array("login", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->LoginAngular();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("register", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->RegisterAngular();
                $js .=$this->coreJs();
                return $js;
            } elseif (in_array("userProfile", $array)) {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->UserProfileAngular();
                $js .=$this->coreJs();
                return $js;
            } else {
                $js = '';
                $js .=$this->angularJs();
                $js .=$this->coreJs();
                return $js;
            }
        }
    }

    /*     * ******public js end******* */


    /* Core CSS start Here */

    private function coreCss() {
        $corecss = '';
        $corecss .='<!--Core CSS Files-->
            <link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/bootstrap.min.css") . ' ">
            <link rel="stylesheet" href=" ' . $this->baseUrl("assets/css/paper-dashboard.css") . ' ">
            <link rel="stylesheet" href=" ' . $this->baseUrl("../tc-merchant-template/plugins/stepformwizard/assets/css/gsi-step-indicator.min.css") . ' ">
            <link rel="stylesheet" href=" ' . $this->baseUrl("../tc-merchant-template/plugins/stepformwizard/assets/css/tsf-step-form-wizard.min.css") . ' ">
            <link rel="stylesheet" href=" ' . $this->baseUrl("../tc-merchant-template/plugins/dropzone-master/dist/dropzone.css") . ' ">';
        return $corecss;
    }

    /*     * ***********Core CSS END Here************ */

    private function coreJs() {
        $corejs = '';
        $corejs .= '<!--Core JS Files-->
            
        <script src="' . $this->baseUrl("assets/js/jquery-1.10.2.js") . '" type="text/javascript"></script>
        <script src="' . $this->baseUrl("assets/js/jquery-ui.min.js") . '" type="text/javascript"></script>
        <script src="' . $this->baseUrl("assets/js/bootstrap.min.js") . '" type="text/javascript"></script>
        <script src="' . $this->baseUrl("assets/js/jquery.validate.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/moment.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/bootstrap-datetimepicker.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/bootstrap-selectpicker.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/bootstrap-checkbox-radio-switch-tags.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/jquery.easypiechart.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/chartist.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/bootstrap-notify.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/sweetalert2.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/jquery-jvectormap.js") . '" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src=" ' . $this->baseUrl("assets/js/jquery.bootstrap.wizard.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/bootstrap-table.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/fullcalendar.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/paper-dashboard.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/jquery.sharrre.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("assets/js/demo.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("../tc-merchant-template/plugins/dropzone-master/dist/min/dropzone.min.js") . '" type="text/javascript"></script>
        <script src=" ' . $this->baseUrl("../tc-merchant-template/plugins/stepformwizard/assets/js/tsf-wizard-plugin.js") . '" type="text/javascript"></script>';
//        $corejs .=$this->angularJs();
//        $corejs .=$this->angularBootstrapJs();

        return $corejs;
    }

    /*     * ********page JS file include end Here *********** */



    /* Font CSS file include start */

    private function siteFonts() {
        $fontcss = '';
        $fontcss .='<!-- Fonts and icons -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300"   type="text/css"/>
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/themify-icons.css") . '" />
        <link rel="stylesheet" href="' . $this->baseUrl("assets/css/pe-icon-7-stroke.css") . '"  />
        <link rel="stylesheet" href="' . $this->baseUrl("../tc-merchant-template/plugins/fontello-2910d963/css/fontello.css") . '" />';



        return $fontcss;
    }

    /*     * *******Font CSS file include end********** */


    /* Angular LIBRARY Js  start Here */

    private function angularJs() {
        $angularlibrJs = '';
        $angularlibrJs .='<!--Angular LIBRARY Js--->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap-tpls.min.js"></script>';
        return $angularlibrJs;
    }

    /*     * *********Angular LIBRARY Js End Here*********** */


    /* Angular Bootstrap Js start */

    private function angularBootstrapJs() {
        $angularBootJs = '';
        $angularBootJs .='<!--Angular Bootstrap Js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap-tpls.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
        return $angularBootJs;
    }

    /*     * ***********Angular Bootstrap Js End Here************ */
    
    
    
  /*Angular Private Function Start Here*/  

    private function dashboardAngular() {
        $jsangu = '';
        $jsangu .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $jsangu .='<script src="' . $this->baseUrl("../angularJs/scripts/dashboardController.js") . '"></script>';
        return $jsangu;
    }

    private function CreateEventAngular() {
        $jsangular = '';
        $jsangular .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $jsangular .='<script src="' . $this->baseUrl("../angularJs/scripts/createEventController.js") . '"></script>';
        return $jsangular;
    }

    private function CreateEventTicketsAngular() {
        $jsangularevent = '';
        $jsangularevent.='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $jsangularevent .='<script src="' . $this->baseUrl("../angularJs/scripts/createEventTicketsController.js") . '"></script>';
        return $jsangularevent;
    }

    private function AddMoreEventAngular() {
        $addEvantAngularJs = '';
        $addEvantAngularJs .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $addEvantAngularJs .='<script src="' . $this->baseUrl("../angularJs/scripts/addmoreEventTicketsController.js") . '"></script>';
        return $addEvantAngularJs;
    }

    private function AddMoreQuestionsAngular() {
        $addmoreQuestionsAj = '';
        $addmoreQuestionsAj .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $addmoreQuestionsAj .='<script src="' . $this->baseUrl("../angularJs/scripts/addMoreQuestionsController.js") . '"></script>';
        return $addmoreQuestionsAj;
    }

    private function AddQuestionsAngular() {
        $addmoreQuestionsAj = '';
        $addmoreQuestionsAj .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $addmoreQuestionsAj .='<script src="' . $this->baseUrl("../angularJs/scripts/addQuestionsController.js") . '"></script>';
        return $addmoreQuestionsAj;
    }

    private function AnalysticsAngular() {
        $analysticsAngularsAj = '';
        $analysticsAngularsAj .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $analysticsAngularsAj .='<script src="' . $this->baseUrl("../angularJs/scripts/analysticsController.js") . '"></script>';
        return $analysticsAngularsAj;
    }
    
       private function LoginAngular() {
        $loginAj = '';
        $loginAj .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $loginAj .='<script src="' . $this->baseUrl("../angularJs/scripts/loginController.js") . '"></script>';
        return $loginAj;
    } 
      private function RegisterAngular() {
        $loginAj = '';
        $loginAj .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $loginAj .='<script src="' . $this->baseUrl("../angularJs/scripts/registerController.js") . '"></script>';
        return $loginAj;
    }
     private function UserProfileAngular() {
        $userprofileAj = '';
        $userprofileAj .='<script src="' . $this->baseUrl("../angularJs/app.js") . '"></script>';
        $userprofileAj .='<script src="' . $this->baseUrl("../angularJs/scripts/userProfileController.js") . '"></script>';
        return $userprofileAj;
    }
    /***************Angular Private Function End Here***************************/  


    /* Base URL start */

    public function baseUrl($suffix = '') {
        $protocol = strpos($_SERVER['SERVER_SIGNATURE'], '443') !== false ? 'https://' : 'http://';
//$web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "Dropbox/odesk/pos/";
        if ($_SERVER['HTTP_HOST'] == "localhost") {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "ticketchai_aj/merchant-dashboard/";
        } elseif ($_SERVER['HTTP_HOST'] == "192.168.1.48") {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "ticketchai_aj/merchant-dashboard/";
        } else {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "";
        }

        $suffix = ltrim($suffix, '/');
        return $web_root . trim($suffix);
    }

    /*     * **********Base URL end ****************** */


    /* Facebook Page Plugin Start Here */

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

}

/************Facebook Page Plugin End Here************/






                                  /*******************./End*******************/