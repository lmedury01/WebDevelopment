<?php
	session_start();
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}
	$username=$_POST['username'];
	$password=$_POST['pass'];

	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['pass']);
	
	
	$result=mysqli_query($con,"select * from register where username='$username' and password='$password'") or die("Failed to query database ".mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if($row['username']==$username && $row['password']==$password){
		$_SESSION["username"] = $username;

		header("Location: loginsuccess.html");
	}
	else{
		header("Location: loginfail.html");
	}
	
?>