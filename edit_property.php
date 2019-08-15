<?php
require 'include/editmypro.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

    <title>Student Airbnb - My Profile</title>
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
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/msg.css">
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
    <header class="top-header hidden-xs" id="top">
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
                    <ul class="list-inline pull-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle"><i class="fa fa-bell"></i>Notification</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" onclick="div_show()"><i class="fa fa-envelope"></i>Messages</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> My Account <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-custome">
                                <li><a href="user-profile.php"><i class="fa fa-edit"></i>Edit Profile</a></li>
                                <li><a href="#"><i class="fa fa-signing"></i>My Current Rent</a></li>
                                <li><a href="#"><i class="fa fa-credit-card"></i>Payment</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
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
                    <a href="index.php" class="logo">
                        <img src="img/logos/logo.png" alt="logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="index.php">Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="properties.html">Properties</a>
                        </li>

                        <li class="dropdown">
                            <a href="agents.html">Our Agents</a>
                        </li>
                    </ul>
                </div>

                <!-- /.navbar-collapse -->
                <!-- /.container -->
            </nav>
        </div>
    </header>
    <!-- Main header end -->

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Add New Property</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="user-profile.php">My Profile</a></li>
                        <li class="active">New Property</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Submit Property start -->
    <div class="content-area submit-property">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="submit-address">
                        <form method="POST">
                            <div class="main-title-2">
                                <h1><span>Basic</span> Information</h1>
                            </div>

                            <div class="search-contents-sidebar">
                                <div class="form-group">
                                    <label>Property Title</label>
                                    <input type="text" name="propertytitle" class="input-text" name="your name" value="<?php echo ($PT); ?>" placeholder="Property Title">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="selectpicker search-fields" name="for-sale">
                                                <option>For Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="selectpicker search-fields" name="type">
                                                <option value="<?php echo ($PTY); ?>"><?php echo ($PTY); ?></option>
                                                <option value="Apartment">Apartment</option>
                                                <option value="House">House</option>
                                                <option value="Lot">Lot</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="propertyprice" class="input-text" name="your name" value="<?php echo ($PPR); ?>" placeholder="MYR">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Area/Location</label>
                                            <input type="text" name="area" class="input-text" name="your name" value="<?php echo ($PA); ?>" placeholder="Pelangi Utama Condo">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Rooms</label>
                                            <select class="selectpicker search-fields" name="1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <select class="selectpicker search-fields" name="1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main-title-2">
                                <h1><span>Property</span> Gallery</h1>
                            </div>
                            <div id="myDropZone" class="dropzone dropzone-design">
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                            </div>

                            <div class="main-title-2">
                                <h1><span>Location</span></h1>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="input-text" name="address"  placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="input-text" name="city"  placeholder="Petaling Jaya">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="selectpicker search-fields" name="choose-state" data-live-search="true" data-live-search-placeholder="Search value">
                                            <option>Choose State</option>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="input-text" name="zip"  placeholder="Postal Code">
                                    </div>
                                </div>
                            </div>

                            <div class="main-title-2">
                                <h1><span>Detailed</span> Information</h1>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descriptions</label>
                                        <textarea class="input-text" name="message" placeholder="any Descriptions..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="margin-t-10">Features (optional)</label>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-xs-12">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">
                                                    Free Parking
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox2" type="checkbox">
                                                <label for="checkbox2">
                                                    Air Condition
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox3" type="checkbox">
                                                <label for="checkbox3">
                                                    Places to seat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-12">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox4" type="checkbox">
                                                <label for="checkbox4">
                                                    Swimming Pool
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox5" type="checkbox">
                                                <label for="checkbox5">
                                                    Laundry Room
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox6" type="checkbox">
                                                <label for="checkbox6">
                                                    Window Covering
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-12">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox7" type="checkbox">
                                                <label for="checkbox7">
                                                    Central Heating
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkbox8" type="checkbox">
                                                <label for="checkbox8">
                                                    Alarm
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main-title-2">
                                <h1><span>Contact Details</span></h1>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="input-text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="input-text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone (optional)</label>
                                        <input type="text" class="input-text" name="phone"  placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button name="savechanges" class="btn button-md button-theme">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Submit Property end -->


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