<?php
	session_start();
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$Task=$_POST['task'];
	$Deadline=$_POST['deadline'];
	$var=$_SESSION["username"];
	$sql="INSERT INTO task(note,deadline,username) values ('$Task','$Deadline','$var')";
	if(!mysqli_query($con,$sql)){
		echo 'Not inserted';
	}
	else{
		header("Location: viewptasks.php");
	}
	
?>