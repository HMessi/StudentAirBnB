<?php
require 'include/connection.php';
session_start();

if(isset($_SESSION['fullname']))
{
  header("Location: index.php");
}

$info = '';
//start 
//session started from sign up page to inform the user about successfull registeration
if(!isset($_SESSION['passinfo']))
{
  $infopass = '';
}
else
{
  $infopass = $_SESSION["passinfo"];
}
//session started from sign up page to inform the user about successfull registeration
//end


if(isset($_POST["btn-login"]))
{
  $EM = mysqli_real_escape_string($conn, $_POST['email']);  
  $pwd = mysqli_real_escape_string($conn, $_POST['Password']);

  $stm = "SELECT * FROM students WHERE Email='".$EM."'";
  $result = mysqli_query($conn, $stm);
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result)<0)
  {
    echo ("Please Try again!");
  }
  else
  {
    $dbpass = $row['Password'];
    $pwd = PASSWORD_VERIFY($pwd, $dbpass);
    if(($pwd == $dbpass) & ($EM == $row['Email']))
    {
      $sname = $row['Student_Name'];
      $semail = $row['Email'];
      $sphno = $row['Phone_No'];
      $suni = $row['Uni_Name'];
      $sabout = $row['About_Me'];
      $stitle = $row['Title'];

      $_SESSION["fullname"] = $sname;
      $_SESSION["studentemail"] = $semail;
      $_SESSION["phno"] = $sphno;
      $_SESSION["uniname"] = $suni;
      $_SESSION["aboutme"] = $sabout;
      $_SESSION["title"] = $stitle;
      header("Location: user-profile.php");
    }
    else
    {
      //alert the user when enter invalid email or password
      $info ="<div class='alert alert-danger wow fadeIn'  role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
      <strong>Oh snap!</strong> Invalid Pssword/E-Mail
      </div>";
    }
  }
}