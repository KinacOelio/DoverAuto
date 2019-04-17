<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Dover Auto</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/masterLarge.css">
	<link href="css/login.css" rel="stylesheet">
	<script type="text/javaScript" src="javaScript/jquery-3.3.1.js"></script>

  <title>Registration</title>
 
</head>
<body>

<div id="navbar"></div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username<br></label>
  		<input id="in" type="text" class="use" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input id="in" class="pass" type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button id="cSub"type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
		or <a href="index.php">continue as guest</a>
  	</p>
	<p>
  	 
  	</p>
  </form>
  <script src="javaScript/master.js"></script>
</body>
</html>