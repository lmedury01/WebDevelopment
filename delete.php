<?php
	$con=mysqli_connect('127.0.0.1','root','password');
	if(!$con){
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'webapp')){
		echo 'Database Not Selected';
	}

	if(isset($_POST["delete"])){
		if(!empty($_POST["activity"])){
			foreach($_POST["activity"] as $activity){
				/*
				$sql="update task set status='Deleted' where id='{$activity}'";
				if(!mysqli_query($con,$sql)){
					echo 'Not inserted';
				}
				else{
					echo 'Modified';
				}
				*/
				echo '<p>'.$activity.'</p';
			} 
		}
		else{
			echo "Please select atleast one activity";
		}
	}
	else{
		echo "Didn't even go in";	
	}
	
?>