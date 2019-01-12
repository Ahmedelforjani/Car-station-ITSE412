<?php 
    include 'admin/Classes/Car.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        $cars = array();

        $color = isset($_GET['color']) ? $_GET['color'] : '%%';
        $category = isset($_GET['category']) ? $_GET['category'] : '%%';
        $transmission = isset($_GET['transmission']) ? $_GET['transmission'] : '%%';
        $minYear = isset($_GET['min-year']) ? $_GET['min-year'] : 0;
        $maxYear = isset($_GET['max-year']) ? $_GET['max-year'] : 9999;
        $minPrice = isset($_GET['min-price']) && !empty($_GET['min-price']) ? $_GET['min-price'] : 0;
        $maxPrice = isset($_GET['max-price']) && !empty($_GET['max-price']) ? $_GET['max-price'] : 999000;
        $minMilage = isset($_GET['min-milage']) && !empty($_GET['min-milage']) ? $_GET['min-milage'] : 0;
        $maxMilage = isset($_GET['max-milage']) && !empty($_GET['max-milage']) ? $_GET['max-milage'] : 999000;
        $carName = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '%%';

        global $con;
        //`car_id`, `car_name`, `model`, `color`, `milage`, `engine`, `doors`, `category_id`, `condition`, 
        // `passengers`, `price`, `transmission`, `overview`, `options`, `is_visible`
        $query = "SELECT car_id FROM car 
                    WHERE color LIKE '".$color.
                    "' AND category_id LIKE '".$category.
                    "' AND transmission LIKE '".$transmission.
                    "' AND model BETWEEN ".$minYear." AND ".$maxYear.
                    " AND price BETWEEN ".$minPrice." AND ".$maxPrice.
                    " AND milage BETWEEN ".$minMilage." AND ".$maxMilage.
                    " AND car_name LIKE '".$carName."'";
        $stmt = $con->prepare($query);
  
        $stmt->execute();
  
        if( $stmt->rowCount() > 0 ) {
          $result = $stmt->fetchAll();
          $cars = array();
  
          foreach ($result as $row) {
            $cars[] = new Car($row['car_id']);
          }
        }

    } else {
        $carsManager = new CarsManager();
        $carsManager->loadAllCars();
        $cars = $carsManager->getAllCars();
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
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/ts.css" type="text/css" rel="stylesheet">
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
<section id="secondary-banner" class="dynamic-image-1"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Inventory</h2>
                <h4>Unlimited Listings, Any Vehicle Type</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Inventory</li>
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
        <div class="inner-page row">
            <div class="listing-view margin-bottom-20">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 padding-none"> <span class="ribbon"><strong><?php echo sizeof($cars); ?> Vehicles Matching:</strong></span> <span class="ribbon-item">All Listings</span> </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <form method="post" action="#" class="listing_sort">
                <div class="select-wrapper pagination clearfix margin-top-none margin-bottom-15">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sort-by-menu"> 

                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-offset-1">
                            <div class="controls full"> <a href="#" class="left-arrow"><i class="fa fa-angle-left"></i></a> <span>Page 1 of 4</span> <a href="#" class="right-arrow"><i class="fa fa-angle-right"></i></a> </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div class="inventory_box car_listings boxed boxed_full">
                <?php foreach($cars as $car) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                            <a class="inventory" href="<?php echo 'car.php?id='.$car->getId() ?>">
                            <div class="title"><?php echo $car->getModel() . ' ' . $car->getName() ?></div>
                            <img src="http://demo.themesuite.com/automotive/images/car-1-200x150.jpg" class="preview" alt="preview">
                            <table class="options-primary">
                                <tr>
                                    <td class="option primary">COLOR:</td>
                                    <td class="spec"><?php echo $car->getColor(); ?></td>
                                </tr>
                                <tr>
                                    <td class="option primary">Engine:</td>
                                    <td class="spec"><?php echo $car->getEngine(); ?></td>
                                </tr>
                                <tr>
                                    <td class="option primary">Transmission:</td>
                                    <td class="spec"><?php echo $car->getTransmission(); ?></td>
                                </tr>
                                <tr>
                                    <td class="option primary">Mileage:</td>
                                    <td class="spec"><?php echo $car->getMilage(); ?></td>
                                </tr>
                                <tr>
                                    <td class="option primary">CONDITIONS:</td>
                                    <td class="spec"><?php echo $car->getCondition(); ?></td>
                                </tr>
                            </table>
                            <!-- <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" /> -->
                            <div class="price"><b>Price:</b><br>
                                <div class="figure">$<?php echo $car->getPrice(); ?><br>
                                </div>
                                <div class="tax">Plus Sales Tax</div>
                            </div>
                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                            <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                        <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_9" />
                        <label for="vehicle_9"></label>
                        <a class="inventory" href="inventory-listing.php">
                        <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                        <img src="http://demo.themesuite.com/automotive/images/car-9-200x150.jpg" class="preview" alt="preview">
                        <table class="options-primary">
                            <tr>
                                <td class="option primary">Body Style:</td>
                                <td class="spec">Convertible</td>
                            </tr>
                            <tr>
                                <td class="option primary">Drivetrain:</td>
                                <td class="spec">AWD</td>
                            </tr>
                            <tr>
                                <td class="option primary">Engine:</td>
                                <td class="spec">3.6L V6</td>
                            </tr>
                            <tr>
                                <td class="option primary">Transmission:</td>
                                <td class="spec">6-Speed Manual</td>
                            </tr>
                            <tr>
                                <td class="option primary">Mileage:</td>
                                <td class="spec">114,239</td>
                            </tr>
                        </table>
                        <table class="options-secondary">
                            <tr>
                                <td class="option secondary">Exterior Color:</td>
                                <td class="spec">Racing Yellow</td>
                            </tr>
                            <tr>
                                <td class="option secondary">Interior Color:</td>
                                <td class="spec">Midnight Black</td>
                            </tr>
                            <tr>
                                <td class="option secondary">MPG:</td>
                                <td class="spec">19 city / 27 hwy</td>
                            </tr>
                            <tr>
                                <td class="option secondary">Stock Number:</td>
                                <td class="spec">590388</td>
                            </tr>
                            <tr>
                                <td class="option secondary">VIN Number:</td>
                                <td class="spec">WP0CB2A92CS376450</td>
                            </tr>
                        </table>
                        <img src="http://demo.themesuite.com/automotive/images/carfax.png" alt="carfax" class="carfax" />
                        <div class="price"><b>Price:</b><br>
                            <div class="figure">$39,995<br>
                            </div>
                            <div class="tax">Plus Sales Tax</div>
                        </div>
                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                        <div class="clearfix"></div>
                        </a>
                    </div>
                </div> -->
                <div class="clearfix"></div>
            </div>
            <div class="inventory_pagination">
                <ul class="pagination margin-bottom-none margin-top-25 bottom_pagination">
                    <li class="disabled"><a href="#" class="disabled"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--container ends--> 
</section>
<div id="youtube_video">
    <iframe width="560" height="315" src="#" allowfullscreen style="width: 560px; height: 315px; border: 0;"></iframe>
</div>

<!--content ends-->
<div class="clearfix"></div>

<!--Footer Start-->
<?php 
include("footer.php");
?>


<!-- Bootstrap core JavaScript --> <script src="js/retina.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script src="js/modernizr.custom.js"></script> <script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.bxslider.js" type="text/javascript"></script> 
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>
</body>
</html>