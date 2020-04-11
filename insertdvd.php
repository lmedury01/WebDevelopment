<?php
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$book=$_POST['name'];
	$username=$_POST['username'];
	
	$sql="INSERT INTO dvd(name,username) values ('$book','$username')";
	if(!mysqli_query($con,$sql)){
		echo 'Not inserted';
	}
	else{
		header("Location: viewdvd.php");
	}
	
?>