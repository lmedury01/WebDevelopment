<?php
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	$id=$_POST['id'];

	$sql="UPDATE task SET status='Completed' where id='{$id}'";
	if(!mysqli_query($con,$sql)){
		echo 'Not Marked as Completed';
	}
	else{
		header("Location: viewptasks.php");
	}
	
?>