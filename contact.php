<?php include('formprocess.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voucher Cart</title>
	
	
	
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

</head>
<body>


<style>



*{
	padding: 0;
	margin: 0;
}

.nav{
	position: fixed;
	height: 90px;
	width: 100%;
	top: 0;
	left: 0;
	background: grey;
}

.nav ul{
	float: left;
	margin-right: 19px;
}
.nav ul li{
	list-style: none;
	margin: 0 10px;
	display: inline-block;
	line-height: 90px;
}
.nav ul li a{
	font-size: 21px;
	color: white;
	padding: 8px 15px;
	text-decoration: none;
	transition: .2s;
}

.nav ul li a:hover{
	background: pink;
	border-radius: 2px;
}
.cover .center{
	position: absolute;
	left: 55%;
	top: 55%;
	transform: translate(-55%, -50%);
	user-select: none;
}
.center h1{
	color: red;
	font-size: 75px;
	width: 890px;
	font-weight: bold;
	text-align: center;
}
.center h2{
	color: red;
	font-size: 75px;
	font-weight: bold;
	margin-top: 14px;
	width: 889px;
	text-align: center;
	
	
	}









body{
 background: url(image2.jpg) no-repeat;
	background-size: cover;
	height: 100vh;
}

.holder{
  position: absolute;
 top: +57%;
  left: 55%;
  transform: translate(-60%,-40%);
  max-width: 400px;
  width: 100%;
  background: white;
  padding: 20px;
  border-radius: 7px;
 
}

/*
.holder h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 4px;
  color: black;
}
*/


/*
.holder .field{
  margin-bottom: 15px;
}
*/



/*
.holder.field input[type="text"],
.holder textarea{
  border: 1px solid silver;
  width: 90%;
  padding: 15px;
}
*/


/*
.holder textarea{
  resize: none;
  height: 90px;
}
*/


/*
.holder .button input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 90%;
  background: 	#F7E7CE;
  color: black;
  text-transform: uppercase;
  letter-spacing: 6px;
  font-weight: bold;
  border-radius: 27px;
  cursor: pointer;
}
*/


/*
#error{
  margin-bottom: 27px;
  background: red;
  padding: 0px;
  text-align: center;
  font-size: 18px;
  transition: all 2s ease;
}
*/
	
input , textarea{
padding: 15px;
border-radius:12px;

}

button{
width:30%;
position:relative;
left:15%;
padding:15px;
border-radius:12px;
background-color:#97D5E8;


}


</style>



	<div class="cover">
			<nav class="nav">
		
				<ul>
					<li><a class="active" href="index.html">Home</a></li>
					<li><a href="products.html">Products</li>
					<li><a href="addcart.html">AddCart</a></li>
					<li><a href="payment.html">Payment</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="login.php" class="right-link">Logout</a></li>
				</ul>
			</nav>
			
			
			
			
			
			
			
			
			
			
			<div class="holder">
  <h2>Contact us</h2>
 
  
  <form id="contact" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <h3>Your Idea Matters</h3>


<fieldset>

<label for="name"> Enter your Name</label><br>
<input placeholder="Your Name" type="text" name="name" tabindex="1"   value="<?= $name ?>"autofocus><br>
<span class="error"><?= $name_error ?></span>
</fieldset>

<fieldset>
<label for="email"> Enter your Email</label><br>

<input placeholder="Your Email Address" type="text"  name="email" value="<?= $email ?>" tabindex="2"><br>
<span class="error"><?= $email_error ?></span>
</fieldset>
<fieldset>

<label for="phone"> Enter your Phone</label><br>
<input placeholder="Your Phone Number" type="text"  name="phone" value="<?= $phone ?>" tabindex="3"><br>
<span class="error"><?= $phone_error ?></span>
</fieldset>

<fieldset>

<label for="message"> Enter your Message</label><br>

<textarea placeholder="Type Your Message" type="text"   name="message" value="<?= $message ?>"  tabindex="5" ></textarea><br>

</fieldset>

<fieldset>
<button name="submit" type="submit" id="contact-submit" data-submit="Sending">Send</button>

<div class="success"><?= $success; ?></div>
</fieldset>




</form>


</div>









<script src=" https://smtpjs.com/v3/smtp.js"></script>

<script>




}).then(msg=> alert("The Email is Sent"))







})





</script>
			
			
			
			
			
			

		
</body>
</html>