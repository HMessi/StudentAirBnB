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
                        <li class="dropdown">
                            <a href="index.php">Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="properties.html">Properties</a>
                        </li>

                        <li class="dropdown active">
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

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Our Agents</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Agents</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Agent section start -->
    <div class="agent-section content-area">
        <div class="container">
            <!-- option bar start -->
            <div class="option-bar">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                        <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                            </span>
                            <span class="hidden-xs">Agent List</span>
                        </h4>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                        <div class="sorting-options">
                            <select class="sorting">
                                <option>New To Old</option>
                                <option>Old To New</option>
                                <option>Properties (High To Low)</option>
                                <option>Properties (Low To High)</option>
                            </select>
                            <a href="agent-listing-row.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                            <a href="agent-listing-grid.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- option bar end -->
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Agent box big start -->
                    <div class="agent-box-big clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-5 agent-box-theme">
                            <img src="img/team/team-2.jpg" alt="team-2" class="img-responsive">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-7 agent-content detail">
                            <!-- Title -->
                            <h1 class="title">
                                <a href="agent-single.html">Karen Paran</a>
                            </h1>
                            <!-- contact -->
                            <div class="contact">
                                <p class="pgo2">
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a><a href="tel:+554XX-634-7071"><i class="fa fa-phone"></i>+55 4XX-634-7071</a><a href="#"><i class="fa fa-skype"></i>sales.carworld</a>
                                </p>
                            </div>
                            <p>Morbi accumsan ipsum velit nam nec tellus a odio tincidunt auctor a ornare odio sed non mauris<span class="hidden-sm">  vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos him enaeos mauris in erat</span> </p>
                            <!-- footer -->
                            <div class="footer clearfix">
                                <div class="pull-left">
                                    <!-- social list -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn button-sm button-theme">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-box-big clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-5 agent-box-theme">
                            <img src="img/team/team-3.jpg" alt="team-3" class="img-responsive">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-7 agent-content detail">
                            <!-- Title -->
                            <h1 class="title">
                                <a href="agent-single.html">David Jackson</a>
                            </h1>
                            <!-- contact -->
                            <div class="contact">
                                <p class="pgo2">
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a><a href="tel:+554XX-634-7071"><i class="fa fa-phone"></i>+55 4XX-634-7071</a><a href="#"><i class="fa fa-skype"></i>sales.carworld</a>
                                </p>
                            </div>
                            <p>Morbi accumsan ipsum velit nam nec tellus a odio tincidunt auctor a ornare odio sed non mauris<span class="hidden-sm">  vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos him enaeos mauris in erat</span> </p>
                            <!-- footer -->
                            <div class="footer clearfix">
                                <div class="pull-left">
                                    <!-- social list -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn button-sm button-theme">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-box-big clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-5 agent-box-theme">
                            <img src="img/team/team-4.jpg" alt="team-4" class="img-responsive">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-7 agent-content detail">
                            <!-- Title -->
                            <h1 class="title">
                                <a href="agent-single.html">Eliane Pereira</a>
                            </h1>
                            <!-- contact -->
                            <div class="contact">
                                <p class="pgo2">
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a><a href="tel:+554XX-634-7071"><i class="fa fa-phone"></i>+55 4XX-634-7071</a><a href="#"><i class="fa fa-skype"></i>sales.carworld</a>
                                </p>
                            </div>
                            <p>Morbi accumsan ipsum velit nam nec tellus a odio tincidunt auctor a ornare odio sed non mauris<span class="hidden-sm">  vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos him enaeos mauris in erat</span> </p>
                            <!-- footer -->
                            <div class="footer clearfix">
                                <div class="pull-left">
                                    <!-- social list -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn button-sm button-theme">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-box-big clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-5 agent-box-theme">
                            <img src="img/team/team-1.jpg" alt="team-1" class="img-responsive">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-7 agent-content detail">
                            <!-- Title -->
                            <h1 class="title">
                                <a href="agent-single.html">John Antony</a>
                            </h1>
                            <!-- contact -->
                            <div class="contact">
                                <p class="pgo2">
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a><a href="tel:+554XX-634-7071"><i class="fa fa-phone"></i>+55 4XX-634-7071</a><a href="#"><i class="fa fa-skype"></i>sales.carworld</a>
                                </p>
                            </div>
                            <p>Morbi accumsan ipsum velit nam nec tellus a odio tincidunt auctor a ornare odio sed non mauris<span class="hidden-sm">  vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos him enaeos mauris in erat</span> </p>
                            <!-- footer -->
                            <div class="footer clearfix">
                                <div class="pull-left">
                                    <!-- social list -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn button-sm button-theme">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-box-big clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-5 agent-box-theme">
                            <img src="img/team/team-2.jpg" alt="team-2" class="img-responsive">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-7 agent-content detail">
                            <!-- Title -->
                            <h1 class="title">
                                <a href="agent-single.html">Karen Paran</a>
                            </h1>
                            <!-- contact -->
                            <div class="contact">
                                <p class="pgo2">
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a><a href="tel:+554XX-634-7071"><i class="fa fa-phone"></i>+55 4XX-634-7071</a><a href="#"><i class="fa fa-skype"></i>sales.carworld</a>
                                </p>
                            </div>
                            <p>Morbi accumsan ipsum velit nam nec tellus a odio tincidunt auctor a ornare odio sed non mauris<span class="hidden-sm">  vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos him enaeos mauris in erat</span> </p>
                            <!-- footer -->
                            <div class="footer clearfix">
                                <div class="pull-left">
                                    <!-- social list -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn button-sm button-theme">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agent box big end -->
                </div>
            </div>
            <!-- Page navigation start -->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Page navigation end -->
        </div>
    </div>
    <!-- Agent section end -->


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