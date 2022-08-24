<?php




	$email = $_POST['email'];
	$name = $_POST['user'];
	$password = $_POST['password'];


$conn = new mysqli('localhost', 'root', '', 'userregistration');




	$s ="select * from usertable where email = '$email' && name = '$name' && password = '$password' ";
	
	
	$result = mysqli_query($conn, $s);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		
		
		echo"Email Already Taken";
	}



if($conn->connect_error){
	
	die('Connection Failed :'.$conn->connect_error);
		
		
		
	}else{
		 $stmt = $conn->prepare("insert into usertable(email, name, password)
		 values(?,?,?)");
		 
		 $stmt->bind_param("sss", $email, $name, $password);
		 $stmt->execute();
		 echo"Registration Sucessfull";
		 $stmt->close();
		 $conn->close();
		
	}
	
	
	

?>