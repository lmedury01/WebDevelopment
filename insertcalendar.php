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

	$month=$_POST['month'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$activity=$_POST['activity'];
	$sql="INSERT INTO calendar values ('$month','$from', '$to','$activity','$var')";
	if(!mysqli_query($con,$sql)){
		echo 'Not inserted';
	}
	else{
		header("Location: calendar.php");
	}
	
?>