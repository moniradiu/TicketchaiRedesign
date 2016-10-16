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
        echo $cms->pageTitle("Checkout3 | Ticketchai.com...");
        ?>

            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

            <?php
        echo $cms->headCss(array("checkout3"));
        ?>




                <!-- mahedi create costom CSS Files start-->
                <link rel="stylesheet" href="assets/css/checkout3.css">
                <!--        <link rel="stylesheet" type="text/css" href="assets/css/style.css">-->
                <!--<link rel="stylesheet" type="text/css" href="assets/css/simply-toast.min.css">
        <!-- For custom design -->
                <!-- <link rel="stylesheet" type="text/css" href="assets/css/customs.css">
        <!-- mahedi create costom CSS Files start-->



    </head>

    <body class="index-page signin" ng-app="frontEnd" ng-controller="checkout3Controller">
        <?php echo $cms->FbSocialScript();?>

            <?php include 'include/navbar.php';?>

                <div class="clearfix"></div>
                <div class="wrapper">
                    <!-- main content part starts here -->
                    <div class="main" style="background-color: transparent; margin-top:90px;">
                        <div class="clearfix"></div>
                        <!-- sitemap section starts here -->
                        <div class="section-simple2 ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left" id="according_start">
                                        <div id="accordion" role="tablist" aria-multiselectable="true" stye="padding:15px;">

                                            <div class="row p1">
                                                <div class="panel panel-default  pane1" style="">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title ">
                                                    <a data-toggle="collapse" data-parent="#accordion"role="button" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="ph_one">
                                                        <span class="h_lebel">1</span><b> {{checkoutOne}}</b><span class="h_icon pull-right"><i class="fa fa-chevron-down"></i></span>
                                                    </a>
                                                </h4>
                                                    </div>

                                                    

                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="col-md-6" id="panelOne_body">
                                                            <div class="col-inside">
                                                                <h4 class="col-title-h3"><b>{{signin_text}}</b></h4>
                                                                <div class="form-group-icon col-md-6 col-sm-6 col-xs-12 pull-left">
                                                                    <a href="javascript:void(0);" onclick="facebookLogin();" class="btn btn-block btn-success" style="outline: none;background:rgb(35, 82, 125) none repeat scroll 0% 0%;color:#fff">
                                                                        <i class="fa fa-facebook"></i> {{btn_fb}}
                                                                    </a>
                                                                </div>
                                                                <div class=" col-md-6 col-sm-6 col-xs-12 pull-right">
                                                                    <a href="javascript:void(0);" onclick="googleLogin();" style="background-color: #dd4b39 !important; border-color: #dd4b39; outline: none;" class="btn btn-block btn-facebook">
                                                                        <i class="fa fa-google-plus"></i> {{btn_g}}+
                                                                    </a>
                                                                </div>
                                                                <br/>
                                                                <div class="clearfix"></div>
                                                                <h4 class="text-center">{{or_text}}</h4>
                                                                <form class="sign-form">
                                                                    <div class="form-group has-success has-feedback">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                                            <input type="text" class="form-control" id="inputGroupSuccess1" placeholder="    Email Address">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group has-success has-feedback">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                            <input type="password" class="form-control" id="inputGroupSuccess1" placeholder="    Password">
                                                                        </div>
                                                                    </div>
                                                                    <a class="btn btn-primary btn-block" href="javascript:void(0);" id="clickSignIn"><strong>{{btn_login}}</strong></a>
                                                                </form>
                                                                <div class="remind-bar clearfix">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6"></div>
                                                                        <div class="col-md-6 col-sm-6 text-right">
                                                                            <a href="reset_password.php">{{lost_pass}}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="panelOne_body">
                                                            <div class="col-inside">
                                                                <h4 class="col-title-h3"><b>{{createNewAcc}}</b></h4>
                                                                <form class="sign-form">

                                                                    <div class="form-group has-success has-feedback">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" id="inputGroupSuccess1" placeholder="   Your Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group has-success has-feedback">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                                            <input type="text" class="form-control" id="inputGroupSuccess1" placeholder="    Email Address">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group has-success has-feedback">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                            <input type="password" class="form-control" id="inputGroupSuccess1" placeholder="    Password">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group has-success has-feedback">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                            <input type="password" class="form-control" id="inputGroupSuccess1" placeholder="   confirm Password">
                                                                        </div>
                                                                    </div>

                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" name="optionsCheckboxes" id="AcceptTerms">{{terms}} <a target="_blank" href="sitemap-terms.php">{{terms2}}</a>
                                                                        </label>
                                                                    </div>
                                                                    <br/>
                                                                    <button type="button" id="clickSignUp" class="btn btn-primary btn-block btn-signup"><strong>{{signup}}</strong></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p2">
                                                <div class="panel panel-default panel2" style="">
                                                    <div class="panel-heading " role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" id="ph_one">
                                                        <span class="h_lebel">2</span> <b>{{checkoutTwo}}</b><span class="h_icon pull-right"><i class="fa fa-chevron-down"></i></span>
                                                    </a>
                                                </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <h3 class="text-left"><i class="fa fa-map-marker"></i>{{selectAdd}}</h3>
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 radio">
                                                                <input type="radio" name="accordion-group" id="option-1" value="r-1" />
                                                                <label for="option-1">
                                                                    <p class="radio-lebel">{{have_tickets}}</p>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 radio">
                                                                <input type="radio" name="accordion-group" id="option-2" value="r-2" />
                                                                <label for="option-2">
                                                                    <p class="radio-lebel">{{pick_from}}</p>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 radio">
                                                                <input type="radio" name="accordion-group" id="option-3" value="r-3" />
                                                                <label for="option-3">
                                                                    <p class="radio-lebel">{{venue}}</p>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 add_left">
                                                            <h3 class="col-title-h3 pull-left">{{select_billingAdd}}</h3>
                                                            <h4 class="pull_left_title">{{your_add}}</h4>
                                                            <br>
                                                            <form action="">

                                                                <div class="form-group text_area">
                                                                    <textarea class="form-control" placeholder="Here can be your nice text" id="UA_billing_address" type="text"></textarea>
                                                                </div>

                                                                <div class="form-group text_area">
                                                                    <label for="sel1">City:</label>
                                                                    <select class="form-control" id="sel1">
                                                                        <option value="1" selected>Dhaka</option>
                                                                        <option value="2">Comilla</option>
                                                                        <option value="3">Chittachong</option>
                                                                        <option value="4">Khulna</option>
                                                                        <option value="5">Barisal</option>
                                                                        <option value="6">Rangpur</option>
                                                                        <option value="7">Sylhet</option>
                                                                        <option value="8">Rajshahi</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group text_area">
                                                                    <label>Zip/Postal Code: </label>
                                                                    <input type="text" value="" placeholder=" zip/postal code" class="form-control" />
                                                                </div>
                                                                <div class="form-group text_area">
                                                                    <label for="sel1">Country:</label>
                                                                    <select class="form-control" id="sel1">
                                                                        <option value="0">Select Country</option>
                                                                        <option value="1">
                                                                            Afghanistan </option>
                                                                        <option value="2">
                                                                            Albania </option>
                                                                        <option value="3">
                                                                            Algeria </option>
                                                                        <option value="4">
                                                                            Andorra </option>
                                                                        <option value="6">
                                                                            Angola </option>
                                                                        <option value="7">
                                                                            Antigua and Barbuda </option>
                                                                        <option value="8">
                                                                            Argentina </option>
                                                                        <option value="9">
                                                                            Armenia </option>
                                                                        <option value="10">
                                                                            Aruba </option>
                                                                        <option value="11">
                                                                            Australia </option>
                                                                        <option value="12">
                                                                            Austria </option>
                                                                        <option value="13">
                                                                            Azerbaijan </option>
                                                                        <option value="14">
                                                                            Bahamas </option>
                                                                        <option value="15">
                                                                            Bahrain </option>
                                                                        <option value="16" selected="selected">
                                                                            Bangladesh </option>
                                                                        <option value="17">
                                                                            Barbados </option>
                                                                        <option value="18">
                                                                            Belarus </option>
                                                                        <option value="19">
                                                                            Belgium </option>
                                                                        <option value="20">
                                                                            Belize </option>
                                                                        <option value="21">
                                                                            Benin </option>
                                                                        <option value="22">
                                                                            Bhutan </option>
                                                                        <option value="23">
                                                                            Bolivia </option>
                                                                        <option value="24">
                                                                            Bosnia and Herzegovina </option>
                                                                        <option value="25">
                                                                            Botswana </option>
                                                                        <option value="26">
                                                                            Brazil </option>
                                                                        <option value="27">
                                                                            Brunei </option>
                                                                        <option value="28">
                                                                            Bulgaria </option>
                                                                        <option value="29">
                                                                            Burkina Faso </option>
                                                                        <option value="30">
                                                                            Burma </option>
                                                                        <option value="31">
                                                                            Burundi </option>
                                                                        <option value="32">
                                                                            Cambodia </option>
                                                                        <option value="33">
                                                                            Cameroon </option>
                                                                        <option value="34">
                                                                            Canada </option>
                                                                        <option value="35">
                                                                            Cape Verde </option>
                                                                        <option value="36">
                                                                            Central African Republic </option>
                                                                        <option value="37">
                                                                            Chad </option>
                                                                        <option value="38">
                                                                            Chile </option>
                                                                        <option value="39">
                                                                            China </option>
                                                                        <option value="40">
                                                                            Colombia </option>
                                                                        <option value="41">
                                                                            Comoros </option>
                                                                        <option value="42">
                                                                            Congo, Democratic Republic of the </option>
                                                                        <option value="43">
                                                                            Congo, Republic of the </option>
                                                                        <option value="44">
                                                                            Costa Rica </option>
                                                                        <option value="45">
                                                                            Cote d'Ivoire </option>
                                                                        <option value="46">
                                                                            Croatia </option>
                                                                        <option value="47">
                                                                            Cuba </option>
                                                                        <option value="48">
                                                                            Curacao </option>
                                                                        <option value="49">
                                                                            Cyprus </option>
                                                                        <option value="50">
                                                                            Czech Republic </option>
                                                                        <option value="51">
                                                                            Denmark </option>
                                                                        <option value="52">
                                                                            Djibouti </option>
                                                                        <option value="53">
                                                                            Dominica </option>
                                                                        <option value="54">
                                                                            Dominican Republic </option>
                                                                        <option value="55">
                                                                            Ecuador </option>
                                                                        <option value="56">
                                                                            Egypt </option>
                                                                        <option value="57">
                                                                            El Salvador </option>
                                                                        <option value="58">
                                                                            Equatorial Guinea </option>
                                                                        <option value="59">
                                                                            Eritrea </option>
                                                                        <option value="60">
                                                                            Estonia </option>
                                                                        <option value="61">
                                                                            Ethiopia </option>
                                                                        <option value="62">
                                                                            Fiji </option>
                                                                        <option value="63">
                                                                            Finland </option>
                                                                        <option value="64">
                                                                            France </option>
                                                                        <option value="65">
                                                                            Gabon </option>
                                                                        <option value="66">
                                                                            Gambia </option>
                                                                        <option value="67">
                                                                            Georgia </option>
                                                                        <option value="68">
                                                                            Germany </option>
                                                                        <option value="69">
                                                                            Ghana </option>
                                                                        <option value="70">
                                                                            Greece </option>
                                                                        <option value="71">
                                                                            Grenada </option>
                                                                        <option value="72">
                                                                            Guatemala </option>
                                                                        <option value="73">
                                                                            Guinea </option>
                                                                        <option value="74">
                                                                            Guinea-Bissau </option>
                                                                        <option value="75">
                                                                            Guyana </option>
                                                                        <option value="76">
                                                                            Haiti </option>
                                                                        <option value="77">
                                                                            Holy See </option>
                                                                        <option value="78">
                                                                            Honduras </option>
                                                                        <option value="79">
                                                                            Hong Kong </option>
                                                                        <option value="80">
                                                                            Hungary </option>
                                                                        <option value="81">
                                                                            Iceland </option>
                                                                        <option value="82">
                                                                            India </option>
                                                                        <option value="83">
                                                                            Indonesia </option>
                                                                        <option value="84">
                                                                            Iran </option>
                                                                        <option value="85">
                                                                            Iraq </option>
                                                                        <option value="86">
                                                                            Ireland </option>
                                                                        <option value="87">
                                                                            Israel </option>
                                                                        <option value="88">
                                                                            Italy </option>
                                                                        <option value="89">
                                                                            Jamaica </option>
                                                                        <option value="90">
                                                                            Japan </option>
                                                                        <option value="91">
                                                                            Jordan </option>
                                                                        <option value="92">
                                                                            Kazakhstan </option>
                                                                        <option value="93">
                                                                            Kenya </option>
                                                                        <option value="94">
                                                                            Kiribati </option>
                                                                        <option value="95">
                                                                            Korea, North </option>
                                                                        <option value="96">
                                                                            Korea, South </option>
                                                                        <option value="97">
                                                                            Kosovo </option>
                                                                        <option value="98">
                                                                            Kuwait </option>
                                                                        <option value="99">
                                                                            Kyrgyzstan </option>
                                                                        <option value="100">
                                                                            Laos </option>
                                                                        <option value="101">
                                                                            Latvia </option>
                                                                        <option value="102">
                                                                            Lebanon </option>
                                                                        <option value="103">
                                                                            Lesotho </option>
                                                                        <option value="104">
                                                                            Liberia </option>
                                                                        <option value="105">
                                                                            Libya </option>
                                                                        <option value="106">
                                                                            Liechtenstein </option>
                                                                        <option value="107">
                                                                            Lithuania </option>
                                                                        <option value="108">
                                                                            Luxembourg </option>
                                                                        <option value="109">
                                                                            Macau </option>
                                                                        <option value="110">
                                                                            Macedonia </option>
                                                                        <option value="111">
                                                                            Madagascar </option>
                                                                        <option value="112">
                                                                            Malawi </option>
                                                                        <option value="113">
                                                                            Malaysia </option>
                                                                        <option value="114">
                                                                            Maldives </option>
                                                                        <option value="115">
                                                                            Mali </option>
                                                                        <option value="116">
                                                                            Malta </option>
                                                                        <option value="117">
                                                                            Marshall Islands </option>
                                                                        <option value="118">
                                                                            Mauritania </option>
                                                                        <option value="119">
                                                                            Mauritius </option>
                                                                        <option value="120">
                                                                            Mexico </option>
                                                                        <option value="121">
                                                                            Micronesia </option>
                                                                        <option value="122">
                                                                            Moldova </option>
                                                                        <option value="123">
                                                                            Monaco </option>
                                                                        <option value="124">
                                                                            Mongolia </option>
                                                                        <option value="125">
                                                                            Montenegro </option>
                                                                        <option value="126">
                                                                            Morocco </option>
                                                                        <option value="127">
                                                                            Mozambique </option>
                                                                        <option value="128">
                                                                            Namibia </option>
                                                                        <option value="129">
                                                                            Nauru </option>
                                                                        <option value="130">
                                                                            Nepal </option>
                                                                        <option value="131">
                                                                            Netherlands </option>
                                                                        <option value="132">
                                                                            Netherlands Antilles </option>
                                                                        <option value="133">
                                                                            New Zealand </option>
                                                                        <option value="134">
                                                                            Nicaragua </option>
                                                                        <option value="135">
                                                                            Niger </option>
                                                                        <option value="136">
                                                                            Nigeria </option>
                                                                        <option value="137">
                                                                            North Korea </option>
                                                                        <option value="138">
                                                                            Norway </option>
                                                                        <option value="139">
                                                                            Oman </option>
                                                                        <option value="140">
                                                                            Pakistan </option>
                                                                        <option value="141">
                                                                            Palau </option>
                                                                        <option value="142">
                                                                            Palestinian Territories </option>
                                                                        <option value="143">
                                                                            Panama </option>
                                                                        <option value="144">
                                                                            Papua New Guinea </option>
                                                                        <option value="145">
                                                                            Paraguay </option>
                                                                        <option value="146">
                                                                            Peru </option>
                                                                        <option value="147">
                                                                            Philippines </option>
                                                                        <option value="148">
                                                                            Poland </option>
                                                                        <option value="149">
                                                                            Portugal </option>
                                                                        <option value="150">
                                                                            Qatar </option>
                                                                        <option value="151">
                                                                            Romania </option>
                                                                        <option value="152">
                                                                            Russia </option>
                                                                        <option value="153">
                                                                            Rwanda </option>
                                                                        <option value="154">
                                                                            Saint Kitts and Nevis </option>
                                                                        <option value="155">
                                                                            Saint Lucia </option>
                                                                        <option value="156">
                                                                            Saint Vincent and the Grenadines </option>
                                                                        <option value="157">
                                                                            Samoa </option>
                                                                        <option value="158">
                                                                            San Marino </option>
                                                                        <option value="159">
                                                                            Sao Tome and Principe </option>
                                                                        <option value="160">
                                                                            Saudi Arabia </option>
                                                                        <option value="161">
                                                                            Senegal </option>
                                                                        <option value="162">
                                                                            Serbia </option>
                                                                        <option value="163">
                                                                            Seychelles </option>
                                                                        <option value="164">
                                                                            Sierra Leone </option>
                                                                        <option value="165">
                                                                            Singapore </option>
                                                                        <option value="166">
                                                                            Sint Maarten </option>
                                                                        <option value="167">
                                                                            Slovakia </option>
                                                                        <option value="168">
                                                                            Slovenia </option>
                                                                        <option value="169">
                                                                            Solomon Islands </option>
                                                                        <option value="170">
                                                                            Somalia </option>
                                                                        <option value="171">
                                                                            South Africa </option>
                                                                        <option value="172">
                                                                            South Korea </option>
                                                                        <option value="173">
                                                                            South Sudan </option>
                                                                        <option value="174">
                                                                            Spain </option>
                                                                        <option value="175">
                                                                            Sri Lanka </option>
                                                                        <option value="176">
                                                                            Sudan </option>
                                                                        <option value="177">
                                                                            Suriname </option>
                                                                        <option value="178">
                                                                            Swaziland </option>
                                                                        <option value="179">
                                                                            Sweden </option>
                                                                        <option value="180">
                                                                            Switzerland </option>
                                                                        <option value="181">
                                                                            Syria </option>
                                                                        <option value="182">
                                                                            Taiwan </option>
                                                                        <option value="183">
                                                                            Tajikistan </option>
                                                                        <option value="184">
                                                                            Tanzania </option>
                                                                        <option value="185">
                                                                            Thailand </option>
                                                                        <option value="186">
                                                                            Timor-Leste </option>
                                                                        <option value="187">
                                                                            Togo </option>
                                                                        <option value="188">
                                                                            Tonga </option>
                                                                        <option value="189">
                                                                            Trinidad and Tobago </option>
                                                                        <option value="190">
                                                                            Tunisia </option>
                                                                        <option value="191">
                                                                            Turkey </option>
                                                                        <option value="192">
                                                                            Turkmenistan </option>
                                                                        <option value="193">
                                                                            Tuvalu </option>
                                                                        <option value="194">
                                                                            Uganda </option>
                                                                        <option value="195">
                                                                            Ukraine </option>
                                                                        <option value="196">
                                                                            United Arab Emirates </option>
                                                                        <option value="197">
                                                                            United Kingdom </option>
                                                                        <option value="198">
                                                                            Uruguay </option>
                                                                        <option value="199">
                                                                            Uzbekistan </option>
                                                                        <option value="200">
                                                                            Vanuatu </option>
                                                                        <option value="201">
                                                                            Venezuela </option>
                                                                        <option value="202">
                                                                            Vietnam </option>
                                                                        <option value="203">
                                                                            Yemen </option>
                                                                        <option value="204">
                                                                            Zambia </option>
                                                                        <option value="205">
                                                                            Zimbabwe </option>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group text_area">
                                                                    <label>Phone: </label>
                                                                    <input type="text" value="" placeholder="01680895968" class="form-control" />
                                                                </div>
                                                                <div class="checkbox" id="isRadioChecked" style="display:none">
                                                                    <label>
                                                                        <input type="checkbox" name="optionsCheckboxes"> {{checkbox_makeAdd}}
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right" style="margin-top:9%">
                                                            <div class="radio_one box" style="display:none">
                                                                <h4 class="pull_left_title">{{your_add2}}</h4>

                                                                <form action="">

                                                                    <div class="form-group text_area">
                                                                        <textarea class="form-control" placeholder="Here can be your nice text" id="UA_billing_address" type="text"></textarea>
                                                                    </div>

                                                                    <div class="form-group text_area">
                                                                        <label for="sel1">Country:</label>
                                                                        <select class="form-control" id="sel1">
                                                                            <option value="0">Select Country</option>
                                                                            <option value="1">
                                                                                Afghanistan </option>
                                                                            <option value="2">
                                                                                Albania </option>
                                                                            <option value="3">
                                                                                Algeria </option>
                                                                            <option value="4">
                                                                                Andorra </option>
                                                                            <option value="6">
                                                                                Angola </option>
                                                                            <option value="7">
                                                                                Antigua and Barbuda </option>
                                                                            <option value="8">
                                                                                Argentina </option>
                                                                            <option value="9">
                                                                                Armenia </option>
                                                                            <option value="10">
                                                                                Aruba </option>
                                                                            <option value="11">
                                                                                Australia </option>
                                                                            <option value="12">
                                                                                Austria </option>
                                                                            <option value="13">
                                                                                Azerbaijan </option>
                                                                            <option value="14">
                                                                                Bahamas </option>
                                                                            <option value="15">
                                                                                Bahrain </option>
                                                                            <option value="16" selected="selected">
                                                                                Bangladesh </option>
                                                                            <option value="17">
                                                                                Barbados </option>
                                                                            <option value="18">
                                                                                Belarus </option>
                                                                            <option value="19">
                                                                                Belgium </option>
                                                                            <option value="20">
                                                                                Belize </option>
                                                                            <option value="21">
                                                                                Benin </option>
                                                                            <option value="22">
                                                                                Bhutan </option>
                                                                            <option value="23">
                                                                                Bolivia </option>
                                                                            <option value="24">
                                                                                Bosnia and Herzegovina </option>
                                                                            <option value="25">
                                                                                Botswana </option>
                                                                            <option value="26">
                                                                                Brazil </option>
                                                                            <option value="27">
                                                                                Brunei </option>
                                                                            <option value="28">
                                                                                Bulgaria </option>
                                                                            <option value="29">
                                                                                Burkina Faso </option>
                                                                            <option value="30">
                                                                                Burma </option>
                                                                            <option value="31">
                                                                                Burundi </option>
                                                                            <option value="32">
                                                                                Cambodia </option>
                                                                            <option value="33">
                                                                                Cameroon </option>
                                                                            <option value="34">
                                                                                Canada </option>
                                                                            <option value="35">
                                                                                Cape Verde </option>
                                                                            <option value="36">
                                                                                Central African Republic </option>
                                                                            <option value="37">
                                                                                Chad </option>
                                                                            <option value="38">
                                                                                Chile </option>
                                                                            <option value="39">
                                                                                China </option>
                                                                            <option value="40">
                                                                                Colombia </option>
                                                                            <option value="41">
                                                                                Comoros </option>
                                                                            <option value="42">
                                                                                Congo, Democratic Republic of the </option>
                                                                            <option value="43">
                                                                                Congo, Republic of the </option>
                                                                            <option value="44">
                                                                                Costa Rica </option>
                                                                            <option value="45">
                                                                                Cote d'Ivoire </option>
                                                                            <option value="46">
                                                                                Croatia </option>
                                                                            <option value="47">
                                                                                Cuba </option>
                                                                            <option value="48">
                                                                                Curacao </option>
                                                                            <option value="49">
                                                                                Cyprus </option>
                                                                            <option value="50">
                                                                                Czech Republic </option>
                                                                            <option value="51">
                                                                                Denmark </option>
                                                                            <option value="52">
                                                                                Djibouti </option>
                                                                            <option value="53">
                                                                                Dominica </option>
                                                                            <option value="54">
                                                                                Dominican Republic </option>
                                                                            <option value="55">
                                                                                Ecuador </option>
                                                                            <option value="56">
                                                                                Egypt </option>
                                                                            <option value="57">
                                                                                El Salvador </option>
                                                                            <option value="58">
                                                                                Equatorial Guinea </option>
                                                                            <option value="59">
                                                                                Eritrea </option>
                                                                            <option value="60">
                                                                                Estonia </option>
                                                                            <option value="61">
                                                                                Ethiopia </option>
                                                                            <option value="62">
                                                                                Fiji </option>
                                                                            <option value="63">
                                                                                Finland </option>
                                                                            <option value="64">
                                                                                France </option>
                                                                            <option value="65">
                                                                                Gabon </option>
                                                                            <option value="66">
                                                                                Gambia </option>
                                                                            <option value="67">
                                                                                Georgia </option>
                                                                            <option value="68">
                                                                                Germany </option>
                                                                            <option value="69">
                                                                                Ghana </option>
                                                                            <option value="70">
                                                                                Greece </option>
                                                                            <option value="71">
                                                                                Grenada </option>
                                                                            <option value="72">
                                                                                Guatemala </option>
                                                                            <option value="73">
                                                                                Guinea </option>
                                                                            <option value="74">
                                                                                Guinea-Bissau </option>
                                                                            <option value="75">
                                                                                Guyana </option>
                                                                            <option value="76">
                                                                                Haiti </option>
                                                                            <option value="77">
                                                                                Holy See </option>
                                                                            <option value="78">
                                                                                Honduras </option>
                                                                            <option value="79">
                                                                                Hong Kong </option>
                                                                            <option value="80">
                                                                                Hungary </option>
                                                                            <option value="81">
                                                                                Iceland </option>
                                                                            <option value="82">
                                                                                India </option>
                                                                            <option value="83">
                                                                                Indonesia </option>
                                                                            <option value="84">
                                                                                Iran </option>
                                                                            <option value="85">
                                                                                Iraq </option>
                                                                            <option value="86">
                                                                                Ireland </option>
                                                                            <option value="87">
                                                                                Israel </option>
                                                                            <option value="88">
                                                                                Italy </option>
                                                                            <option value="89">
                                                                                Jamaica </option>
                                                                            <option value="90">
                                                                                Japan </option>
                                                                            <option value="91">
                                                                                Jordan </option>
                                                                            <option value="92">
                                                                                Kazakhstan </option>
                                                                            <option value="93">
                                                                                Kenya </option>
                                                                            <option value="94">
                                                                                Kiribati </option>
                                                                            <option value="95">
                                                                                Korea, North </option>
                                                                            <option value="96">
                                                                                Korea, South </option>
                                                                            <option value="97">
                                                                                Kosovo </option>
                                                                            <option value="98">
                                                                                Kuwait </option>
                                                                            <option value="99">
                                                                                Kyrgyzstan </option>
                                                                            <option value="100">
                                                                                Laos </option>
                                                                            <option value="101">
                                                                                Latvia </option>
                                                                            <option value="102">
                                                                                Lebanon </option>
                                                                            <option value="103">
                                                                                Lesotho </option>
                                                                            <option value="104">
                                                                                Liberia </option>
                                                                            <option value="105">
                                                                                Libya </option>
                                                                            <option value="106">
                                                                                Liechtenstein </option>
                                                                            <option value="107">
                                                                                Lithuania </option>
                                                                            <option value="108">
                                                                                Luxembourg </option>
                                                                            <option value="109">
                                                                                Macau </option>
                                                                            <option value="110">
                                                                                Macedonia </option>
                                                                            <option value="111">
                                                                                Madagascar </option>
                                                                            <option value="112">
                                                                                Malawi </option>
                                                                            <option value="113">
                                                                                Malaysia </option>
                                                                            <option value="114">
                                                                                Maldives </option>
                                                                            <option value="115">
                                                                                Mali </option>
                                                                            <option value="116">
                                                                                Malta </option>
                                                                            <option value="117">
                                                                                Marshall Islands </option>
                                                                            <option value="118">
                                                                                Mauritania </option>
                                                                            <option value="119">
                                                                                Mauritius </option>
                                                                            <option value="120">
                                                                                Mexico </option>
                                                                            <option value="121">
                                                                                Micronesia </option>
                                                                            <option value="122">
                                                                                Moldova </option>
                                                                            <option value="123">
                                                                                Monaco </option>
                                                                            <option value="124">
                                                                                Mongolia </option>
                                                                            <option value="125">
                                                                                Montenegro </option>
                                                                            <option value="126">
                                                                                Morocco </option>
                                                                            <option value="127">
                                                                                Mozambique </option>
                                                                            <option value="128">
                                                                                Namibia </option>
                                                                            <option value="129">
                                                                                Nauru </option>
                                                                            <option value="130">
                                                                                Nepal </option>
                                                                            <option value="131">
                                                                                Netherlands </option>
                                                                            <option value="132">
                                                                                Netherlands Antilles </option>
                                                                            <option value="133">
                                                                                New Zealand </option>
                                                                            <option value="134">
                                                                                Nicaragua </option>
                                                                            <option value="135">
                                                                                Niger </option>
                                                                            <option value="136">
                                                                                Nigeria </option>
                                                                            <option value="137">
                                                                                North Korea </option>
                                                                            <option value="138">
                                                                                Norway </option>
                                                                            <option value="139">
                                                                                Oman </option>
                                                                            <option value="140">
                                                                                Pakistan </option>
                                                                            <option value="141">
                                                                                Palau </option>
                                                                            <option value="142">
                                                                                Palestinian Territories </option>
                                                                            <option value="143">
                                                                                Panama </option>
                                                                            <option value="144">
                                                                                Papua New Guinea </option>
                                                                            <option value="145">
                                                                                Paraguay </option>
                                                                            <option value="146">
                                                                                Peru </option>
                                                                            <option value="147">
                                                                                Philippines </option>
                                                                            <option value="148">
                                                                                Poland </option>
                                                                            <option value="149">
                                                                                Portugal </option>
                                                                            <option value="150">
                                                                                Qatar </option>
                                                                            <option value="151">
                                                                                Romania </option>
                                                                            <option value="152">
                                                                                Russia </option>
                                                                            <option value="153">
                                                                                Rwanda </option>
                                                                            <option value="154">
                                                                                Saint Kitts and Nevis </option>
                                                                            <option value="155">
                                                                                Saint Lucia </option>
                                                                            <option value="156">
                                                                                Saint Vincent and the Grenadines </option>
                                                                            <option value="157">
                                                                                Samoa </option>
                                                                            <option value="158">
                                                                                San Marino </option>
                                                                            <option value="159">
                                                                                Sao Tome and Principe </option>
                                                                            <option value="160">
                                                                                Saudi Arabia </option>
                                                                            <option value="161">
                                                                                Senegal </option>
                                                                            <option value="162">
                                                                                Serbia </option>
                                                                            <option value="163">
                                                                                Seychelles </option>
                                                                            <option value="164">
                                                                                Sierra Leone </option>
                                                                            <option value="165">
                                                                                Singapore </option>
                                                                            <option value="166">
                                                                                Sint Maarten </option>
                                                                            <option value="167">
                                                                                Slovakia </option>
                                                                            <option value="168">
                                                                                Slovenia </option>
                                                                            <option value="169">
                                                                                Solomon Islands </option>
                                                                            <option value="170">
                                                                                Somalia </option>
                                                                            <option value="171">
                                                                                South Africa </option>
                                                                            <option value="172">
                                                                                South Korea </option>
                                                                            <option value="173">
                                                                                South Sudan </option>
                                                                            <option value="174">
                                                                                Spain </option>
                                                                            <option value="175">
                                                                                Sri Lanka </option>
                                                                            <option value="176">
                                                                                Sudan </option>
                                                                            <option value="177">
                                                                                Suriname </option>
                                                                            <option value="178">
                                                                                Swaziland </option>
                                                                            <option value="179">
                                                                                Sweden </option>
                                                                            <option value="180">
                                                                                Switzerland </option>
                                                                            <option value="181">
                                                                                Syria </option>
                                                                            <option value="182">
                                                                                Taiwan </option>
                                                                            <option value="183">
                                                                                Tajikistan </option>
                                                                            <option value="184">
                                                                                Tanzania </option>
                                                                            <option value="185">
                                                                                Thailand </option>
                                                                            <option value="186">
                                                                                Timor-Leste </option>
                                                                            <option value="187">
                                                                                Togo </option>
                                                                            <option value="188">
                                                                                Tonga </option>
                                                                            <option value="189">
                                                                                Trinidad and Tobago </option>
                                                                            <option value="190">
                                                                                Tunisia </option>
                                                                            <option value="191">
                                                                                Turkey </option>
                                                                            <option value="192">
                                                                                Turkmenistan </option>
                                                                            <option value="193">
                                                                                Tuvalu </option>
                                                                            <option value="194">
                                                                                Uganda </option>
                                                                            <option value="195">
                                                                                Ukraine </option>
                                                                            <option value="196">
                                                                                United Arab Emirates </option>
                                                                            <option value="197">
                                                                                United Kingdom </option>
                                                                            <option value="198">
                                                                                Uruguay </option>
                                                                            <option value="199">
                                                                                Uzbekistan </option>
                                                                            <option value="200">
                                                                                Vanuatu </option>
                                                                            <option value="201">
                                                                                Venezuela </option>
                                                                            <option value="202">
                                                                                Vietnam </option>
                                                                            <option value="203">
                                                                                Yemen </option>
                                                                            <option value="204">
                                                                                Zambia </option>
                                                                            <option value="205">
                                                                                Zimbabwe </option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group text_area">
                                                                        <label for="exampleInputEmail1">Zip/Postal Code: </label>
                                                                        <input type="text" value="" placeholder=" zip/postal code" class="form-control" />
                                                                    </div>
                                                                    <div class="form-group text_area">
                                                                        <label for="sel1">City:</label>
                                                                        <select class="form-control" id="sel1">
                                                                            <option value="1" selected>Dhaka</option>
                                                                            <option value="2">Comilla</option>
                                                                            <option value="3">Chittachong</option>
                                                                            <option value="4">Khulna</option>
                                                                            <option value="5">Barisal</option>
                                                                            <option value="6">Rangpur</option>
                                                                            <option value="7">Sylhet</option>
                                                                            <option value="8">Rajshahi</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group text_area">
                                                                        <label for="exampleInputEmail1">Phone: </label>
                                                                        <input type="text" value="" placeholder="01680895968" class="form-control" />
                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <div>
                                                                <div class="radio_two box" id="pickPointVenue" style="display: none;margin-top: 8% !important;">
                                                                    <h4 text-left>{{venue_add}}</h4>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios">
                                                                            <i class="fa fa-map-marker"></i>{{venue_add2}}
                                                                        </label>
                                                                    </div>

                                                                    <div class="clearfix"></div>
                                                                    <br>
                                                                    <!--here goes button next-->
                                                                    <div class="form-group">
                                                                        <button style="display: block; background:#88C659 !important;" id="sbtopm1" onclick="javscript:verifyAddressID();" name="submitAddress" type="button" class="btn btn-primary btn-md btn-block "><strong>{{btn_continue}} <i class="fa fa-angle-right"></i></strong></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="radio_three box" style="display:none;margin-bottom:1%">
                                                                <h4 style="margin-top: 8% !important;">Our Venue Address</h4>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map">
                                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.9906364251227!2d90.40331199999999!3d23.748714999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ0JzU1LjQiTiA5MMKwMjQnMTEuOSJF!5e0!3m2!1sbn!2sbd!4v1413197027945" id="" width="" height="50%" frameborder="0" style="border:0"></iframe>
                                                                    <br>
                                                                </div>
                                                                <div style="margin-top:4% !important;">
                                                                    <br>
                                                                    <h4>{{office_add}}</h4>
                                                                    <p><i class="fa fa-map-marker"></i>{{office_add2}}</p>
                                                                    <p><i class="fa fa-phone">{{office_add3}}</i></p>

                                                                </div>
                                                                <div class="form-group">
                                                                    <!--here goes button next-->
                                                                    <button style="display:block;background: #88C659!important;" id="sbtopm1" onclick="javscript:verifyAddressID();" name="submitAddress" type="button" class="btn btn-primary btn-md btn-block "><strong>{{btn_continue2}} <i class=" fa fa-angle-right"></i></strong></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p3">
                                                <div class="panel panel-default panel3" style="overflow-hidden">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                    <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="ph_one">
                                                        <span class="h_lebel">3</span><b> {{checkoutThree}}</b><span class="pull-right h_icon"><i class="fa fa-chevron-down"></i></span>
                                                    </a>
                                                </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="col-md-12 col-sm-12 pull-left" style="overflow:hidden">
                                                            <h3 class="pull-left">{{payment_method}}</h3>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 pull-left" style="padding: 15px;">
                                                            <div class="col-pay">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios">
                                                                        <i style="font-size: large;" class="fa fa-credit-card"></i>&nbsp;&nbsp;{{online_payment}}
                                                                    </label>
                                                                </div>
                                                                <hr>
                                                                <div>
                                                                    {{online_paymentText}}
                                                                </div>

                                                            </div>
                                                            <div class="col-pay">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios">
                                                                        <i style="font-size: large;" class="fa fa-mobile fa-lg"></i>&nbsp;&nbsp;{{bkash_payment}}
                                                                    </label>
                                                                </div>
                                                                <hr>
                                                                <div>
                                                                    {{bkash_paymentText}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right" style="padding: 15px;">
                                                            <div class="col-pay">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios">
                                                                        <i style="font-size: large;" class="fa fa-exchange"></i>&nbsp;&nbsp;{{cash_onDelivery}}
                                                                    </label>
                                                                </div>
                                                                <hr>
                                                                <div>
                                                                    {{cash_onDeliveryText}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button style="background: #88C659 !important;" id="paymentbtn" name="submitpmnt" type="button" onclick="javscript:verifyPayment();" class="btn btn-default btn-primary btn-lg btn-block pull-right next2"><strong>{{btn_continue3 }}<i class="fa fa-angle-right"></i></strong></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right cart_summary" style="">
                                        <div class="sidebar-cart">
                                            <h4 class="sidebar-title-cart">{{cart_summary}}</h4>

                                            <table class="table table-cart-summary table-custom-padd">
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-ticket"></i></td>
                                                        <td>{{cart_tblH1}}</td>
                                                        <td id="s_ticket_quantity">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-ticket"></i></td>
                                                        <td>{{cart_tblH2}}</td>
                                                        <td id="s_ticket_total_amount" class="hahahehe"><span>100.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-bullhorn"></i></td>
                                                        <td>{{cart_tblH3}}</td>
                                                        <td id="s_include_quantity">0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-bullhorn"></i></td>
                                                        <td>{{cart_tblH4}}</td>
                                                        <td id="s_include_total_amount" class="hahahehe">0.00</td>
                                                    </tr>


                                                    <tr class="hidecost">
                                                        <td><i class="fa fa-bullhorn"></i></td>
                                                        <td>{{cart_tblH5}}</td>
                                                        <td id="extra_cost_total_14">10.00</td>
                                                    </tr>
                                                    <tr class="hidecost">
                                                        <td><i class="fa fa-bullhorn"></i></td>
                                                        <td>{{cart_tblH6}}</td>
                                                        <td id="extra_cost_total_15">5.00</td>
                                                    </tr>


                                                    <input id="hidden_cost_total" value="15" type="hidden">

                                                    <tr id="show_cod_cost" class="hidecost_city_delivery" style="display: none;">
                                                        <td><i class="fa fa-truck"></i></td>
                                                        <td>{{cart_tblH7}}</td>
                                                        <td id="s_cod_cost">50.00</td>
                                                    </tr>
                                                    <input id="ship_city_id" value="0" type="hidden">
                                                    <input id="deliveryCostHidden" value="50.00" type="hidden">
                                                    <tr class="hidediscount_bar">
                                                        <td><i class="fa fa-chain-broken"></i></td>
                                                        <td>{{cart_tblH8}}</td>
                                                        <td class="disto" id="discount_total_22">
                                                            5.00 </td>
                                                    </tr>
                                                    <input id="discount_amount" value="5" type="hidden">
                                                    <input id="discount_type" value="1" type="hidden">
                                                    <tr id="s_total_amount_row">
                                                        <td colspan="2" style="font-weight: bolder; font-size: 14px;;"><i class="fa fa-money">&nbsp;&nbsp;</i>{{cart_tblH9}}</td>
                                                        <td style="font-weight: bolder; font-size: 20px;">
                                                            <h6><strong><span class="odometer" id="s_total_amount">110</span></strong></h6>
                                                        </td>
                                                    </tr>
                                                    <input id="total_invoice" value="110" type="hidden">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                </div>-->
                            <!--            </div>-->

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
                    </div>

                    <?php include 'include/footer.php';?>

                </div>

                <?php echo $cms->fotterJs(array('contact3'));?>
                    <?php echo $cms->angularJs(array('checkout3_angular'));?>
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

                        <!--for collapse active -->
                        <script type="text/javascript">
                            $(document).ready(function () {

                                // $('#collapseOne').removeClass('in');
                                $('#headingOne').addClass('active-panel');
                                //$('#collapseTwo').addClass('in');
                                //$('#headingTwo').addClass('active-panel');

                                $('.panel').on('show.bs.collapse', function (e) {
                                    var heading = $(this).find('.panel-heading');
                                    heading.addClass("active-panel");
                                });

                                $('.panel').on('hidden.bs.collapse', function (e) {
                                    var heading = $(this).find('.panel-heading');
                                    heading.removeClass("active-panel");
                                });
                            });
                        </script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('input[type="radio"]').click(function () {
                                    if ($(this).attr("value") == "r-1") {
                                        $(".box").not(".radio_one").hide();
                                        $(".radio_one").show('50');
                                        $("#isRadioChecked").show();
                                    }
                                    if ($(this).attr("value") == "r-2") {
                                        $(".box").not(".radio_two").hide();
                                        $(".radio_two").show('50');
                                        $("#isRadioChecked").show();
                                    }
                                    if ($(this).attr("value") == "r-3") {
                                        $(".box").not(".radio_three").hide();
                                        $(".radio_three").show('50');
                                        $("#isRadioChecked").show();
                                    }
                                });
                            });
                        </script>

    </body>

    </html>