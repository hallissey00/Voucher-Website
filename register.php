<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voucher Cart</title>
	
	

	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>

<style>
body{
	background: linear-gradient(rgba(0,0,50,0.5), rgba(0,0,50,0.5)), url(background.jpg);
	background-size:cover;
	background-position:center;
	
	
}

.register-box{
	
	max-width:700px;
	float:none;
	margin:150px auto;
}

.register-right{
	
	background:#fff;
	padding:30px;
}
</style>

<div class="container">
<div class="register-box">
<div class="row">

<div class="col-md-6 register-right">
<h1>Register Here</h1>
<form action="registration.php" method="post">

<div class="form-group">
<label>Name</label>
<input type="text" name="user" class="form-control" required>
</div>


<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" required>

</div>


<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>

</div>

<button type="submit" class="bt btn-primary"> Register</button>

 <div class="form-group">Already Have An Account?
                   
  <a href="login.php" class="right-link">Login Now</a>
  </div>
</form>


</div>

</div>


</div>
</div>
		
</body>
</html>