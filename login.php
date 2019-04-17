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
  <title>Registration</title>
 
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input id="in"type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input id="in"type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button id="cSub"type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	<p>
  	 <a href="main.php" id="cSub">continue as guess</a>
  	</p>
  </form>
</body>
</html>