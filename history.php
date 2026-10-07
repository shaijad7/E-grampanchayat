<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$history_data = array();
$history_data = getAllhistoryData();
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
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
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMjcxNTA2MjczD2QWAgIDD2QWBAIBD2QWAgIDDxYCHgVjbGFzcwUGYWN0aXZlZAIFD2QWBAIBDxYCHgtfIUl0ZW1Db3VudAIBFgJmD2QWAmYPFQO3AeCqteCqsOCrjeCqtyA6IOCrqOCrpuCrp+Crri3gq6fgq68g4Kqu4Kq+4Kqf4KuHIOCqluCrh+CqpOCrgOCqteCqvuCqoeCrgOCqqOCrgCDgqrXgqr/gqrXgqr/gqqcg4Kqv4KuL4Kqc4Kqo4Kq+4KqT4Kqo4KuAIOCqk+CqqOCqsuCqvuCqh+CqqCDgqoXgqrDgqpzgq4DgqpMg4Kqu4Kq+4Kqf4KuHIENsaWNrIOCqleCqsOCriy1odHRwOi8vd3d3LmplcHVycGFuY2hheWF0LmNvbS9nb3Zwcm9qZWN0LmFzcHi3AeCqteCqsOCrjeCqtyA6IOCrqOCrpuCrp+Crri3gq6fgq68g4Kqu4Kq+4Kqf4KuHIOCqluCrh+CqpOCrgOCqteCqvuCqoeCrgOCqqOCrgCDgqrXgqr/gqrXgqr/gqqcg4Kqv4KuL4Kqc4Kqo4Kq+4KqT4Kqo4KuAIOCqk+CqqOCqsuCqvuCqh+CqqCDgqoXgqrDgqpzgq4DgqpMg4Kqu4Kq+4Kqf4KuHIENsaWNrIOCqleCqsOCri2QCAw8WAh8BAgEWAmYPZBYCZg8VA3vgqpfgqr7gqq7gqqjgq4sg4Kq14Kq/4KqV4Kq+4Kq4IOCqheCqqOCrhyDgqpfgqr7gqq4g4Kqu4Kq+4KqCIOCqn+Crh+CqleCqqOCri+CqsuCri+CqnOCrgCDgqo/gqpXgqqbgqq4g4KqF4Kqn4Kqk4KqoIOCqm+Crhy4GVEFSRVNIB01FSFNBTkFkZCMXkJFtI/qhtUIqx3ldb1WjcMhHZhPngnCtLGRlYl6D" />
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="2068001F" />
</div>
        <!-- Header : START -->
        

<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account" style="color: darkblue;">
                    
                    <script>
                        var blink_speed = 500;
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
        <div class="body-content outer-top-xs" id="top-banner-and-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                        <div class="blog-page">
                            <div class="blog-post wow fadeInUp">
                                <h1>यावल पिंप्री गावाची लोककथा</h1>
								<?php
												if (!empty($history_data)) {
										foreach ($history_data as $val) {
														?>
                                <p style="text-align: justify;"><?php echo $val['history_story']; ?> </p>
                                <?php
										}
								}
														?>
								&nbsp;
                                <a href="blog-details.html">
                                    <img class="img-responsive" src="assets/images/blog-post/blog_big_01.html" alt="" /></a>
                                <p> <a class="contact-form" href="javascript:void(0);">यावल पिंप्री</a>  </p>
                            </div>
                            <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding: 0px; background: none; box-shadow: none; margin-top: 15px; border: none">
                                <div class="text-right">
                                    <div class="pagination-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar : START -->
                    

<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
        <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs" style="background-color: antiquewhite;">
        <h3 class="section-title">माननीय</h3>
        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
		<?php
												if (!empty($minister_data)) {
										foreach ($minister_data as $val) {
														?>
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image">
                            <img src="images/banner/mantri.jpeg" alt="मुख्यमंत्री" />
                        </div>
                    </div>
                    <div class="product-info text-left m-t-20">
                        <p><?php echo $val['minister_category']; ?>,</p>
                        <div class="product-price">
                            <span class="price"><?php echo $val['minister_name']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
			<?php
										}
								}
														?>
            
            
        </div>
    </div>
	
    <!-- <div class="sidebar-widget product-tag wow fadeInUp outer-bottom-xs"style="background-color: antiquewhite;">
    <h3 class="section-title">ताज्या बातम्या </h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
                <marquee id="scroll_news" behavior="scroll" direction="up" scrollamount="2">
                    <?php
												if (!empty($news_data)) {
										foreach ($news_data as $val) {
														?>
                            <div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">
                                <a class="item" title="<?php echo $val['news_name']; ?>" href="govproject.html" target="_blank"><?php echo $val['news_name']; ?></a>
                            </div>
							<?php
										}
								}
														?>
                        
                </marquee>
            </div>
        </div>
    </div> -->
    <a id="blinker" href="https://bhulekh.mahabhumi.gov.in/" target="_blank" style="font-size:21px">7/12 डाउनलोड करण्यासाठी येथे क्लिक करा. </a><br>
					&nbsp &nbsp<a id="blinker1" href="https://www.esakal.com/" target="_blank" style="font-size:21px">कृपया येथे क्लिक करा आणि वर्तमानपत्र पहा</a>
    <!----------- Testimonials------------->
    <div class="sidebar-widget wow fadeInUp outer-top-vs outer-bottom-vs" style="background-color: antiquewhite;">
        <div id="testimonial" class="advertisement">
            
        <div class="item">
                        <div class="testimonials"><em>"</em>गावातील ग्रामविकास आणि तंत्रज्ञान खूप प्रगत आहे.<em>"</em></div>
                        <div class="clients_author">सरपंच<span>यावल पिंप्री</span> </div>
                    </div>
                
        </div>
    </div>
    
</div>

                    <!--Sidebar : END-->
                </div>
            </div>
        </div>
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

</html>
