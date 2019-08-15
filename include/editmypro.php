<?php
session_start();
include 'include/connection.php';

$info = '';
if(!isset($_SESSION['fullname']))
{
	header("Location: login.php");
}

$StudentEmail = $_SESSION["studentemail"];
$PID = $_GET['edit'];
$date = date('Y-m-d');

$stm = "SELECT * FROM Properties WHERE PID= '".$PID."'";
$result = mysqli_query($conn, $stm);
$row = mysqli_fetch_assoc($result);

$PT = $row['Properties_Title'];
$PTY = $row['Type']; 
$PPR = $row['Price'];
$PA = $row['Area'];




if(isset($_POST["savechanges"]))
{
	$PT = mysqli_real_escape_string($conn, $_POST['propertytitle']); 
	$PTY = mysqli_real_escape_string($conn, $_POST['type']);  
	$PPR = mysqli_real_escape_string($conn, $_POST['propertyprice']);
	$PA = mysqli_real_escape_string($conn, $_POST['area']);



	if(mysqli_num_rows($result)<0)
	{
		echo 'Property is not Existed!';
	}
	else
	{
		$sql = "UPDATE Properties SET Properties_Title='$PT',  Type='$PTY', Area='$PA', Price='$PPR', PDate='$date' WHERE PID='".$PID."'";


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

			echo('Yaaaaaaaaaaaay Updated!!!');
		}
	}
}