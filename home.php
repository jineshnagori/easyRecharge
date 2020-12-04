<?php

    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Easy Recharge a Business Corporate Category Flat Bootstrap Responsive Website Template | Home :: w3layouts
    </title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Easy Recharge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic"
        rel="stylesheet" type="text/css">
    <!--//fonts-->
    <!-- js -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- js -->
    <script>
        $(document).ready(function () {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                var $target = $(e.target);

                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

            });
            $(".prev-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }
    </script>
</head>

<body>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
    <div id="codefund">
        <!-- fallback content -->
    </div>
    <script src="https://codefund.io/properties/441/funder.js" async="async"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149859901-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-149859901-1');
    </script>

    <script>
        window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments) }; ga.l = +new Date;
        ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
        ga('require', 'eventTracker');
        ga('require', 'outboundLinkTracker');
        ga('require', 'urlChangeTracker');
        ga('send', 'pageview');
    </script>
    <script async src="/js/autotrack.js"></script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="/images/demobar_w3_4thDec2019.css">

        <div class="banner">
            <div class="header">
                <div class="logo">
                    <h1><a href><i><img src="images/cell.png" alt=" "></i>Easy Recharge</a></h1>
                </div>
                <div class="top-nav">
                    <span class="menu"><img src="images/menu.png" alt=" "></span>
                    <ul class="nav1">
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Mobile</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                    <!-- script-for-menu -->
                    <script>
                        $("span.menu").click(function () {
                            $("ul.nav1").slideToggle(300, function () {
                                // Animation complete.
                            });
                        });
                    </script>
                    <!-- /script-for-menu -->
                </div>
                <!-- start search-->
                <!-- <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search item..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value>
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script> -->


                <div class="clearfix"> </div>
            </div>
            <div class="container">
                <div class="banner-info">
                    <h3>Get Free Coupons and Discounts on Top Brands With Every Recharge</h3>
                </div>
                <div class="buttons">
                    <!-- <ul>
				<li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal" data-target="#myModal">Mobile</a></li>
				<li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal" data-target="#myModal1">DTH</a></li>
				<li><a class="hvr-shutter-in-vertical" href="#" data-toggle="modal" data-target="#myModal2">Datacard</a></li>
			</ul> -->

                </div>
            </div>
        </div>
        <!---728x90--->


        <div class="content-bottom">
            <div class="btm-grids">
                <div class="col-md-4 btm-grid back-col1 text-center">
                    <img src="images/bbbb.png" alt>
                </div>
                <div class="col-md-4 btm-grid btm-wid">
                    <h3>SPECIAL RECHARGE OFFERS</h3>
                    <p>Nemo enim ipsam voluptatem
                        quia voluptas sit aspernatur
                        aut odit aut fugit, sed quia conse
                        magni dolores eos qui ratione. Nemo enim ipsam voluptatem
                        quia voluptas sit aspernatur
                        aut odit aut fugit, sed quia conse
                        magni dolores eos qui ratione.</p>
                </div>
                <div class="col-md-4 btm-grid back-col2 text-center">
                    <img src="images/bbb1.png" alt>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!---728x90--->


        <div class="coupons">
            <div class="container">
                <div class="coupons-grids text-center">
                    <div class="col-md-3 coupons-gd">
                        <h3>RECHARGE IN <span>3 SIMPLE STEPS</span></h3>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="images/web.png" alt=" "></span></h4>
                        <p>LOGIN TO YOUR ACCOUNT</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="images/credit.png" alt=" "></span></h4>
                        <p>ENTER RECHARGE DETAILS</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="images/security.png" alt=" "></span></h4>
                        <p>MAKE PAYMENT</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!---728x90--->


        <div class="content-bottom-two">
            <div class="col-md-6 content-left text-center">
                <img src="images/bbb5.png" alt>
            </div>
            <div class="col-md-6 content-right text-center">
                <img src="images/bbb3.png" alt>
            </div>
            <div class="clearfix"></div>
            <div class="btm-pos">
                <h3>Exclusive Offers</h3>
                <p> Nam libero tempore, cum soluta
                    nobis est eligendi optio cumque
                    nihil impedit quo minus id quod
                    maxime placeat facere possimus,
                    omnis voluptas assumenda est. </p>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="foo-grids">
                    <div class="col-md-3 foo-grid"></div>
                    <div class="col-md-3 foo-grid">
                        <h3>MOBILE RECHARGES</h3>
                        <ul>
                            <li><a href="#">Airtel</a></li>
                            <li><a href="#">Vi</a></li>
                            <li><a href="#">BSNL</a></li>
                            <li><a href="#">Jio</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 foo-grid">
                        <h3>PAYMENT OPTIONS</h3>
                        <ul>
                            <li>Credit Cards</li>
                            <li>Debit Cards</li>
                            <li>Any Visa Debit Card (VBV)</li>
                            <li>Direct Bank Debits</li>
                            <li>Cash Cards</li>
                        </ul>
                    </div>
                    <div class="col-md-3 foo-grid"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <h2><a href>Easy Recharge</a></h2>
                <p>&copy; 2020 Easy Recharge. All Rights Reserved.</p>
                <ul>
                    <li><a class="face1" href="#"></a></li>
                    <li><a class="face2" href="#"></a></li>
                    <li><a class="face3" href="#"></a></li>
                    <li><a class="face4" href="#"></a></li>
                </ul>
            </div>
        </div>
        <!-- mobile -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                                title="Step 1">

                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                                title="Step 2">

                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                                                title="Step 3">

                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"
                                                title="Step 4">

                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"
                                                title="Step 5">

                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab"
                                                title="Complete">

                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <form method="POST" role="form">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/mobile.png" alt>
                                                </div>
                                                <div class="mobile-right">
                                                    <h4>Enter your mobile number</h4>
                                                    <label>+91</label><input name="num" type="text" class="mobile-text" value onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button"
                                                        class="mob-btn btn btn-primary next-step">Next</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step2">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/mobile.png" alt>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>Prepaid or Postpaid?</h4>
                                                    <div class="radio-btns">
                                                        <div class="swit">
                                                            <div class="check_box">
                                                                <img src="images/card.png" alt>
                                                                <div class="clearfix"></div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="radio"
                                                                            checked><i></i>Prepaid
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="check_box">
                                                                <img src="images/card.png" alt>
                                                                <div class="clearfix"></div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="radio"><i></i>Postpaid
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button"
                                                        class="mob-btn btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button"
                                                        class="mob-btn btn btn-primary next-step">Next</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/mobile.png" alt>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>Which operator?</h4>
                                                    <ul class="rchge-icons">
                                                        <li><a href="#">Airtel</a></li>
                                                        <li><a href="#">Vi</a></li>
                                                        <li><a href="#">BSNL</a></li>
                                                        <li><a href="#">Jio</a></li>
                                                    </ul>
                                                    <div class="section_room">
                                                        <select name="operator" id="country" onchange="change_country(this.value)"
                                                            class="frm-field required">
                                                            <option value="null">Airtel</option>
                                                            <option value="null">Vi</option>
                                                            <option value="AX">Bsnl</option>
                                                            <option value="AX">Jio</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button"
                                                        class="mob-btn btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button"
                                                        class="mob-btn btn btn-primary btn-info-full next-step">Next</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step4">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/mobile.png" alt>
                                                </div>
                                                <div class="mobile-right ">
                                                    <h4>Which Circle?</h4>
                                                    <div class="map-image">
                                                        <img src="images/map.png" alt>
                                                    </div>
                                                    <div class="section_room">
                                                        <select name="circle" id="country" onchange="change_country(this.value)"
                                                            class="frm-field required">
                                                            <option value="null">Andaman and Nicobar</option>
							
                                                            <option value="null">Andhra Pradesh</option>

                                                            <option value="AX">Arunachal Pradesh</option>

                                                            <option value="AX">Assam</option>

                                                            <option value="AX">Bihar</option>

                                                            <option value="AX">Chandigarh</option>

                                                            <option value="AX">Chhattisgarh</option>

                                                            <option value="AX">Daman and Diu</option>

                                                            <option value="AX">Dadra and Nagar Haveli</option>

                                                            <option value="AX">Delhi</option>
                                                            
                                                            <option value="AX">Goa</option>

                                                            <option value="AX">Gujarat</option>

                                                            <option value="AX">Haryana</option>

                                                            <option value="AX">Himachal Pradesh</option>

                                                            <option value="AX">Jammu and Kashmir</option>

                                                            <option value="AX">Jharkhand</option>

                                                            <option value="AX">Karnataka</option>

                                                            <option value="AX">Kerala</option>

                                                            <option value="AX">Lakshadweep</option>

                                                            <option value="AX">Madhya Pradesh</option>

                                                            <option value="AX">Maharashtra</option>

                                                            <option value="AX">Manipur</option>

                                                            <option value="AX">Meghalaya</option>

                                                            <option value="AX">Mizoram</option>

                                                            <option value="AX">Nagaland</option>

                                                            <option value="AX">Orissa</option>

                                                            <option value="AX">Pondicherry</option>
                                                            
                                                            <option value="AX">Punjab</option>

                                                            <option value="AX">Rajasthan</option>

                                                            <option value="AX">Sikkim</option>

                                                            <option value="AX">Tamil Nadu</option>

                                                            <option value="AX">Telangana</option>

                                                            <option value="AX">Tripura</option>

                                                            <option value="AX">Uttarakhand</option>

                                                            <option value="AX">Uttar Pradesh</option>
                                                            
                                                            <option value="AX">West Bengal</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button"
                                                        class="mob-btn btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button"
                                                        class="mob-btn btn btn-primary btn-info-full next-step">Next</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step5">
                                            <div class="mobile-grids">
                                                <div class="mobile-left text-center">
                                                    <img src="images/mobile.png" alt>
                                                </div>
                                                <div class="mobile-right">
                                                    <div class="mobile-rchge">
                                                        <a href="plans.html">VIEW PLANS</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><input type="submit" value="SIGNIN"></li>
                                                <li><button type="button"
                                                        class="mob-btn btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button" class="mob-btn btn btn-primary btn-info-full"
                                                        data-dismiss="modal">Cancel</button></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- //mobile -->
        <!-- login -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-left">
                                    <!-- <ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul> -->
                                    <img src="images/login.png">
                                </div>
                                <div class="login-right">
                                    <form>
                                        <h3>Signin with your account </h3>
                                        <input type="text" value="Enter your mobile number or Email"
                                            onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}"
                                            required>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required>
                                        <input type="submit" value="SIGNIN">
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
        <!-- signup -->
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-left">
                                    <!-- <ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul> -->
                                    <img src="images/login.png">
                                </div>
                                <div class="login-right">
                                    <form>
                                        <h3>Create your account </h3>
                                        <input type="text" value="Name" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Name';}" required>
                                        <input type="text" value="Mobile number" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Mobile number';}" required>
                                        <input type="text" value="Email id" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Email id';}" required>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required>

                                        <input type="submit" value="CREATE ACCOUNT">
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //signup -->
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
    </body>
</body>

</html>