<?php
    include 'DB_Connect.php';
    include 'admin/Classes/Category.php';
    include 'admin/Classes/Slider.php';
    include 'admin/Classes/Car.php';
    $categoriesManager = new CategoriesManager();
    $categoriesManager->loadAllCategories();
    $categories = $categoriesManager->getAllCategories();
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

<div class="clearfix"></div>
<section class="banner-wrap">
    <div class="banner">
        <div class="tp-banner-container">
            <div class="tp-banner" >

                <ul>
                  <?php
                  //get all Slide Images From DB
                    $sliderManager = new SliderManager();
                    $sliderManager->loadAllImages();
                    $sliderImages = $sliderManager->getAllImages();

                    foreach($sliderImages as $image) {
                      ?>

                      <!-- SLIDE  -->
                      <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                          <!-- MAIN IMAGE -->
                          <img src="admin/images/Slider/<?php echo $image->getSliderImage(); ?>"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                      </li>

                      <?php
                    }
                  ?>

                </ul>
            </div>
        </div>
        <script type="text/javascript">

				var revapi;

				jQuery(document).ready(function() {

					   revapi = jQuery('.tp-banner').revolution(
						{
							delay:8000,
							startwidth:1170,
							startheight:645,
							hideThumbs:10,
							fullWidth:"off",
							fullScreen:"off",
							fullScreenOffsetContainer: "",
							hideTimerBar: "on",
							navigationType:"none",
							stopAtSlide: 1

						});

				});	//ready

			</script>

        <!-- END REVOLUTION SLIDER -->

        <!-- Content End -->

    </div>
</section>

<!--message-wrap ends-->
<section class="content">
    <div class="container">
        <div class="inner-page homepage margin-bottom-none">
            <section class="car-block-wrap padding-bottom-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip margin-bottom-30">
                                <div class="card">
                                    <div class="face front"><img class="img-responsive" src="http://demo.themesuite.com/automotive/images/car1.jpg" alt=""></div>
                                    <div class="face back">
                                        <div class='hover_title'>Race Ready</div>
                                        <a href="inventory.php"><i class="fa fa-link button_icon"></i></a> <a href="images/car1-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                </div>
                            </div>
                            <h4><a href="#">FACTORY READY FOR TRACK DAY</a></h4>
                            <p class="margin-bottom-none">Sea veniam lucilius neglegentur ad, an per sumo volum
                                voluptatibus. Qui cu everti repudiare. Eam ut cibo nobis
                                aperiam, elit qualisque at cum. Possit antiopam id est.
                                Illud delicata ea mel, sed novum mucius id. Nullam qua.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip horizontal margin-bottom-30">
                                <div class="card">
                                    <div class="face front"><img class="img-responsive" src="http://demo.themesuite.com/automotive/images/car2.jpg" alt=""></div>
                                    <div class="face back">
                                        <div class='hover_title'>Family Oriented</div>
                                        <a href="inventory.php"><i class="fa fa-link button_icon"></i></a> <a href="images/car2-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                </div>
                            </div>
                            <h4><a href="#">A SPORT UTILITY FOR THE FAMILY</a></h4>
                            <p class="margin-bottom-none">Cum ut tractatos imperdiet, no tamquam facilisi qui.
                                Eum tibique consectetuer in, an legimus referrentur vis,
                                vocent deseruisse ex mel. Sed te idque graecis. Vel ne
                                libris dolores, in mel graece dolorum.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip margin-bottom-30">
                                <div class="card">
                                    <div class="face front"><img class="img-responsive" src="http://demo.themesuite.com/automotive/images/car3.jpg" alt=""></div>
                                    <div class="face back">
                                        <div class='hover_title'>World Class</div>
                                        <a href="inventory.php"><i class="fa fa-link button_icon"></i></a> <a href="images/car3-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                </div>
                            </div>
                            <h4><a href="#">MAKE AN EXECUTIVE STATEMENT</a></h4>
                            <p class="margin-bottom-none">Te inermis cotidieque cum, sed ea utroque atomorum
                                sadipscing. Qui id oratio everti scaevola, vim ea augue
                                ponderum vituperatoribus, quo adhuc abhorreant
                                omittantur ad. No his fierent perpetua consequat, et nis.</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row parallax_parent margin-top-30">
                <div class="parallax_scroll clearfix" data-velocity="-.5" data-offset="-300" data-no-repeat="true" data-image="http://demo.themesuite.com/automotive/images/parallax2.jpg">
                    <div class="overlay">
                        <div class="container">

                            <div class="row">

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-left-none margin-vertical-60">
                                    <i class="fa fa-car"></i>

                                    <?php
                                      $query = "SELECT cars FROM hp_statistics WHERE id = 0;";
                                      $stmt = $con->prepare($query);
                                      $stmt->execute();
                                      $result = $stmt->fetch();

                                    ?>

                                    <span class="animate_number margin-vertical-15">
                                        <span class="number"><?php echo $result['cars']; ?></span>
                                    </span>

                                    <?php echo "Cars Sold"; ?>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-vertical-60">
                                    <i class="fa fa-money"></i>

                                    <?php
                                      $query = "SELECT amount FROM hp_statistics WHERE id = 0";
                                      $stmt = $con->prepare($query);
                                      $stmt->execute();
                                      $result = $stmt->fetch();

                                    ?>

                                    <span class="animate_number margin-vertical-15">
                                        $<span class="number"><?php echo $result['amount']; ?></span>
                                    </span>

                                    <?php echo "Amount Sold" ?>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-vertical-60">
                                    <i class="fa fa-users"></i>

                                    <?php
                                      $query = "SELECT satisfaction FROM hp_statistics WHERE id = 0;";
                                      $stmt = $con->prepare($query);
                                      $stmt->execute();
                                      $result = $stmt->fetch();

                                    ?>

                                    <span class="animate_number margin-vertical-15">
                                        <span class="number"><?php echo $result['satisfaction']; ?></span>%
                                    </span>

                                    <?php echo "Customer Satisfaction"; ?>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-right-none margin-vertical-60">
                                    <i class="fa fa-tint"></i>

                                    <?php
                                      $query = "SELECT changes FROM hp_statistics WHERE id = 0;";
                                      $stmt = $con->prepare($query);
                                      $stmt->execute();
                                      $result = $stmt->fetch();

                                    ?>

                                    <span class="animate_number margin-vertical-15">
                                        <span class="number"><?php echo $result['changes']; ?></span>
                                    </span>

                                    <?php echo "Oil Changes"; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php

              $query = "SELECT * FROM paragraphs WHERE id = 1;";
              $stmt = $con->prepare($query);
              $stmt->execute();
              $website_info = $stmt->fetch();

            ?>
            <section class="welcome-wrap padding-top-30 sm-horizontal-15">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
                        <h4 class="margin-bottom-25 margin-top-none"><strong>WELCOME</strong> TO YOUR NEW WEBSITE</h4>
                        <p><?php echo $website_info['text']; ?></p>
                    </div>
                    <!--welcome ends-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-right-none sm-padding-left-none md-padding-left-15 xs-padding-left-none padding-bottom-40 scroll_effect fadeInUp" data-wow-delay='.2s' style="z-index:100">
                        <h4 class="margin-bottom-25 margin-top-none"><strong>SEARCH</strong> OUR INVENTORY</h4>
                        <div class="search-form margin-top-20 padding-vertical-20">
                            <form id="advancedSearchForm" method="GET" action="inventory.php">
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="select-dropdown">
                                            <div class="my-dropdown min-year-dropdown min-dropdown">
                                                <select id="minYear" name="min-year" class="css-dropdowns" tabindex="1" >
                                                    <option value="1980">Min Year</option>
                                                    <?php
                                                        for($i = 2019; $i >= 1980; $i--){
                                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <span class="my-dropdown">to</span>
                                            <div class="my-dropdown max-year-dropdown min-dropdown">
                                                <select id="maxYear" name="max-year" class="css-dropdowns" tabindex="1" >
                                                    <option value="2019">Max Year</option>
                                                    <?php
                                                        for($i = 2019; $i >= 1980; $i--){
                                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select-dropdown">
                                            <div class="my-dropdown min-price-dropdown min-dropdown">
                                                <input name="min-price" class="full-width" type="search" value="" placeholder="Min Price">
                                            </div>
                                            <span class="my-dropdown">to</span>
                                            <div class="my-dropdown max-price-dropdown min-dropdown">
                                                <input name="max-price" class="full-width" type="search" value="" placeholder="Max Price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown make-dropdown">
                                            <select name="categories" class="css-dropdowns" tabindex="1" >
                                                <option value="%%">Categories</option>
                                                <?php
                                                    foreach($categories as $category){
                                                        echo '<option value="'.$category->getCategoryId().'">'.$category->getCategoryName().'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="min-mileage select-dropdown">
                                            <div class="my-dropdown min-price-dropdown min-dropdown">
                                                <input name="min-milage" class="full-width" type="search" value="" placeholder="Min Mileage">
                                            </div>
                                            <span class="my-dropdown">to</span>
                                            <div class="my-dropdown max-price-dropdown min-dropdown">
                                              <input name="max-milage" class="full-width" type="search" value="" placeholder="Max Mileage">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown">
                                            <select name="color" class="css-dropdowns" tabindex="1" >
                                                <option value="%%">Color</option>
                                                <option value="Red">Red</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Yallow">Yallow</option>
                                                <option value="Black">Black</option>
                                                <option value="Green">Green</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown">
                                            <select name="transmission" class="css-dropdowns" tabindex="1" >
                                                <option value="%%">Transmission</option>
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown">
                                            <input class="full-width" name="name" type="search" value="" placeholder="Refine with keywords">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown">
                                            <select name="sort" class="css-dropdowns" tabindex="1" >
                                                <option value='car_id DESC'>Descending</option>
                                                <option value='car_id ASC'>Ascending</option>
                                                <option value='price DESC'>Price Descending</option>
                                                <option value='price ASC'>Price Ascending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-element" style="margin:0;">

                                        </div>
                                        <div class="">
                                            <input type="submit" value="Find My New Vehicle" class="find_new_vehicle pull-right md-button">
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="select-wrapper clearfix">

                                </div>
                            </form>
                        </div>
                    </div>
                    <!--invetory ends-->
                </div>

                <div class="recent-vehicles-wrap margin-top-30 sm-padding-left-none padding-bottom-40">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles padding-left-none">
                            <h5 class="margin-top-none">Recent Vehicles</h5>
                            <p>
                                <?php 
                                    $query = "SELECT * FROM paragraphs WHERE id = 2;";
                                    $stmt = $con->prepare($query);
                                    $stmt->execute();
                                    $recent  = $stmt->fetch();                                
                                    echo $recent['text'];
                                ?>
                            </p>
                            <div class="arrow3 clearfix margin-top-15 xs-margin-bottom-25" id="slideControls3"><span class="prev-btn"></span><span class="next-btn"></span></div>
                        </div>
                        <div class="col-md-10 col-sm-8 padding-right-none xs-padding-left-none">
                            <div class="carasouel-slider3">
                              <?php
                                $query = "SELECT * FROM car ORDER BY car_id DESC LIMIT 5";
                                $stmt = $con->prepare($query);
                                $stmt->execute();
                                $latest_cars = $stmt->fetchAll();

                                foreach($latest_cars as $car) {

                                  $theCar = new car($car['car_id']);
                                  $images = $theCar->getImages();

                                  ?>

                                  <div class="slide">
                                      <div class="car-block">
                                          <div class="img-flex"> <a href="car.php?id=<?php echo $car['car_id']; ?>"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="admin/images/car-images/<?php echo $images[0]; ?>" alt="alt" class="img-responsive"> </div>
                                          <div class="car-block-bottom">
                                              <h6><strong><?php echo $car['car_name']; ?></strong></h6>
                                              <h6><?php echo $car['condition']; ?>, <?php echo $car['milage']; ?> miles</h6>
                                              <h5>$ <?php echo $car['price']; ?></h5>
                                          </div>
                                      </div>
                                  </div>

                                <?php
                                }
                              ?>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="car-rate-block clearfix margin-top-30 padding-bottom-40">
                    <div class="col-md-4 col-sm-12 col-xs-12 xs-margin-bottom-40 sm-margin-bottom-none scroll_effect bounceInRight" data-wow-delay=".2s">
                        <div class="small-block clearfix">
                            <h4 class="margin-bottom-25 margin-top-none">About Us.</h4>
                            <a href="#"><span class="align-center"><i class="fa fa-users fa-7x"></i></span></a>
                            <p style="text-align:center">
                                <?php
                                    $query = "SELECT * FROM paragraphs WHERE id = 3;";
                                    $stmt = $con->prepare($query);
                                    $stmt->execute();
                                    $about_us = $stmt->fetch();     
                                    echo $about_us['text'];
                                ?>
                            </p>
                            
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-left-none padding-right-none hours_operation">
                        <div class="small-block clearfix">
                            <h4 class="margin-bottom-25 margin-top-none">What are our Hours of Operation?</h4>
                            <div class="row">
                                <div class="col-xs-offset-2 col-xs-8 xs-margin-bottom-40 sm-margin-bottom-none scroll_effect bounceInUp" data-wow-delay=".4s">
                                    <table class="table table-bordered text-centered no-border font-13px margin-bottom-none" style="text-align: center;">
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

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 xs-margin-bottom-40 sm-margin-bottom-none padding-right-none scroll_effect bounceInRight">
                        <div class="small-block clearfix">
                            <h4 class="margin-bottom-25 margin-top-none">Find Us.</h4>
                            <a href="contact.php"><span class="align-center"><i class="fa fa-map-marker fa-7x"></i></span></a> </div>
                    </div>
                </div>
            </section>
            <!--welcome-wrap ends-->

        </div>
    </div>
</section>

<!--Footer Start-->
<?php
include("Footer.php");
?>


<!-- Bootstrap core JavaScript -->
<script src="js/retina.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script src="js/modernizr.custom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/jquery.bxslider.js" type="text/javascript"></script>
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
        $('#minYear').change(function (){
            var year = $(this).children("option:selected").val();
            $('.max-year-dropdown').html('<select name="max-year" class="maxYear css-dropdowns" tabindex="1"></select>');
            for(var i = 2019; i >= year; i--){
                $('.maxYear').append('<option value="'+i+'">'+i+'</option>');
            }
            $('.maxYear').selectbox();
        });
    });
</script>
</body>
</html>
