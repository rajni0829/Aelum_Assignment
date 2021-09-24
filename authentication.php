<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$aboutyourself = $_POST['aboutyourself'];
	$result = mysqli_query($mysqli,"insert into user values('$name','$email','$dob','$aboutyourself')");
	if($result)
	{
		echo "Registration Successful";
	}
	else{
		echo "failed:";
	}
}
?>