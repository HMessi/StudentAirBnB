<?php
session_start();
include 'include/connection.php';
include 'profun.php';

echo $infodel;

//$sem='wdahmed25@yhoo.com';
//$msg='';
$mypt ='';
if(!isset($_SESSION['fullname']))
{
  header("Location: login.php");
}

$StudentName = $_SESSION["fullname"];
$StudentEmail = $_SESSION["studentemail"];
$EM = $StudentEmail;

$stm = "SELECT * FROM Properties WHERE Properties_Owner='".$EM."'";
$result = mysqli_query($conn, $stm);
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
                                <li><a href="#"><i class="fa fa-edit"></i>Edit Profile</a></li>
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
                    <h1>My Properties</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="user-profile.php">My Profile</a></li>
                        <li class="active">My Properties</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- My Propertiess start -->
    <div class="content-area my-properties">
        <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <!-- User account box start -->
                  <div class="user-account-box">
                    <div class="header clearfix">
                        <h3><?php echo ($StudentName); ?></h3>
                        <p><?php echo ($StudentEmail); ?></p>
                        <div class="edit-profile-photo">
                            <img src="img/avatar/avatar-1.jpg" alt="agent-1" class="img-responsive">
                            <form method="POST" enctype="multipart/form-data" class="btn">
                                <div class="photoUpload button-theme">
                                    <span><i class="fa fa-upload"></i> Edit Photo</span>
                                    <input type="file" name="up" class="upload">
                                </div>
                                <button submit="file" name="upload" class="photoUpload button-theme">Save</button>
                            </form>
                        </div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <a href="user-profile.html" class="active">
                                    <i class="fa fa-user-circle-o"></i>Profile
                                </a>
                            </li>
                            <li>
                                <a href="myproperties.php">
                                    <i class="fa fa-diamond"></i>My Properties
                                </a>
                            </li>
                            <li>
                                <a href="favorited-properties.html">
                                    <i class="fa fa-heart"></i>Favorited Properties
                                </a>
                            </li>
                            <li>
                                <a href="newproperties.php">
                                    <i class="fa fa-plus"></i>Add New Property
                                </a>
                            </li>
                            <li>
                                <a href="change-password.php">
                                    <i class="fa fa-lock"></i>Change Password
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12">
               <div class="main-title-2">
                   <h1><span>My Properties</span></h1>
               </div>
               <!-- table start -->
               <table class="manage-table responsive-table">
                <tbody>
                    <?php
                    if(!mysqli_query($conn, $stm))
                    {
                      echo 'Sorry for inconvenient cause, Our Server is Down, Please try again later!';
                        //echo("Error description: " . mysqli_error($conn));
                        //header("Location: server.php");
                  }
                  else
                  {
                      if(mysqli_num_rows($result)>0)
                      {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                          $PT = $row['Properties_Title'];
                          $PTY = $row['Type'];
                          $PA = $row['Area'];
                          $PPR = $row['Price'];
                          $PID = $row['PID'];
                          $PD = $row['PDate'];
                          $date = date('d/F/Y', strtotime($PD));

                          $mypt = "<tr>
                          <td class='title-container'>
                          <img src='img/my-properties/my-properties-1.jpg' alt='my-properties-1' class='img-responsive hidden-xs'>
                          <div class='title'>
                          <h4><a href='view.php?view'>$PT</a></h4>
                          <span><i class='fa fa-map-marker'></i> $PA </span>
                          <span class='table-property-price'>MYR $PPR /Month</span>
                          </div>
                          </td>
                          <td class='expire-date hidden-xs'> $date </td>
                          <td class='action'>

                          <a href='edit_property.php?edit= $PID'><i class='fa fa-pencil'></i> Edit</a>
                          <a href='profun.php?del= $PID'><i class='fa fa-remove'></i> Delete</a>
                          </td>
                          </tr>";

                          echo ($mypt);
                      }
                  }
                  else
                  {
                    $mypt = 'You Do Not have any listed properties yet';
                }
            }
            ?>
            <!--hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-->
        </tbody>
    </table>
    <!-- table end -->
</div>
</div>
</div>
</div>
<!-- My Propertiess end -->



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
<script type="text/javascript" src="js/maps.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/custome.js"></script>
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="js/msgpop.js"></script>
<script type="text/javascript" src="js/msg.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>