<?php
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$tid=$_POST['id'];

	$sql="UPDATE notes SET status='Deleted' WHERE id='{$tid}'";
	if(!mysqli_query($con,$sql)){
		echo 'Not Deleted';
	}
	else{
		header("Location: viewnotes.php");
	}
	
?>