<?php
session_start();
include 'include/connection.php';

//$sem='wdahmed25@yhoo.com';
//$msg='';
$info = '';
if(!isset($_SESSION['fullname']))
{
  header("Location: login.php");
}




$StudentName = $_SESSION["fullname"];
$StudentEmail = $_SESSION["studentemail"];
$PhoneNO = $_SESSION["phno"];
$UniversityName = $_SESSION["uniname"];
$AboutMe = $_SESSION["aboutme"];
$Title = $_SESSION["title"];

/*if(isset($_POST["upload"]))
{
  $target = "img/".basename($_FILES['up']['name']);
  $image = $_FILES['up']['name'];

  $sql = "UPDATE Students SET User_Pic='$image' WHERE Email='".$sem."'";
  mysqli_query($conn, $sql);

  if(move_uploaded_file($_FILES['up']['tmp_name'], $target))
  {
    $msg="Image Uploded successfully";
  }
  else
  {
    $msg = "there was a proplem with the picture";
  }
}*/



if(isset($_POST["saveprofile"]))
{
  $EM = $StudentEmail;
  $TI = mysqli_real_escape_string($conn, $_POST['title']); 
  $PN = mysqli_real_escape_string($conn, $_POST['phone']);  
  $UNI = mysqli_real_escape_string($conn, $_POST['university']);
  $AM = mysqli_real_escape_string($conn, $_POST['aboutme']);
  
  
  

  $stm = "SELECT * FROM Students WHERE Email='".$EM."'";
  $result = mysqli_query($conn, $stm);
  $row = mysqli_fetch_assoc($result);


  if(mysqli_num_rows($result)<0)
  {
    echo 'User is not Existed!';
  }
  else
  {
    $sql = "UPDATE Students SET Title='$TI',  Phone_NO='$PN', Uni_Name='$UNI', About_Me='$AM' WHERE Email='".$EM."'";


    if(!mysqli_query($conn, $sql))
    {
      echo 'Sorry for onconvenient cause, Our Server is Down, Please try again later!';
      //echo("Error description: " . mysqli_error($conn));
      header("Location: server.php");
    }
    else
    {
      $PhoneNO = $PN;
      $UniversityName = $UNI;
      $AboutMe = $AM;
      $Title = $TI;
      $info = "<div class='alert alert-success wow fadeInLeft delay-03s'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
      <strong> Profile was updated successfully! </strong><br/>
      </div>";
      //header("Location: user-profile.php");
    }
  }
}