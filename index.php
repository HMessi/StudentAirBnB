<?php
include 'include/index.php';
?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Airbnb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mycustome.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <div class="page_loader"></div>



    <!-- Top header start -->
    <header class="top-header <?php echo ($css); ?> hidden-xs" id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="list-inline">
                        <a href="FAQ.html" class="sign-in"><i class="fa fa-info"></i>FAQ</a>
                        <a href="About.html" class="sign-in"><i class="fa fa-newspaper-o"></i>About Us</a>
                        <a href="contact.html" class="sign-in"><i class="fa fa-phone"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <?php echo ($usernav); ?>
                </div>
            </div>
        </div>
    </header>
    <!-- Top header end -->

    <!-- Main header start -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="logo">
                        <img src="img/logos/logo.png" alt="logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="#">Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="properties.html">Properties</a>
                        </li>

                        <li class="dropdown">
                            <a href="agents.php">Our Agents</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right rightside-navbar">
                        <?php echo ($bhost); ?>
                    </ul>
                </div>

                <!-- /.navbar-collapse -->
                <!-- /.container -->
            </nav>
        </div>
    </header>
    <!-- Main header end -->

    <!-- Banner start -->
    <div class="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/banner/banner-slider-1.jpg" alt="banner-slider-1">
                    <div class="carousel-caption banner-slider-inner banner-top-align text-left">
                        <h1 class="hidden-lg hidden-md">Find the<br> perfect home</h1>
                        <a href="#" class="btn button-md button-theme hidden-lg hidden-md">Learn More</a>
                        <div class="banner-search-box hidden-xs hidden-sm">
                            <!-- Search area start -->
                            <div class="search-area">
                                <div class="search-area-inner">
                                    <div class="search-contents ">
                                        <form method="GET">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
                                                        <option>Area From</option>
                                                        <option>1000</option>
                                                        <option>800</option>
                                                        <option>600</option>
                                                        <option>400</option>
                                                        <option>200</option>
                                                        <option>100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                                        <option>Room Status</option>
                                                        <option>Single Room</option>
                                                        <option>Double Room</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                                        <option>Kuala Lumpur</option>
                                                        <option>Penang</option>
                                                        <option>Pahan</option>
                                                        <option>Kuala Perlis</option>
                                                        <option>Johor</option>
                                                        <option>Trringanu</option>
                                                        <option>Kuantan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
                                                        <option>Accomodation Types</option>
                                                        <option>Apartment</option>
                                                        <option>storey House</option>
                                                        <option>Villa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                                        <option>Bedrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                                        <option>Bathrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="range-slider">
                                                        <div data-min="0" data-max="150000" data-unit="MYR" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                                <div class="form-group">
                                                    <button class="search-button">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Search area End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
        </div>
    </div>
    <!-- Banner end -->

    <!-- Search area start -->
    <div class="search-area hidden-lg hidden-md">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents ">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Area From</option>
                                        <option>1000</option>
                                        <option>800</option>
                                        <option>600</option>
                                        <option>400</option>
                                        <option>200</option>
                                        <option>100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Room Status</option>
                                        <option>Single Room</option>
                                        <option>Double Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Kuala Lumpur</option>
                                        <option>Penang</option>
                                        <option>Pahan</option>
                                        <option>Kuala Perlis</option>
                                        <option>Johor</option>
                                        <option>Trringanu</option>
                                        <option>Kuantan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Property Types</option>
                                        <option>Apartment</option>
                                        <option>storey House</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="150000" data-unit="MYR" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search area start -->

    <!-- Featured properties start -->
    <div class="content-area featured-properties">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Featured</span> Properties</h1>
            </div>
            <ul class="list-inline-listing filters filters-listing-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">Riana Green</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">Pelangi Utama</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">Casa Tropicana</li>
                <li data-filter="4" class="btn btn-inline filtr-button filtr">Damansara Empire</li>
            </ul>
            <div class="row">
                <div class="filtr-container">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">For Rent</div>
                                <div class="property-price">RM1,800</div>
                                <img src="img/properties/properties-1.jpg" alt="properties-1" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-object-group"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-tv"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-s15"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-moon-o"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                    <span class="right">
                                        <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">For Rent</div>
                                <div class="property-price">RM1,500</div>
                                <img src="img/properties/properties-3.jpg" alt="properties-3" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-object-group"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-tv"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-s15"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-moon-o"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                    <span class="right">
                                        <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2, 3">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">For Rent</div>
                                <div class="property-price">RM2,000</div>
                                <img src="img/properties/properties-4.jpg" alt="properties-4" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-object-group"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-tv"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-s15"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-moon-o"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                    <span class="right">
                                        <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="3, 4">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">For Rent</div>
                                <div class="property-price">RM1,700</div>
                                <img src="img/properties/properties-8.jpg" alt="properties-8" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Big Head House</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-object-group"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-tv"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-s15"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-moon-o"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                    <span class="right">
                                        <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="4">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">For Rent</div>
                                <div class="property-price">RM1,500</div>
                                <img src="img/properties/properties-7.jpg" alt="properties-7" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Park Avenue</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-object-group"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-tv"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-s15"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-moon-o"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                    <span class="right">
                                        <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">For Rent</div>
                                <div class="property-price">RM1,650</div>
                                <img src="img/properties/properties-5.jpg" alt="properties-5" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Masons Villas</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-object-group"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-tv"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-s15"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-moon-o"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                    <span class="right">
                                        <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured properties end -->

    <!-- What are you looking for? start -->
    <div class="mrg-btm-100 our-service">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>How it</span> works?</h1>
            </div>

            <div class="row wow">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="fa fa-search"></i>
                        <h4>SEARCH</h4>
                        <p>Type and search around campuses, metro stations or cities. Check out your hosts profile to view photos of them, their listings and prices too! Select from the ones you like.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="fa fa-calendar"></i>
                        <h4>Book</h4>
                        <p>Book as many stays as you like. Hosts typically respond within 48 hours. If you don’t hear back from your host, we will send you alternative options similar to those which you inquired.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInRight delay-04s">
                    <div class="content">
                        <i class="fa fa-key"></i>
                        <h4>Move in</h4>
                        <p>Once your host approves your booking, simply pay your reservation fee and move into your new home.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What are you looking for? end -->



    <!-- Categories strat -->
    <div class="categories">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Trending cities</span>  to explore</h1>
            </div>
            <div class="clearfix"></div>
            <div class="row wow">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-1-bg">
                                    <div class="category-overlay">
                                        <span class="category-content">
                                            <span class="category-title">Kuala Lumpur</span>
                                            <br>
                                            <span class="category-subtitle">14 Properties</span>
                                            <br>
                                            <a href="#" class="btn button-sm button-theme">View All</a>
                                        </span><!-- /.category-content -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-2-bg">
                                    <div class="category-overlay">
                                        <span class="category-content">
                                            <span class="category-title">Malacca</span>
                                            <br>
                                            <span class="category-subtitle">14 Properties</span>
                                            <br>
                                            <a href="#" class="btn button-sm button-theme ">View All</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-pad wow fadeInUp delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-3-bg">
                                    <div class="category-overlay">
                                        <span class="category-content">
                                            <span class="category-title">Penang</span>
                                            <br>
                                            <span class="category-subtitle">27 Properties</span>
                                            <br>
                                            <a href="#" class="btn button-sm button-theme ">View All</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
                    <div class="category">
                        <div class="category_bg_box category_long_bg cat-4-bg">
                            <div class="category-overlay">
                                <span class="category-content">
                                    <span class="category-title">Port Dikson</span>
                                    <br>
                                    <span class="category-subtitle">14 Properties</span>
                                    <br>
                                    <a href="#" class="btn button-sm button-theme ">View All</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories end-->

    <!-- Testimonial secion start -->
    <!-- Testimonial secion start -->
    <div class="testimonial-section">
        <div class="container">
            <div class="main-title">
                <h1><span>What they</span> said?</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials text-center">
                        <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item content active clearfix">
                                    <div class="item-inner">
                                        <div class="main-title mrg-btm-30">

                                        </div>
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            As an Associate Director of Sponsored Programs, I never had to worry about housing for our students because of our relationship with StudentsAirbnb!
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="testimonials-avatar">
                                            <img src="img/testimonial/avatar-2.jpg" alt="avatar-2">
                                        </div>
                                        <div class="author-name">
                                            Carmen Williamson
                                        </div>
                                    </div>
                                </div>
                                <div class="item content clearfix">
                                    <div class="item-inner">
                                        <div class="main-title mrg-btm-30">

                                        </div>
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            I came from Saudi Arabia for an internship at Kuala Lumpur , it was very easy for me to find a furnished home on the platform.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="testimonials-avatar">
                                            <img src="img/testimonial/avatar-3.jpg" alt="avatar-3">
                                        </div>
                                        <div class="author-name">
                                            Hussein Messi
                                        </div>
                                    </div>
                                </div>
                                <div class="item content clearfix">
                                    <div class="item-inner">
                                        <div class="main-title mrg-btm-30">

                                        </div>
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            My home was ready before I arrived. It was very close to all the touristic attractions and the price was good.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="testimonials-avatar">
                                            <img src="img/testimonial/avatar-4.jpg" alt="avatar-4">
                                        </div>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                                <span class="slider-mover-left" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                                <span class="slider-mover-right" aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial secion end -->
    <div class="clearfix"></div>


    <!-- Footer start -->
    <footer class="main-footer clearfix">
        <div class="container">
            <!-- Footer top -->
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                        <div class="logo-2">
                            <a href="index.html">
                                <img src="img/logos/footer-logo.png" alt="footer-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-4 col-sm-5 col-xs-12">
                        <form action="#" method="GET">
                            <input type="text" class="form-contact" name="email" placeholder="Enter your email">
                            <button type="submit" name="submitNewsletter" class="btn btn-default button-small">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <ul class="social-list clearfix">
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer info-->
            <div class="footer-info">
                <div class="row">
                    <!-- About us -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-item">

                        </div>
                    </div>
                    <!-- Links -->
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <div class="footer-item">
                            <ul class="links">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">Press</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tags -->
                    <div class="col-lg-4 col-md-3 col-sm-5 col-xs-12">
                        <div class="footer-item">
                            <ul class="links">
                                <li>
                                    <a href="about.html">Careers</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">Help</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Copy right start -->
    <div class="copy-right">
        <div class="container">
            <p>2017 <a href="#">StudentsAirbnb</a>. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Copy end right-->

    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-submenu.js"></script>
    <script type="text/javascript" src="js/rangeslider.js"></script>
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/leaflet.js"></script>
    <script type="text/javascript" src="js/leaflet-providers.js"></script>
    <script type="text/javascript" src="js/leaflet.markercluster.js"></script>
    <script type="text/javascript" src="js/dropzone.js"></script>
    <script type="text/javascript" src="js/jquery.filterizr.js"></script>
    <script type="text/javascript" src="js/maps.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>