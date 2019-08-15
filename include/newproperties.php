<?php
session_start();
include 'include/connection.php';

$info = '';
if(!isset($_SESSION['fullname']))
{
	header("Location: login.php");
}

$StudentEmail = $_SESSION["studentemail"];
$date = date('Y-m-d');

if(isset($_POST["publish"]))
{
	$EM = $StudentEmail;
	$PT = mysqli_real_escape_string($conn, $_POST['propertytitle']); 
	$PTY = mysqli_real_escape_string($conn, $_POST['type']);  
	$PPR = mysqli_real_escape_string($conn, $_POST['propertyprice']);
	$PA = mysqli_real_escape_string($conn, $_POST['area']);
	$POW = $StudentEmail;




	$stm = "SELECT * FROM Properties";
	$result = mysqli_query($conn, $stm);
	$row = mysqli_fetch_assoc($result);


	if(mysqli_num_rows($result)<0)
	{
		echo 'User is not Existed!';
	}
	else
	{
		$sql = "INSERT INTO Properties ( Properties_Title, Type, Area, Price, 	Properties_Owner, PDate) VALUES ('$PT', '$PTY', '$PA', '$PPR', '$POW', '$date')";

		if(!mysqli_query($conn, $sql))
		{
			echo 'Sorry for onconvenient cause, Our Server is Down, Please try again later!';
			echo("Error description: " . mysqli_error($conn));
			//header("Location: server.php");
		}
		else
		{
			
			/*$info = "<div class='alert alert-success wow fadeInLeft delay-03s'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong> Profile was updated successfully! </strong><br/>
			</div>";*/
      		//header("Location: user-profile.php");

			echo('Yaaaaaaaaaaaay inserted!!!');
		}
	}
}