<?php
session_start();
include 'include/connection.php';

$css = '';
$bhost ='';
$usernav = '';
if(!isset($_SESSION['fullname']))
{
	$usernav ="<ul class='top-social-media pull-right'>
	<li>
	<a href='login.php' class='sign-in'><i class='fa fa-sign-in'></i> Login</a>
	</li>
	<li>
	<a href='signup.php' class='sign-in'><i class='fa fa-user'></i> Register</a>
	</li>
	</ul>";

	$bhost = "<li>
	<a href='submit-property.html' class='button'>
	Become a Host
	</a>
	</li>";

	$css = "top-header-custom";
}
else
{
	$usernav ="<ul class='list-inline pull-right'>
	<li class='dropdown'>
	<a href='#' class='dropdown-toggle'><i class='fa fa-bell'></i>Notification</a>
	</li>
	<li class='dropdown'>
	<a href='#' class='dropdown-toggle'><i class='fa fa-envelope'></i>Messages</a>
	</li>
	<li class='dropdown'>
	<a class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> My Account <b class='caret'></b></a>
	<ul class='dropdown-menu dropdown-menu-custome'>
	<li><a href='user-profile.php'><i class='fa fa-edit'></i>Edit Profile</a></li>
	<li><a href='#'><i class='fa fa-signing'></i>My Current Rent</a></li>
	<li><a href='#'><i class='fa fa-credit-card'></i>Payment</a></li>
	<li class='divider'></li>
	<li><a href='logout.php'><i class='fa fa-sign-out'></i>Log Out</a></li>
	</ul>
	</li>
	</ul>";
}