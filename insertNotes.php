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

	$note=$_POST['note'];
	
	
	$sql="INSERT INTO notes(note,username) values ('$note','$var')";
	if(!mysqli_query($con,$sql)){
		echo 'Not inserted';
	}
	else{
		header("Location: viewnotes.php");
	}
	
?>