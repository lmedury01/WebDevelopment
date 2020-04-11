<?php
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$name=$_POST['name'];
	$age=$_POST['age'];
	$username=$_POST['username'];
	$password=$_POST['pass'];
	
	$sql="INSERT INTO register values ('$username','$name','$age','$password')";
	if(!mysqli_query($con,$sql)){
		echo 'Not Created';
	}
	else{
		header("Location: registersuccess.html");
	}
	
?>