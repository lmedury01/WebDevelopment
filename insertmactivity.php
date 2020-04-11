<?php
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$activity=$_POST['activity'];
	$username=$_POST['username'];
	
	$sql="INSERT INTO mchecklist(activity,username) values ('$activity','$username')";
	if(!mysqli_query($con,$sql)){
		echo 'Not inserted';
	}
	else{
		header("Location: monthlychecklist.php");
	}
	
?>