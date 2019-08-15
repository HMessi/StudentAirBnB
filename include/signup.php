<?php
session_start();
include 'include/connection.php';

if(isset($_SESSION['fullname']))
{
  header("Location: index.php");
}

$infopass='';
if(isset($_POST["submit"]))
{
  $FN = mysqli_real_escape_string($conn, $_POST['fullname']);  
  $EM = mysqli_real_escape_string($conn, $_POST['email']);
  $PWD = mysqli_real_escape_string($conn, $_POST['password']);
  $TI = mysqli_real_escape_string($conn, $_POST['title']);
  
  
  

  $stm = "SELECT * FROM Students WHERE Email='".$EM."'";
  $result = mysqli_query($conn, $stm);
  $row = mysqli_fetch_assoc($result);


  if(mysqli_num_rows($result)>0)
  {
    echo 'This E-Mail  '.$EM.'  is already Registered, Please sign in';
  }
  else
  {
    $PWD = PASSWORD_HASH($PWD, PASSWORD_BCRYPT, array('cost' => 8));
    $sql = "INSERT INTO Students ( Title, Student_Name, Email, Password) VALUES ('$TI', '$FN', '$EM', '$PWD')";


    if(!mysqli_query($conn, $sql))
    {
      header("Location: server.php");
    }
    else
    {
      //echo 'Congratulations, Successfully Registered!!!';
      $infopass ="<div class='alert alert-success wow fadeInLeft delay-03s'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
      <strong>Congratulations, Registeration Successfull! </strong><br/> You have successfully registered with Students AirBnB! Please login to continue
      </div>";

      $_SESSION["passinfo"] = $infopass;
      header("Location: login.php");
    }
  }
}