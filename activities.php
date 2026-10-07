
<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$sa_data = array();
$sa_data = getAllsarpanchData();
$d_sa_data = array();
$d_sa_data = getAlld_sarpanchData();
$talati_data = array();
$talati_data = getAlltalatiData();
$gram_sevak_data = array();
$gram_sevak_data = getAllgram_sevakData();
$history_data = array();
$history_data = getAllhistoryData();
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
$activity_data = array();
$activity_data = getAllactivityData();
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>
	यावल पिंप्री ग्रामपंचायत
</title>

    <!-- Style Sheet : START -->
    

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/blue.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.css" />
<link rel="stylesheet" href="assets/css/owl.transitions.css" />
<link rel="stylesheet" href="assets/css/animate.min.css" />
<link rel="stylesheet" href="assets/css/rateit.css" />
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
<link href="assets/css/lightbox.css" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />



    <!-- Style Sheet : START -->
</head>
<body class="cnt-home">
    <form method="post" action="#" id="form1">
<div class="aspNetHidden">

</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="29D20F7E" />
</div>
        <!-- Header : START -->
        

<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account" style="color: darkblue;">
                    
                    <script>
                        var blink_speed = 0;
                        var t = setInterval(function () {
                            var ele = document.getElementById('blinker');
                            ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
                        }, blink_speed);
                    </script>

					
                </div>
                <!-- /.cnt-account -->

                
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 logo-holder">
                    <div class="logo">
                        <a href="index.php">
                             <p><font size="6"> यावल पिंप्री ग्रामपंचायत</font></p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 social">
                    <ul class="link" style="margin-top: 20px;">
                        <li class="instagram pull-right"><a target="_blank" rel="nofollow" href="https://www.instagram.com/" title="Instagram"></a></li>
                        <li class="tw pull-right"><a target="_blank" rel="nofollow" href="https://twitter.com/" title="Twitter"></a></li>
                        <li class="fb pull-right"><a target="_blank" rel="nofollow" href="https://www.facebook.com/" title="Facebook"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li id="Header_A1" class="active"><a href="index.php">मुख्य पान</a></li>
                                <li id="Header_A2" class="dropdown"><a href="history.php">इतिहास</a></li>
                                <li id="Header_A3" class="dropdown"><a href="dharohar.php">वारसा</a></li>
                                <li id="Header_A4" class="dropdown"><a href="activities.php">उपक्रम</a></li>
                                <li id="Header_A13" class="dropdown"><a href="achievements.php">उपलब्धी</a> </li>
                                <li id="Header_A5" class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">पदाधिकारी</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="sabhya.php">पंचायत</a></li>
                                                            <li><a href="javascript:void(0);">सार्वजनिक संस्था</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="Header_A6" class="dropdown"><a href="govproject.php">योजना</a> </li>
                                <li id="Header_A7" class="dropdown"><a href="development.php">विकासाचे काम</a> </li>
                                <!-- <li id="Header_A8" class="dropdown"><a href="bloodgroup.php">रक्त ग्रुपची माहिती</a> </li> -->
                                <li id="Header_A10" class="dropdown"><a href="feedback.php">अभिप्राय</a> </li>
                                  <li id="Header_A12" class="dropdown"><a href="contact.php">संपर्क</a> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <!-- Header : END -->
        
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                
            </ul>
        </div>
    </div>
</div>

        <!-- Content : START -->
        <div class="body-content outer-top-xs">
            <div class="container">
                <div class="single-product">
                    
								<?php
												if (!empty($activity_data)) {
										foreach ($activity_data as $val) {
														?>
          		
                                <div class="detail-block outer-bottom-xs" style="background-color: antiquewhite;">
								
                                    <div class="row wow fadeInUp">
                                        
										<div class=" col-sm-6 col-md-6">
                                           
										   <div class="product-item-holder size-big single-product-gallery small-gallery" style="padding-bottom: 0px;">
                                              
												<div id="owl-single-product">
                                                    <div class="single-product-gallery-item" id="slide1">
                                                        <a data-lightbox="image-1" data-title="Gallery" href="images/banner/m1.png">
                                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="images/banner/m1.png" />
                                                        </a>
                                                    </div>
												</div><br><br><br>
											
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 ">
										
                                            <div class="product-info">
                                                <h4 class="name"><?php echo $val['activity_name']; ?></h4>
                                                <div class="description-container ">
                                                   <?php echo $val['activity_detail']; ?>
												   </div>
                                            </div><br><br><br><br><br><br><br><br>
											
                                        </div>
									
                                    </div>
										
                                </div>
                
                    <?php
										}
								}
														?>

 
                </div>
            </div>
        </div>
        <!-- Content : END -->
        <!-- Footer : START -->
        <footer id="footer" class="footer color-bg">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="module-heading">
                                <h4 class="module-title" style="color:#898989 ;">विकासकामांसाठी देणगी</h4>
                            </div>
                            <div class="module-body">
                                <ul class="toggle-footer" style="">
                                    <li class="media">
                                        <div class="media-body">
                                            <p style="color:#ffffff;"><b>BANK NAME : </b>********</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-body">
                                            <p style="color:#ffffff;"><b>A/C NO : </b>**************</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-body">
                                            <p style="color:#ffffff;"><b>IFSC CODE : </b>0000000000</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="module-heading">
                                <h4 class="module-title" style="color:#898989;">सरकारी वेबसाईट</h4>
                            </div>
                            <div class="module-body">
                                <ul class="list-unstyled">
                                    <li class="first"><a title="GHARKUL YOJANA"
                                            href="https://rdd.maharashtra.gov.in/pradhan-mantri-awas-yojana-rural"
                                            target="_blank">ग्राम गृहनिर्माण आणि ग्राम विकास विभाग</a></li>
                                    <li class="first"><a title="POST OFFICE"
                                            href="https://www.indiapost.gov.in/vas/Pages/IndiaPostHome.aspx">भारतीय पोस्ट</a></li>
                                    <li class="first"><a title="WATER SUPPLY" href="https://mjp.maharashtra.gov.in/"
                                            target="_blank">जलसंपदा, पाणीपुरवठा आणि कल्पसर विभाग</a></li>
                                    <li class="first"><a title="UJJWALA GAS YOJANA"
                                            href="https://www.pmuy.gov.in/hi/ujjwala2.html">उज्ज्वला गॅस योजना</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <div class="module-heading">
                                <h4 class="module-title" style="color:#898989;">सरकारी वेबसाईट</h4>
                            </div>
                            <div class="module-body">
                                <ul class="list-unstyled">
                                    <li class="first"><a title="VOTAR ID CARD" href="https://voters.eci.gov.in/"
                                            target="_blank">पॅन कार्ड</a></li>
                                    <li class="first"><a title="AADHAR ID CARD" href="https://uidai.gov.in/"
                                            target="_blank">आधार ओळखपत्र</a></li>
                                            <li class="first"><a title="AADHAR ID CARD" href="https://voters.eci.gov.in//"
                                            target="_blank">मतदार ओळखपत्र</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="module-heading">
                                <h4 class="module-title" style="color:#898989;">आपत्कालीन संपर्क</h4>
                            </div>
                            <div class="module-body">
                                <ul class="list-unstyled">
                                    <li class="first"><a href="javascript:void(0);" title="POLICE STATION CONTACT NO"
                                            target="_blank">पोलिस क्रमांक: 100</a></li>
                                    <li class="first"><a href="javascript:void(0);" title="FIRE CONTACT NO"
                                            target="_blank">अग्निशामक क्रमांक : 101</a></li>
                                    <li class="first"><a href="javascript:void(0);" title="" target="_blank">रुग्णवाहिका क्रमांक: 102 & 108</a></li>
                                    <li class="first"><a href="javascript:void(0);" title="" target="_blank">महिला मदत क्रमांक : 1091 & 181</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-bar">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 no-padding">
                        <div class="clearfix">
                            <p style="color:white; text-align:center;">ALL RIGHTS RESERVED BY YAVAL PIMPPRI GRAM PANCHAYAT <sup
                                    style="color:white;">®</sup></a> <br />
                                <script type="text/javascript"></script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Footer : END -->
    </form>
    

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

<!-- Mirrored from www.jepurpanchayat.com/activities.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:45:28 GMT -->
</html>
