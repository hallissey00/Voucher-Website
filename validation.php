<?php

header('location:login.php');


	$email = $_POST['email'];
	$password = $_POST['password'];
	

	$s ="select * from usertable where email = '$email'  && password = '$password' ";
	
	
	$result = mysqli_query($conn, $s);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		
		
		
	}

$conn = new mysqli('localhost', 'root', '', 'userregistration');


if($conn->connect_error){
	
	die('Connection Failed :'.$conn->connect_error);
		
		
		
	}else{
		header('location:index.html');
		
		
	}
	
	
	

?>