

<header  data-spy="affix" data-offset-top="1" class="clearfix">
    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    <ul class="left-none">
                        <li><i class="fa fa-search"></i>
                            <input type="search" placeholder="Search" class="search_box">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:18005670123"><i class="fa fa-phone"></i> 1-800-567-0123</a></li>
                        <li class="address"><a href="contact.html"><i class="fa fa-map-marker"></i> 107 Sunset Blvd., Beverly Hills, CA  90210</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>
    <div class="bottom-header" >
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="index.html"><span class="logo"><span class="primary_text">My Car</span> <span class="secondary_text">Station</span></span></a> </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active' ?>"><a href="index.php">Home</a></li>
                            <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'inventory.php' || basename($_SERVER['PHP_SELF']) == 'car.php') echo 'active' ?>"><a href="inventory.php">Inventory</a></li>
                            <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'active' ?>"><a href="blog.php">News</a></li>
                            <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'our-team.php') echo 'active' ?>"><a href="our-team.php">About Us</a></li>                            
                            <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active' ?>"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse --> 
                </div>
                <!-- /.container-fluid --> 
            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>
