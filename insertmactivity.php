<?php
	session_start();
	include_once('connection.php');
	$var=$_SESSION["username"];
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$activity=$_POST['activity'];
	
	$sql="INSERT INTO mchecklist(activity,username) values ('$activity','$var')";
	if(!mysqli_query($con,$sql)){
		echo 'Not inserted';
	}
	else{
		header("Location: monthlychecklist.php");
	}
	
?>