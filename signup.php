<?php
require 'include/signup.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

    <title>Student Airbnb Sign Up</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <!-- Content area start -->
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form content box start -->
                    <div class="form-content-box">
                        <!-- details -->
                        <div class="details">
                            <!-- Main title -->
                            <div class="main-title">
                                <h1><span>Signup</span></h1>
                            </div>
                            <!-- Form start-->
                            <form data-toggle="validator" method="POST">
                                <div class="form-group has-feedback">
                                    <select name="title" class="selectpicker" data-error="Please select a title" required>
                                        <option value="">Your title</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                    </select>
                                    <div class="help-block with-errors glyphicon"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <input type="text" name="fullname" minlength="5" class="form-control" id="inputName" placeholder="Full Name" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" data-error="invalid E-Mail address" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <input type="password" name="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Password, Min 8 characters" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group has-feedback">
                                    <input type="password" name="conpassword" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" placeholder="Re-type Password"  data-match-error="Passwords Don't Match"required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name=submit class="button-md button-theme btn-block">Signup</button>
                                </div>
                            </form>
                            <!-- Form end-->
                        </div>
                        <!-- Footer -->
                        <div class="footer">
                            <span>
                                I already have an account <a href="login.php">return to login</a>
                            </span>
                        </div>
                    </div>
                    <!-- Form content box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content area end -->

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
    <script type="text/javascript" src="js/validator.js"></script>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>