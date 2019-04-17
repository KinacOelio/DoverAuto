<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
#in{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
	font-size: 20px;
}

#cSub {
    background-color: white;
    border: 3px solid;
    border-radius: 4px;
    cursor: pointer;
	font-size: 30px;
	 width: 100%;
  display: center;
  align-self: center;
	 font-family: 'Jura', sans-serif;
		
}

#cSub:hover {
    webkit-animation:rainbow 2s infinite;
ms-animation:rainbow 2s infinite;
o-animation:rainbow 2s infinite;
animation:rainbow 2s infinite;
border-style: dashed;
	
	
}


.cf
{
	 font-family: 'Jura', sans-serif;	
		  width: 80%;
	 text-align: center;
	padding: 2px 260px;
}
</style>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Dover Auto</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/masterSmall.css">
	<link rel="stylesheet" media="screen and (min-width: 1200px)" href="css/masterLarge.css">
	<link href="css/index.css" rel="stylesheet">
	<script type="text/javaScript" src="javaScript/jquery-3.3.1.js"></script>
</head>
<body>
<div id="navbar"></div>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input id="in"type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input id="in"type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input id="in"type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input id="in"type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button id="cSub" type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <script src="javaScript/master.js"></script>
</body>
</html>