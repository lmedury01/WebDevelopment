<?php
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$goal=$_POST['goal'];
	$username=$_POST['username'];
	
	$sql="INSERT INTO ltgoals(goal,username) values ('$goal','$username')";
	if(!mysqli_query($con,$sql)){
		echo 'Not inserted';
	}
	else{
		header("Location: ltgoals.php");
	}
	
?>