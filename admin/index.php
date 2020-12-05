<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../adminlogin.html');
 }
 $mysqli = new mysqli("localhost", "root", "", "easyrecharge"); 
 $sql = "SELECT * FROM recharge"; 
 $result = $mysqli->query($sql); 
$mysqli->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Easy Recharge a Business Corporate Category Flat Bootstrap Responsive Website Template | Home :: w3layouts
    </title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
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
    <script async src="/js/autotrack.js"></script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="../images/demobar_w3_4thDec2019.css">

        <div class="banner">
            <div class="header">
                <div class="logo">
                    <h1><a href><i><img src="../images/cell.png" alt=" "></i>Easy Recharge</a></h1>
                </div>
                <div class="top-nav">
                    <span class="menu"><img src="../images/menu.png" alt=" "></span>
                    <ul class="nav1">
                        <li><a href="../logout.php">logout</a></li>
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
                <div class="clearfix"> </div>
            </div>
            <div class="container">
                <div class="banner-info">
                    <h3>Welcome To Admin Panel.</h3>
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

        <div class="table-responsive">
        <table class="table">
            <thead> 
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Operator</th>
                <th scope="col">Circler</th>
            </tr>
            </thead>
            <tbody>
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
            ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['operator'];?></td>
                <td><?php echo $rows['circle'];?></td>
            </tr>
            <?php 
                } 
            ?> 
            </tbody>
        </table>
        </div>
        <div class="content-bottom">
            <div class="btm-grids">
                <div class="col-md-4 btm-grid back-col1 text-center">
                    <img src="../images/bbbb.png" alt>
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
                    <img src="../images/bbb1.png" alt>
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
                        <h4><span><img src="../images/web.png" alt=" "></span></h4>
                        <p>LOGIN TO YOUR ACCOUNT</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="../images/credit.png" alt=" "></span></h4>
                        <p>ENTER RECHARGE DETAILS</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <h4><span><img src="../images/security.png" alt=" "></span></h4>
                        <p>MAKE PAYMENT</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!---728x90--->


        <div class="content-bottom-two">
            <div class="col-md-6 content-left text-center">
                <img src="../images/bbb5.png" alt>
            </div>
            <div class="col-md-6 content-right text-center">
                <img src="../images/bbb3.png" alt>
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
        <!-- for bootstrap working -->
        <script src="../js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
    </body>
</body>

</html>