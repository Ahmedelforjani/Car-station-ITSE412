<?php
  include 'DB_Connect.php';
?>

<!doctype html>
<!--[if IE 7 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
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

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key&amp;sensor=false"></script>

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
<section id="secondary-banner" class="dynamic-image-5"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Contact Us</h2>
                <h4>We are conveniently located just off Santa Monica Blvd</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page">
            <div class="col-md-12 padding-none">
                <!--MAP-->
                <div class="find_map row clearfix">
                    <h2 class="margin-bottom-25 margin-top-none">FIND US ON THE MAP</h2>
                    <div class="map margin-vertical-30">
                        <div id='google-map-listing' class="contact" data-longitude='13.180161' data-latitude='32.885353' data-zoom='7' style='height: 390px;'></div>
                    </div>
                </div>
                <!--MAP-->
                <!--CONTACT INFORMATION-->
                <div class="row contacts margin-top-25">
                    <!--LEFT INFORMATION-->
                    <div class="col-md-6 left-information">
                        <div class="contact_information information_head clearfix">
                            <h3 class="margin-bottom-25 margin-top-none">CONTACT INFORMATION</h3>
                            <div class="address clearfix margin-right-25 padding-bottom-40">
                                <div class="icon_address">
                                    <p><i class="fa fa-map-marker"></i><strong>Address:</strong></p>
                                </div>
                                <div class="contact_address">
                                    <p class="margin-bottom-none">My Car-Station<br>
                                        Tripoli, <br>
                                        Libya </p>
                                </div>
                            </div>
                            <div class="address clearfix address_details margin-right-25 padding-bottom-40">
                                <ul class="margin-bottom-none">
                                    <li><i class="fa fa-phone"></i><strong>Phone:</strong> <span>021-1234567</span></li>
                                    <li><i class="fa fa-envelope-o"></i><strong>Email:</strong> <a href="mailto:sales@company.com">sales@company.com</a></li>
                                    <li class="padding-bottom-none"><i class="fa fa-laptop"></i><strong>Web:</strong> <a href="http://company.com">www.company.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--INFORMATION HOUR-->
                        <div class="information_hour information_head margin-top-30 xs-padding-bottom-40">
                            <h3 class="margin-bottom-25 margin-top-none">BUSINESS HOURS</h3>
                            <div class="row">
                                <div class="col-sm-5 padding-left-none">
                                    <div class="deparment">
                                        <table class="table table-bordered no-border font-12px">
                                            <thead>
                                                <tr>
                                                    <td colspan="2"><strong>Sales Department</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php

                                              $query = "SELECT * FROM `work_time` ";
                                              $stmt = $con->prepare($query);
                                              $stmt->execute();
                                              $work_times = $stmt->fetchAll();

                                              foreach($work_times as $time) { ?>

                                                <tr>
                                                  <td><?php echo $time['day'] ?>:</td>
                                                  <td><?php echo $time['start_h'] . " - " .	$time['close_h']; ?></td>
                                                </tr>

                                              <?php
                                              }
                                              ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--INFORMATION HOUR-->
                    </div>
                    <!--LEFT INFORMATION-->

                    <!--RIGHT INFORMATION-->
                    <div class="col-md-5 col-lg-offset-1 col-md-offset-1 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">
                        <div class="contact_wrapper information_head">
                            <h3 class="margin-bottom-25 margin-top-none">CONTACT FORM</h3>
                            <div class="form_contact margin-bottom-20">
                                <div id="result"></div>
                                <fieldset id="contact_form">
                                    <input type="text" name="name" class="form-control margin-bottom-25" placeholder="Name  (Required)" />
                                    <input type="email" name="email" class="form-control margin-bottom-25" placeholder="Email  (Required)" />
                                    <textarea name="msg" class="form-control margin-bottom-25 contact_textarea" placeholder="Your message" rows="7"></textarea>
                                    <input id="submit_btn" type="submit" value="Send Message">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!--RIGHT INFORMATION-->

                </div>
                <!---CONTACT INFORMATION-->

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--container ends-->
</section>
<!--content ends-->
<div class="clearfix"></div>
<div class="back_to_top"> <img src="http://demo.themesuite.com/automotive/images/arrow-up.png" alt="scroll up" /> </div>

<!--Footer Start-->
<?php
include("Footer.php");
?>

<script src="js/retina.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- jQuery -->

<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() {
        //collect input field values
        var user_name       = $("input[name='name']").val();
        var user_email      = $("input[name='email']").val();
        var user_message    = $("textarea[name='msg']").val();

        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){
            $("input[name='name']").css("border", "1px solid red");
            proceed = false;
        } else {
			$("input[name='name']").css("border", "none");
		}
        if(user_email==""){
            $("input[name='email']").css("border", "1px solid red");
            proceed = false;
        } else {
			$("input[name='email']").css("border", "none");
		}
        if(user_message=="") {
            $("textarea[name='msg']").css("border", "1px solid red");
            proceed = false;
        } else {
			$("textarea[name='msg']").css("border", "none");
		}

        //everything looks good! proceed...
        if(proceed) {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userMessage':user_message};

            //Ajax post data to server
            $.post('contact_process.php', post_data, function(data){

                //load success massage in #result div element, with slide effect.
                $("#result").hide().html('<div class="success">'+data+'</div>').slideDown();

                //reset values in all input fields
                $('#contact_form input[type="text"]').val('');
				$('#contact_form input[type="email"]').val('');
                $('#contact_form textarea').val('');

            }).fail(function(err) {  //load any error data
                $("#result").hide().html('<div class="error">'+err.statusText+'</div>').slideDown();
            });
        }
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() {
        $("#contact_form input, #contact_form textarea").css('border-color','');
        $("#result").slideUp();
    });

});
</script>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/jquery.bxslider.js" type="text/javascript"></script>
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
</body>
</html>
