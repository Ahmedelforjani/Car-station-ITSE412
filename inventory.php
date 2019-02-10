<?php
    include 'admin/Classes/Car.php';
    include 'admin/Classes/Category.php';

    $categoriesManager = new CategoriesManager();
    $categoriesManager->loadAllCategories();
    $categories = $categoriesManager->getAllCategories();

    $carsManager = new CarsManager();

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        global $con;

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
        $sort = isset($_GET['sort']) && !empty($_GET['sort']) ? $_GET['sort'] : 'car_id DESC';

        $query = "SELECT car_id FROM car
        WHERE color LIKE '".$color.
        "' AND category_id LIKE '".$category.
        "' AND transmission LIKE '".$transmission.
        "' AND model BETWEEN ".$minYear." AND ".$maxYear.
        " AND price BETWEEN ".$minPrice." AND ".$maxPrice.
        " AND milage BETWEEN ".$minMilage." AND ".$maxMilage.
        " AND car_name LIKE '".$carName."' ORDER BY ".$sort;

        $count = $carsManager->getCount($query);
        $much = 8;
        $pageCount = (int)ceil($count / $much);
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $start = ($page - 1) * $much;
        $next = ($page == $pageCount) ? $pageCount : $page + 1;
        $prev = ($page == 1) ? 1 : $page - 1;
        $link = str_replace('&page='.$page,'',$_SERVER['REQUEST_URI']);
        $sml = isset($_GET['color']) ? $link.'&page=' : '?page=';

        $query = "SELECT car_id FROM car
                    WHERE color LIKE '".$color.
                    "' AND category_id LIKE '".$category.
                    "' AND transmission LIKE '".$transmission.
                    "' AND model BETWEEN ".$minYear." AND ".$maxYear.
                    " AND price BETWEEN ".$minPrice." AND ".$maxPrice.
                    " AND milage BETWEEN ".$minMilage." AND ".$maxMilage.
                    " AND car_name LIKE '".$carName."' ORDER BY ".$sort. " LIMIT ".$much." OFFSET ".$start;
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
        $carsManager->loadAllCars();
        $cars = $carsManager->getAllCars();
        $count =  count($cars);
        $much = 8;
        $pageCount = (int)ceil($count / $much);
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $start = ($page - 1) * $much;
        $next = ($page == $pageCount) ? $pageCount : $page + 1;
        $prev = ($page == 1) ? 1 : $page - 1;
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
<link href="css/sweetalert.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>

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
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 padding-none"> <span class="ribbon"><strong><?php echo $count ?> Vehicles Matching:</strong></span> <span class="ribbon-item">All Listings</span> </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <form id="advancedSearchForm" method="GET" action="inventory.php">
                <div class="select-wrapper listing_select clearfix margin-top-none margin-bottom-15">
                    <div class="row">
                    <div class="col-md-3">
                        <div class="select-dropdown">
                            <div class="my-dropdown min-price-dropdown min-dropdown">
                                <input id="minPrice" name="min-price" class="full-width" type="number" value="<?php if(isset($_GET['min-price']) && !empty($_GET['min-price'])) echo $_GET['min-price'];?>" placeholder="Min Price">
                            </div>
                            <span class="my-dropdown">to</span>
                            <div class="my-dropdown max-price-dropdown min-dropdown">
                                <input id="maxPrice" name="max-price" class="full-width" type="number" value="<?php if(isset($_GET['max-price']) && !empty($_GET['max-price'])) echo $_GET['max-price'];?>" placeholder="Max Price">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="my-dropdown make-dropdown">
                            <select name="categories" class="css-dropdowns" tabindex="1" >
                                <option value="%%">Categories</option>
                                <?php
                                    foreach($categories as $category){
                                        $select = null;
                                        if(isset($_GET['categories']) && !empty($_GET['categories']) && $_GET['categories'] == $category->getCategoryId()) $select = "selected";
                                        echo '<option value="'.$category->getCategoryId().'" '.$select.'>'.$category->getCategoryName().'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="my-dropdown">
                            <select name="transmission" class="css-dropdowns" tabindex="1" >
                                <option value="%%">Transmission</option>
                                <option value="Automatic" <?php if(isset($_GET['transmission']) && !empty($_GET['transmission']) && $_GET['transmission'] == "Automatic") echo "selected"?>>Automatic</option>
                                <option value="Manual" <?php if(isset($_GET['transmission']) && !empty($_GET['transmission']) && $_GET['transmission'] == "Manual") echo "selected"?>>Manual</option>
                            </select>
                        </div>
                    </div>
                    <div class="select-dropdown col-md-3">
                        <div class="my-dropdown min-year-dropdown min-dropdown">
                            <select id="minYear" name="min-year" class="css-dropdowns" tabindex="1" >
                                <option value="1980">Min Year</option>
                                <?php
                                    for($i = 2019; $i >= 1980; $i--){
                                        $select = null;
                                        if(isset($_GET['min-year']) && !empty($_GET['min-year']) && $_GET['min-year'] == $i) $select = "selected";
                                        echo '<option value="'.$i.'" '.$select.'>'.$i.'</option>';
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
                                        $select = null;
                                        if(isset($_GET['max-year']) && !empty($_GET['max-year']) && $_GET['max-year'] == $i) $select = "selected";
                                        echo '<option value="'.$i.'" '.$select.'>'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="min-mileage select-dropdown">
                            <div class="my-dropdown min-price-dropdown min-dropdown">
                                <input id="minMilage" name="min-milage" class="full-width" type="number" value="<?php if(isset($_GET['min-milage']) && !empty($_GET['min-milage'])) echo $_GET['min-milage'];?>" placeholder="Min Mileage">
                            </div>
                            <span class="my-dropdown">to</span>
                            <div class="my-dropdown max-price-dropdown min-dropdown">
                                <input id="maxMilage" name="max-milage" class="full-width" type="number" value="<?php if(isset($_GET['max-milage']) && !empty($_GET['max-milage'])) echo $_GET['max-milage'];?>" placeholder="Max Mileage">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="my-dropdown">
                            <select name="color" class="css-dropdowns" tabindex="1" >
                                <option value="%%">Color</option>
                                <option value="Red" <?php if(isset($_GET['color']) && !empty($_GET['color']) && $_GET['color'] == "Red") echo "selected"?>>Red</option>
                                <option value="Blue" <?php if(isset($_GET['color']) && !empty($_GET['color']) && $_GET['color'] == "Blue") echo "selected"?>>Blue</option>
                                <option value="Yallow" <?php if(isset($_GET['color']) && !empty($_GET['color']) && $_GET['color'] == "Yallow") echo "selected"?>>Yallow</option>
                                <option value="Black" <?php if(isset($_GET['color']) && !empty($_GET['color']) && $_GET['color'] == "Black") echo "selected"?>>Black</option>
                                <option value="Green" <?php if(isset($_GET['color']) && !empty($_GET['color']) && $_GET['color'] == "Green") echo "selected"?>>Green</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="my-dropdown">
                            <select name="sort" class="css-dropdowns" tabindex="1" >
                                <option value='car_id DESC' <?php if(isset($_GET['sort']) && !empty($_GET['sort']) && $_GET['sort'] == "car_id DESC") echo "selected"?>>Descending</option>
                                <option value='car_id ASC' <?php if(isset($_GET['sort']) && !empty($_GET['sort']) && $_GET['sort'] == "car_id ASC") echo "selected"?>>Ascending</option>
                                <option value='price DESC' <?php if(isset($_GET['sort']) && !empty($_GET['sort']) && $_GET['sort'] == "price DESC") echo "selected"?>>Price Descending</option>
                                <option value='price ASC' <?php if(isset($_GET['sort']) && !empty($_GET['sort']) && $_GET['sort'] == "price ASC") echo "selected"?>>Price Ascending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input style="width: 250px" type="submit" value="Search For Vehicle" class="find_new_vehicle md-button">   
                    </div>
                </div>
                </div>
                <div class="select-wrapper pagination clearfix margin-top-none margin-bottom-15">
                <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sort-by-menu"> 
                            
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-offset-1">
                            <div class="controls full"> <a href="<?php if($count == 0) echo "#"; else echo $sml.$prev; ?>" class="left-arrow"><i class="fa fa-angle-left"></i></a> <span>Page <?php echo $page ?> of <?php if($count == 0 ) echo "1"; else echo $pageCount; ?></span> <a href="<?php if($count == 0) echo "#"; else echo $sml.$next; ?>" class="right-arrow"><i class="fa fa-angle-right"></i></a> </div>
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
                            <img src="<?php echo 'admin/images/car-images/'.$car->getImages()[0]; ?>" class="preview" alt="preview">
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
                            <div class="price"><b>Price:</b><br>
                                <div class="figure">$<?php echo $car->getPrice(); ?><br>
                                </div>
                            </div>
                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                            <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <div class="clearfix"></div>
            </div>
            <div class="inventory_pagination">
                <ul class="pagination margin-bottom-none margin-top-25 bottom_pagination">
                <?php
                    if (isset($_GET['page']) && $_GET['page'] > 1){
                        echo '<li><a href="'.$sml.$prev.'"><i class="fa fa-angle-left"></i></a></li>';
                    }
                ?>
                <?php 
                    for ($i = 1; $i <= $pageCount; $i++){
                        echo '<li><a href="'.$sml.$i.'">'.$i.'</a></li>';
                    }
                ?>
                <?php
                    if (isset($_GET['page']) && $_GET['page'] < $pageCount || !isset($_GET['page']) ){
                        if (isset($_GET['page']))
                            echo '<li><a href="'.$sml.$next.'"><i class="fa fa-angle-right"></i></a></li>'; 
                    }
                ?>
                </ul>
                
                
               
            </div>
        </div>
    </div>
    <!--container ends-->
</section>

<!--content ends-->

<!--Footer Start-->
<?php
include("footer.php");
?>


<!-- Bootstrap core JavaScript --> 
<script src="js/retina.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script src="js/modernizr.custom.js"></script> <script defer src="js/jquery.flexslider.js"></script>
<script src="js/jquery.bxslider.js" type="text/javascript"></script>
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script type="text/javascript" src="js/ui-sweetalert.min.js"></script>
<script type="text/javascript" src="js/search.js"></script>
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
