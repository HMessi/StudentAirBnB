<?php
require 'include/connection.php';
session_start();

if(isset($_SESSION['fullname']))
{
	header("Location: index.php");
}