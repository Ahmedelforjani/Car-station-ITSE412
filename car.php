<?php 
    include 'admin/Classes/Car.php';
    $car;
    $images;

    if(isset($_GET['id'])){
        $car_id = $_GET['id'];
        $car = new car($car_id);
        $images = $car->getImages();
    }
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
        <link href="css/social-likes.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/print.css" rel="stylesheet" type="text/css" media="print">
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
        <div class="clearfix"></div>
        <section id="secondary-banner" class="dynamic-image-8"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <h2>Inventory Listing</h2>
                        <h4>Powerful Inventory Marketing, Fully Integrated</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 ">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Inventory</a></li>
                            <li>Inventory Listing</li>
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
                <div class="inner-page inventory-listing">
                    <div class="inventory-heading margin-bottom-10 clearfix">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <span class="margin-top-10">Our template platform will maximize the exposure of your inventory online</span> </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                                <h2>$ <?php echo $car->getPrice() ?></h2>
                                <em>Plus Taxes & Licensing</em> </div>
                        </div>
                    </div>
                    <div class="content-nav margin-bottom-30">
                        <div class="row">
                            <ul>
                                <li class="prev1 gradient_button"><a href="#">Prev Vehicle</a></li>
                                <li class="print gradient_button"><a class="print_page">Print This Vehicle</a></li>
                                <li class="email gradient_button"><a href="forms/friend.php?recaptcha" class="fancybox_div">Email to a Friend</a></li>
                                <li class="next1 gradient_button"><a href="#">Next Vehicle</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none"> 
                            <!--OPEN OF SLIDER-->
                            <div class="listing-slider">
                                <section class="slider home-banner">
                                    <div class="flexslider" id="home-slider-canvas">
                                        <ul class="slides">
                                            <?php 
                                                $i = 0;
                                                foreach ($images as $img) {
                                                    $i++;
                                                    echo 
                                                        '<li data-thumb="images/boxster'.$i.'_slide.jpg"> 
                                                            <img src="admin/images/car-images/'.$img.'" alt="" data-full-image="images/boxster'.$i.'.jpg" />
                                                        </li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </section>
                                <section class="home-slider-thumbs">
                                    <div class="flexslider" id="home-slider-thumbs">
                                        <ul class="slides">
                                            <?php 
                                                $i = 0;
                                                foreach ($images as $img) {
                                                    $i++;
                                                    echo 
                                                        '<li data-thumb="images/thumbnail'.$i.'.jpg"> 
                                                            <a href="#">
                                                                <img src="admin/images/car-images/'.$img.'" alt="" />
                                                            </a> 
                                                        </li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <!--CLOSE OF SLIDER--> 
                            <!--Slider End-->
                            <div class="clearfix"></div>
                            <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#vehicle" data-toggle="tab">Vehicle Overview</a></li>
                                    <li><a href="#features" data-toggle="tab">Features &amp; Options</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                                    <div class="tab-pane fade in active" id="vehicle">
                                        <?php echo $car->getOverview(); ?>
                                    </div>
                                    <div class="tab-pane fade" id="features">

                                        <?php echo $car->getOptions(); ?>
                                        <!-- <ul class="fa-ul">
                                            <li><i class="fa-li fa fa-check"></i> Adaptive Cruise Control</li>
                                            
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none">
                            <div class="side-content">
                                <div class="car-info margin-bottom-50">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>CAR NAME:</td>
                                                    <td><?php echo $car->getName(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>MODEL:</td>
                                                    <td><?php echo $car->getModel(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>CATEGORY:</td>
                                                    <td><?php echo $car->getCategoryName(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>COLOR:</td>
                                                    <td><?php echo $car->getColor(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>MILAGE:</td>
                                                    <td><?php echo $car->getMilage(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>ENGINE:</td>
                                                    <td><?php echo $car->getEngine(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>DOORS:</td>
                                                    <td><?php echo $car->getDoors(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>CONDITIONS:</td>
                                                    <td><?php echo $car->getCondition(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>PASSENGERS:</td>
                                                    <td><?php echo $car->getPassengers(); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>TRANSMISSION:</td>
                                                    <td><?php echo $car->getTransmission(); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <ul class="social-likes pull-right" data-url="http://themesuite.com" data-title="Blog Post">
                                    <li class="facebook" title="Share link on Facebook"></li>
                                    <li class="plusone" title="Share link on Google+" data-counter="includes/googleplusonecount.php?url=http://google.com&amp;callback=?"></li>
                                    <li class="pinterest" title="Share image on Pinterest" data-media=""></li>
                                    <li class="twitter" title="Share link on Twitter"></li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="financing_calculator margin-top-40">
                                    <h3>FINANCING CALCULATOR</h3>
                                    <div class="table-responsive">
                                        <table class="table no-border no-margin">
                                            <tbody>
                                                <tr>
                                                    <td>Cost of Vehicle ($):</td>
                                                    <td><input type="text"  class="number cost" placeholder="10000" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Down Payment ($):</td>
                                                    <td><input type="text"  class="number down_payment" placeholder="1000" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Term of Loan in Years:</td>
                                                    <td><input type="text"  class="number loan_years" placeholder="5" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="bi_weekly clearfix">
                                        <div class="pull-left">Frequency of Payments:</div>
                                        <div class="dropdown_container ">
                                            <select class="frequency css-dropdowns">
                                                <option value='0'>Bi-Weekly</option>
                                                <option value='1'>Weekly</option>
                                                <option value='2'>Monthly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                                    <div class="clear"></div>
                                    <div class="calculation">
                                        <div class="table-responsive">
                                            <table>
                                                <tr>
                                                    <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                                    <td><strong class="payments">60</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>PAYMENT AMOUNT:</strong></td>
                                                    <td><strong class="payment_amount">$ 89.11</strong></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="recent-vehicles-wrap">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles padding-left-none xs-padding-bottom-20">
                                <h5 class="margin-top-none">Similar Vehicles</h5>
                                <p>Browse through the vast
                                    selection of vehicles that
                                    have recently been added
                                    to our inventory.</p>
                                <div class="arrow3 clearfix" id="slideControls3"><span class="prev-btn"></span><span class="next-btn"></span></div>
                            </div>
                            <div class="col-md-10 col-sm-8 padding-right-none sm-padding-left-none xs-padding-left-none">
                                <div class="carasouel-slider3">
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car1.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2012 Porsche Cayenne GTS</strong></h6>
                                                <h6>1 Owner, 26,273 miles</h6>
                                                <h5>$ 79,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car2.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2009 Porsche Boxster</strong></h6>
                                                <h6>New Tires, 26,273 miles</h6>
                                                <h5>$ 34,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car3.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2013 Porsche Panamera S</strong></h6>
                                                <h6>Demonstrator, 7,088 miles</h6>
                                                <h5>$ 63,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car4.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2010 Porsche Carrera 4S</strong></h6>
                                                <h6>AWD, 21,900 miles</h6>
                                                <h5>$ 73,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car5.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2012 Porsche Carrera S</strong></h6>
                                                <h6>Convertible, 22,158 miles</h6>
                                                <h5>$ 56,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car6.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2013 Porsche GTS</strong></h6>
                                                <h6>1 Owner, 3,914 miles</h6>
                                                <h5>$ 94,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car7.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2014 Porsche Cayenne GTS</strong></h6>
                                                <h6>1 Owner, 7 miles</h6>
                                                <h5>$ 114,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car8.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2014 Porsche GTS</strong></h6>
                                                <h6>1 Owner, 5 miles</h6>
                                                <h5>$ 99,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="car-block">
                                            <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="http://demo.themesuite.com/automotive/images/c-car9.jpg" alt="" class="img-responsive"> </div>
                                            <div class="car-block-bottom">
                                                <h6><strong>2009 Porsche Carrera 4S</strong></h6>
                                                <h6>1 Owner, 114,239 miles</h6>
                                                <h5>$ 39,995</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--container ends--> 
        </section>
        <!--content ends-->
        <div class="clearfix"></div>

        <!--Footer Start-->
        <?php include("Footer.php"); ?>
        <!-- Bootstrap core JavaScript --> <script src="js/retina.js"></script> 
        <script src="js/main.js"></script> 
        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?ver=4.1"></script> 
        <script type="text/javascript" src="js/jquery.fancybox.js"></script> 
        <script src="js/modernizr.custom.js"></script> 
        <script src="js/social-likes.min.js"></script><script defer src="js/jquery.flexslider.js"></script> 
        <script src="js/jquery.bxslider.js" type="text/javascript"></script> 
        <script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
        <script type="text/javascript" src="js/jquery.easing.js"></script>
        <script type="text/javascript"> 
            $(document).ready(function(){
                $('#features ul').addClass('fa-ul');
                $('#features ul li').prepend('<i class="fa-li fa fa-check"></i>');
            });
        </script>
    </body>
</html>