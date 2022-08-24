<?php
print_r($_POST);

$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phne = $message = $url = $success = "";


if($_SERVER['REQUEST_METHOD']== "POST"){
IF(empty($_POST["name"])){
$name_error = "Name Cannot Be Left Blank";
}else{
$name = test_input($_POST["name"]);

if(!preg_match("/^[a-zA-Z]*$/",$name)){
$name_error = "Only Letters And White Space Allowed";

}

}

if(empty($_POST["email"])){
$email_error = "Email Cannot Be Left Blank";


}else{
$email = test_input($_POST["email"]);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$email_error = "Invalid email";


}


}

if(empty($_POST["phone"])){
$phone_error = "Phone Cannot be Left Blank";
}else{
$phone = test_input($_POST["phone"]);
if(!preg_match("/^(\d[s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)){


}


}

if(empty($_POST["url"])){
$url_error = "";

}

}else{
$url = test_input($_POST["url"]);
if(!preg_match("/\b(?:https?|ftp):\/\|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)){


}

}

if(empty($_POST["message"])){
$message = "";


}else{
$message = test_input($_POST["message"]);

}

if($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == ''){
	$message_body = '';
	unset($_POST['submit']);
	foreach($_POST as $key => $value){
		$message_body .= "$key: $value\n";
		
	}
	
	$to = 'kmalelhaj050@gmail.com';

	$subject = 'Contact Form Submited Sucessfully';
	if(mail($to, $subject, $message)){
		$success = "Message Sent, Thank You ";
		$name = $email = $phone = $message = $url = '';

		
	}
	
}




function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}