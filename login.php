<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration system PHP and MySQL</title>
<style>
* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background-image:url("https://wallpapertag.com/wallpaper/full/d/e/3/305563-computer-background-2560x1440-image.jpg");
}
.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: blue;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: green;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}

</style>
</head>
<body>
<div class="header">
<h2>Login</h2>
</div>
<form method="post" action="login.php">
<?php echo display_error(); ?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" >
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>
<div class="input-group">
<button type="submit" class="btn" name="login_btn">Login</button>
</div>
<p>Not yet a member? <a href="register.php">Sign up</a></p>
</form>
</body>
</html>
