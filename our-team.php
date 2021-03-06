
<?php
include 'admin/Classes/Employee.php';

$employeemanager = new employeeManager();
$employeemanager->loadEmployees();
$employees = $employeemanager->getAllEmployees();

?>



<!doctype html>

<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico">
<title>My Car Station &amp; It's All About Cars</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen" />
<!-- Custom styles for this template -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/jquery.selectbox.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/mobile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/ts.css" type="text/css" rel="stylesheet">
<link href="css/sweetalert.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- Twitter Feed Scripts 
     Uncomment to activate

<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="js/twitter/twitter_feed.js"></script> -->

</head>

<body>
<!--Header Start-->
<?php 
include("nav.php");
?>
<!--Header End-->
<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-11"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Our Team</h2>
                <h4>Customer service is not a department, it's everyone's job.</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Our Team</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--#secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page">
            <div class="find_team padding-bottom-40 sales_team margin-top-30 clearfix">
                <div class="row">
                    <div class="col-lg-12 padding-left-none padding-right-none">
                        <h2 class="margin-top-none">MEET OUR SALES TEAM</h2>
                    </div>
                    <div class="people clearfix">
                        <div class="row">
                        <?php 
                        if (true)
                        {
                        foreach($employees as $employee) { ?>
                        <div class="col-md-3 col-sm-3 scroll_effect fadeInUp margin-bottom-50">
                                <div class="team margin-top-15 xs-margin-bottom-30"> <a href="images/team4-lrg.jpg" class="fancybox"> 
                                    <img src=<?php if($employee->getEmployeeImg() != '') echo "admin/images/".$employee->getEmployeeImg(); else echo "admin/images/employee_default.png" ?> style="height: 200px; max-width: inherit" class="aligncenter" alt="No Image Found" /> </a>
                                    <div class="name_post padding-bottom-15">
                                        <h4><?php echo $employee->getEmployeeName() ?></h4>
                                        <p><?php echo $employee->getEmployeeJobTitle() ?></p>
                                    </div>
                                    <div class="about_team padding-bottom-10">
                                        <p class="margin-vertical-15">This is suppose to be a descreption about the employee</p>
                                        <ul>
                                            <li><i class="fa fa-mobile"></i><?php echo $employee->getEmployeePhone() ?></li>
                                            <li><i class="fa fa-envelope-o"></i><a href="#"><?php echo $employee->getEmployeeEmail() ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="social_team pull-left">
                                        <ul class="social margin-bottom-none">
                                            <li class="margin-bottom-none"><a class="sc-1" href="#"></a></li>
                                            <li class="margin-bottom-none"><a class="sc-2" href="#"></a></li>
                                            <li class="margin-bottom-none"><a class="sc-5" href="#"></a></li>
                                            <li class="margin-bottom-none"><a class="sc-9" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>



<!--Footer Start-->
<?php 
include("Footer.php");
?>
<!-- Bootstrap core JavaScript --> <script src="js/retina.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key&amp;sensor=false"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script src="js/modernizr.custom.js"></script> <script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.bxslider.js" type="text/javascript"></script> 
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>
</body>
</html>