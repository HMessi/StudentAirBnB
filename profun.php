<?php
include 'include/connection.php';
$infodel ='';
if(isset($_GET['del']))
{
	$PID = $_GET['del'];
	//$stm = "SELECT * FROM Properties WHERE Properties_Owner='".$EM."'";
	$sql = "DELETE FROM Properties WHERE PID= '".$PID."'";
	$result = mysqli_query($conn, $sql) or die("Failed".mysql_error());
	echo "<meta http-equiv='refresh' content='0;url=myproperties.php'>";
	$infodel = "Successfully Deleted";
}
else if(isset($_GET['view']))
{
	$PID = $_GET['view'];
}

?>